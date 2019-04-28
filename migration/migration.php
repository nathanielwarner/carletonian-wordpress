<?php

require_once(__DIR__ . '/../wp-load.php');

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

function get_or_create_author($author) {
    $user = get_user_by('login', $author);
    if ($user) {
        $uid = $user->ID;
    } else {
        $random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
        $uid = wp_create_user($author, $random_password);
    }
    return $uid;
}

$reason_data = simplexml_load_file(__DIR__ . "/carletonian-reason-4-25.xml");
foreach ($reason_data->entity as $entity) {
    foreach($entity->value as $value) {
        if (!empty((array)$value)) {
            switch($value['name']) {
                case 'creation_date':
                    $date = (string) $value;
                    break;
                case 'release_title':
                    $title = (string) $value;
                    break;
                case 'author':
                    $author = get_or_create_author((string) $value);
                    break;
                case 'content':
                    $content = (string) $value;
            }
        }
    }

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

    $post_to_insert = array(
        'post_title'    => $title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => $author,
        'post_category' => $category,
        'post_date'     => $date,
    );

    $result = wp_insert_post($post_to_insert);

    echo "Inserted post " . $result . "\n";
}
