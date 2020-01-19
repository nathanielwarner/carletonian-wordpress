<?php

require_once(__DIR__ . '/../wp-load.php');
require_once(__DIR__ . '/../wp-admin/includes/user.php');

global $coauthors_plus, $wpdb;

wp_cache_flush();

$posts = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_status='publish' AND post_type='post'");

foreach ($posts as $post) {
    $coauthors = get_coauthors($post->ID);
    if (count($coauthors) == 0) {
        echo $post->ID . ' "' . $post->post_title . '"' . "\n";
    }
}

wp_cache_flush();
