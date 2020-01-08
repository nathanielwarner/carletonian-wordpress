<?php

require_once(__DIR__ . '/../wp-load.php');
require_once(__DIR__ . '/../wp-admin/includes/user.php');

global $coauthors_plus;

wp_cache_flush();

$posts = get_posts(array('numberposts' => 10000));

foreach ($posts as $post) {
    $post_author = get_user_by('ID', $post->post_author);
    $post_coauthors = $coauthors_plus->get_coauthor_terms_for_post($post->ID);
    if (count($post_coauthors) == 1 && $post_author->user_login != $post_coauthors[0]->name) {
        var_dump($post_author->user_login);
        var_dump($post_coauthors[0]->name);
        var_dump($post->ID);
        $coauthors_plus->add_coauthors($post->ID, array($post_author->user_login));
        echo "\n";
    }
}

wp_cache_flush();
