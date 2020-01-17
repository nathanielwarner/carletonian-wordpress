<?php

require_once(__DIR__ . '/../wp-load.php');
require_once(__DIR__ . '/../wp-admin/includes/user.php');

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

    for ($i = 0; $i < $num_words - 1; $i++) {
        for ($j = 1; $j < $num_words; $j++) {
            $possible_user_name = implode(' ', array_slice($words, $i, $j));
            $existing_user = get_user_by('login', $possible_user_name);
            if ($existing_user) {
                array_push($new_users, $existing_user->user_login);
            }
        }
    }

    return $new_users;
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
                    $author = (string) $value;
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
    if ($id != -1 && $title != '' && $content != '') {
        $posts = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_status='publish' AND post_type='post' AND post_content LIKE '%$content%'");
        if (!$posts) {
            $num_no_result++;
            echo "No Results: {\"" . $title . "\", \"" . $author . "\", \"" . substr($content, 0, 35) . "...\"}\n";
            /*$authors = array('Carletonian Staff');
            if ($author != '') {
                $authors = get_embedded_users($author);
            }
            echo "==>";
            foreach ($authors as $one_author) {
                echo $one_author . ", ";
            }
            echo "\n";*/
        } elseif (count($posts) > 1) {
            $num_multiple_results++;
            echo "Multiple Results: {\"" . $title . "\", \"" . $author . "\", \"" . substr($content, 0, 35) . "...\"} => {";
            foreach ($posts as $post) {
                echo $post->ID . ', ';
            }
            echo "}\n";
        }
    }
}

echo "\n\n\nNo Results: " . $num_no_result . "\nMultiple Results: " . $num_multiple_results . "\n";

wp_cache_flush();
