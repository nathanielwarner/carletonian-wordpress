<?php

require_once(__DIR__ . '/../wp-load.php');
require_once(__DIR__ . '/../wp-admin/includes/user.php');

$users = get_users();

foreach ($users as $user) {
    $posts = get_posts(array('author' => $user->ID));
    if (count($posts) == 0) {
        echo $user->user_login . "\n";
        wp_delete_user($user->ID);
    }
}
