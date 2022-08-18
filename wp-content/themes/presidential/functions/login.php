<?php

function set_login_page_styling() {
    echo '<style type="text/css">
        #login h1 a {
            background-image: url(' . get_theme_file_uri('/assets/images/logo.svg') . ');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%; 
            height: 100%;
        }
    </style>';
    
    wp_enqueue_style('custom_login', get_theme_file_uri('/public/css/main.css'),);
}

add_action('login_enqueue_scripts', 'set_login_page_styling');

function set_login_logo_url() {
    return home_url();
}

add_filter('login_headerurl', 'set_login_logo_url');

function set_login_logo_text() {
    return __('Presidential', 'presidential');
} 

add_filter('login_headertext', 'set_login_logo_text');