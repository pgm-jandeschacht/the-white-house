<?php

function register_custom_menu() {
    register_nav_menus([
        'primary_menu_left' => 'Primary Menu Left',
        'primary_menu_middle' => 'Primary Menu Middle',
        'primary_menu_right' => 'Primary Menu Right',
        'secondary_menu' => 'Secondary Menu',
        'footer_primary_left' => 'Footer Primary Left',
        'footer_primary_right' => 'Footer Primary Right',
        'footer_secondary' => 'Footer Secondary',
        'social_menu' => 'Social Media Menu',
    ]);
}

add_action('init', 'register_custom_menu');

function add_li_class($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    
    return $classes;
}

function add_link_class($classes, $item, $args) {
    if(isset($args->link_class)) {
        $classes['class'] = $args->link_class;
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_li_class', 1, 3);
add_filter('nav_menu_link_attributes', 'add_link_class', 1, 3);