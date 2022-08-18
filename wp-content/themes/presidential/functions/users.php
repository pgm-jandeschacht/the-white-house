<?php

function redirect_users() {
    $current_user = wp_get_current_user();

    if (count($current_user->roles) == 1 && $current_user->roles[0] == 'subscribed') {
        wp_redirect(home_url());
        // exit;
    }
}

add_action('admin_init', 'redirect_users');