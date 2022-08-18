<?php

// Deactivate new block editor
function phi_theme_support() {
    remove_theme_support('widgets-block-editor');
}

add_action('after_setup_theme', 'phi_theme_support');


function create_sidebars() {
    register_sidebar([
        'id' => 'footer-widget-area',
        'name' => 'Footer Widget Area',
        'desciption' => 'Widget area for the footer',
    ]);
}

add_action('widgets_init', 'create_sidebars');