<?php

require_once(__DIR__ . '/../wp-load.php');
require_once(__DIR__ . '/../wp-admin/includes/user.php');

define("REASON_CATEGORY_NEWS", 345118);
define("REASON_CATEGORY_SPORTS", 343990);
define("REASON_CATEGORY_BALDSPOT", 1189200);
define("REASON_CATEGORY_VIEWPOINT", 344001);
define("REASON_CATEGORY_ARTSFEATURES", 722331);

define("WP_CATEGORY_NONE", array(1));
define("WP_CATEGORY_NEWS", array(3));
define("WP_CATEGORY_SPORTS", array(4));
define("WP_CATEGORY_BALDSPOT", array(5));
define("WP_CATEGORY_VIEWPOINT", array(6));
define("WP_CATEGORY_ARTSFEATURES", array(2));
define("WP_CATEGORY_SECURITY_BLOTTERS", array(1149));

global $coauthors_plus, $wpdb;

/**
 * @param string
 * @return array
 */
function get_embedded_users($user) {
    if (gettype($user) != 'string') {
        var_dump($user);
        die();
    }

    $words = explode(' ', $user);
    $num_words = count($words);
    $new_users = array();

    for ($i = 0; $i < $num_words; $i++) {
        for ($j = 1; $j < $num_words - $i + 1; $j++) {
            $possible_user_name = implode(' ', array_slice($words, $i, $j));
            $existing_user = get_user_by('login', $possible_user_name);
            if ($existing_user) {
                array_push($new_users, $existing_user->user_nicename);
            }
        }
    }

    return $new_users;
}

function get_user_login($user) {
    return $user->user_login;
}


wp_cache_flush();

$reason_data = simplexml_load_file(__DIR__ . "/carletonian.xml");

$num_no_result = 0;
$num_multiple_results = 0;
foreach ($reason_data->entity as $entity) {
    $date = '';
    $title = '';
    $author = '';
    $content = '';
    $id = -1;
    foreach($entity->value as $value) {
        if ($value->__toString()) {
            switch($value['name']) {
                case 'creation_date':
                    $date = (string) $value;
                    break;
                case 'release_title':
                    $title = (string) $value;
                    break;
                case 'author':
                    $author = sanitize_user((string) $value, true);
                    break;
                case 'content':
                    $content = (string) $value;
                    $content = sanitize_post(array('post_content'=>$content), 'db')['post_content'];
                    break;
                case 'id':
                    $id = (int) $value;
                    break;
            }
        }
    }
    if ($id != -1 && $title != '' && $content != '' && $date != '') {
        $sec_blt = false;
        if ($title == "Security Blotter") {
            $title = date("l, F j, Y", strtotime($date));
            $sec_blt = true;
        }
        $posts = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_status='publish' AND post_type='post' AND post_content LIKE '%$content%'");
        if (!$posts) {
            $num_no_result++;
            echo "No Results: {\"" . $title . "\", \"" . $author . "\", \"" . substr(str_replace(array("\r", "\n"), '', $content), 0, 45) . "...\"}\n";

            $authors = array('carletonian-staff');
            if ($author != '') {
                $authors = get_embedded_users($author);
                if (count($authors) == 0) {
                    $single_author = get_user_by('login', $author);
                    if (!$single_author) {
                        $random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
                        $userdata = array(
                            'user_login'    => $author,
                            'user_pass'     => $random_password,
                            'role'          => 'author',
                        );
                        $uid = wp_insert_user($userdata);
                        if (is_wp_error($uid)) {
                            echo "Could not insert new user\n";
                            die();
                        }
                        echo "\tInserted new user with ID " . $uid . "\n";
                        $authors = array(get_user_by('ID', $uid)->user_nicename);
                    } else {
                        $authors = array($single_author->user_nicename);
                    }
                }
            }
            echo "\t==>";
            foreach ($authors as $one_author) {
                echo $one_author . ", ";
            }
            echo "\n";

            $category = WP_CATEGORY_NONE;
            if ($sec_blt) {
                $category = WP_CATEGORY_SECURITY_BLOTTERS;
            } else {
                foreach($entity->relationships->alrel as $alrel) {
                    if ($alrel['name'] == 'news_to_news_section') {
                        switch ($alrel->rel['to_entity_id']) {
                            case REASON_CATEGORY_NEWS:
                                $category = WP_CATEGORY_NEWS;
                                break;
                            case REASON_CATEGORY_SPORTS:
                                $category = WP_CATEGORY_SPORTS;
                                break;
                            case REASON_CATEGORY_BALDSPOT:
                                $category = WP_CATEGORY_BALDSPOT;
                                break;
                            case REASON_CATEGORY_VIEWPOINT:
                                $category = WP_CATEGORY_VIEWPOINT;
                                break;
                            case REASON_CATEGORY_ARTSFEATURES:
                                $category = WP_CATEGORY_ARTSFEATURES;
                                break;
                            default:
                                $category = WP_CATEGORY_NONE;
                                break;
                        }
                    }
                }
            }

            $post_to_insert = array(
                'post_title'    => $title,
                'post_content'  => $content,
                'post_status'   => 'publish',
                'post_category' => $category,
                'post_date'     => $date,
                'post_date_gmt' => get_gmt_from_date($date)
            );

            $result = wp_insert_post($post_to_insert);

            if (is_wp_error($result)) {
                echo "Failed to insert post\n";
                die();
            }

            $coauthors_plus->add_coauthors($result, $authors);

            echo "Inserted post " . $result . "\n";

        } elseif (count($posts) > 1) {
            $num_multiple_results++;
            echo "Multiple Results: {\"" . $title . "\", \"" . $author . "\", \"" . substr($content, 0, 35) . "...\"} => {";
            foreach ($posts as $post) {
                echo $post->ID . ', ';
            }
            echo "}\n";
        } else {
            if (count($posts) != 1) {
                echo "\nFatal Error\n";
                die();
            }
            $post = $posts[0];
            if (!get_coauthors($post->ID)) {
                $users = get_embedded_users($author);
                if (count($users) == 0) {
                    echo "Author in Reason: \"" . $author . "\" for post with ID " . $post->ID . "\n";
                    while (true) {
                        echo "> ";
                        $fr = fopen("php://stdin","r");   // open our file pointer to read from stdin
                        $input = fgets($fr,128);        // read a maximum of 128 characters
                        $input = rtrim($input);         // trim any trailing spaces.
                        fclose ($fr);
                        if (strlen($input) == 0) {
                            break;
                        }
                        $user = get_user_by('login', $input);
                        if ($user) {
                            array_push($users, $user->user_nicename);
                        } else {
                            $random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
                            $userdata = array(
                                'user_login'    => $input,
                                'user_pass'     => $random_password,
                                'role'          => 'author',
                            );
                            $uid = wp_insert_user($userdata);
                            array_push($users, get_user_by('ID', $uid)->user_nicename);
                            echo "User " . $input . " added with ID " . $uid . "\n";
                        }
                    }
                    $success = $coauthors_plus->add_coauthors($post->ID, $users);
                    if (!$success) {
                        echo "Failed to add coauthors\n";
                        die();
                    }
                }
            }
            if ($post->post_date != $date) {
                if ($date == "") {
                    echo "Empty date in rsn\n";
                    die();
                }
                echo "[" . $post->ID . "]: rsn: " . $date . ", wp: " . $post->post_date . "\n";
                $pid = wp_update_post(array(
                    "ID" => $post->ID,
                    "post_date" => $date,
                    "post_date_gmt" => get_gmt_from_date($date)
                ));
                if (!$pid) {
                    echo "Failed to update post";
                    die();
                }
            }
            if ($post->post_title != $title) {
                if ($title == "") {
                    echo "Empty title in rsn\n";
                    die();
                }
                echo "[" . $post->ID . "]: rsn: " . $title . ", wp: " . $post->post_title . "\n";
                $pid = wp_update_post(array(
                    "ID" => $post->ID,
                    "post_title" => $title
                ));
                if (!$pid) {
                    echo "Failed to update post";
                    die();
                }
            }
        }
    }
}

echo "\n\n\nNo Results: " . $num_no_result . "\nMultiple Results: " . $num_multiple_results . "\n";

wp_cache_flush();
