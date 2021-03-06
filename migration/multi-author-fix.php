<?php

require_once(__DIR__ . '/../wp-load.php');
require_once(__DIR__ . '/../wp-admin/includes/user.php');

global $coauthors_plus;

wp_cache_flush();

$users = get_users();

/**
 * @param $user
 * @return array
 */
function get_embedded_users($user)
{
    $words = explode(' ', $user->user_login);
    $num_words = count($words);
    $new_users = array();
    for ($i = -1; $i <= $num_words - 1; $i++) {
        for ($j = 1; $i + $j <= $num_words; $j++) {
            if ($i != -1 && $j != $num_words) {
                $possible_user_name = implode(' ', array_slice($words, $i, $j));
                $existing_user = get_user_by('login', $possible_user_name);
                if ($existing_user) {
                    $embedded = get_embedded_users($existing_user);
                    if (count($embedded) > 0) {
                        array_merge($new_users, $embedded);
                    } else {
                        array_push($new_users, $existing_user);
                    }
                }
            }
        }
    }
    return $new_users;
}

function get_user_login($user) {
    return $user->user_login;
}

foreach ($users as $user) {
    $new_users = get_embedded_users($user);
    if (count($new_users) > 0) {
        echo $user->user_login . " (" . $user->ID . ")  ==>  ";
        foreach ($new_users as $new_user) {
            echo $new_user->user_login . " (" . $new_user->ID . "), ";
        }
        echo "\n";
        $posts = get_posts(array('author' => $user->ID));
        $new_user_names = array_map('get_user_login', $new_users);
        foreach ($posts as $post) {
            echo $post->post_name . "\n";
            wp_update_post(array(
                'ID' => $post->ID,
                'post_author' => $new_users[0]->ID
            ));
            $coauthors_plus->add_coauthors($post->ID, $new_user_names);
        }
        wp_delete_user($user->ID);
        echo "\n\n";
    }
}

wp_cache_flush();
