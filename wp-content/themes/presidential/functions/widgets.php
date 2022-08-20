<?php

// Deactivate new block editor
function phi_theme_support() {
    remove_theme_support('widgets-block-editor');
}

add_action('after_setup_theme', 'phi_theme_support');


function add_widgets() {
    // register_sidebar([
    //     'id' => 'footer-widget-area',
    //     'name' => 'Footer Widget Area',
    //     'desciption' => 'Widget area for the footer',
    // ]);

    register_sidebar([
        'id' => 'footer-widget-area',
        'name' => 'Footer Widget Area',
        'desciption' => 'Widget area for the footer',
        'before_title' => '<strong class="font-mercury font-bold text-[15px] leading-[166%] capitalize">',
        'after_title' => '</strong>',
        'before_widget' => '<div class="font-mercury text-[15px] leading-[166%]">',
        'after_widget' => '</div>',
    ]);
}

add_action('widgets_init', 'add_widgets');