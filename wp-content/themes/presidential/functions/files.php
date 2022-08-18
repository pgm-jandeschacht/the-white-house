<?php 

function load_styles_and_script() {
    wp_enqueue_style('main', get_theme_file_uri('/public/css/main.css'), [], '0.1');
    wp_enqueue_script('main', get_theme_file_uri('/public/js/main.js'), [], '0.1');
}

add_action('wp_enqueue_scripts', 'load_styles_and_script');
