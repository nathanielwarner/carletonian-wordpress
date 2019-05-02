<?php

require_once(__DIR__ . '/../wp-load.php');

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

foreach ($users as $user) {
    $new_users = get_embedded_users($user);
    if (count($new_users) > 0) {
        echo "\n---------- " . $user->user_login . " ----------\n";
        foreach ($new_users as $new_user) {
            echo $new_user->user_login . "\n";
        }
    }
}
