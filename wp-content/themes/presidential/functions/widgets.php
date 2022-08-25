<?php

// Deactivate new block editor
function phi_theme_support() {
    remove_theme_support('widgets-block-editor');
}

add_action('after_setup_theme', 'phi_theme_support');


function add_widgets() {
    register_sidebar([
        'id' => 'footer_widget_area',
        'name' => 'Footer Widget Area',
        'description' => 'Widget area for the footer',
        'before_title' => '<strong class="font-mercury font-bold text-[15px] leading-[166%] capitalize">',
        'after_title' => '</strong>',
        'before_widget' => '<div class="font-mercury text-[15px] leading-[166%]">',
        'after_widget' => '</div>',
    ]);

    register_sidebar([
        'id' => 'side_nav_categories',
        'name' => 'Side Navigation Categories',
        'description' => 'Widget area for all categories',
        'before_title' => '<p class="mb-[30px] text-[11px] font-medium uppercase">',
        'after_title' => '</p>',
    ]);
    
    register_sidebar([
        'id' => 'side_nav_categories_mobile',
        'name' => 'Side Navigation Categories Mobile',
        'description' => 'Widget area for all categories for Mobile',
    ]);
    
    register_sidebar([
        'id' => 'footer_banner_cta',
        'name' => 'Footer Banner CTA',
        'description' => 'Widget area for CTA banner in the footer',
        'before_title' => '<h2 class="font-mercury text-[17px] mb-[30px] capitalize">',
        'after_title' => '</h2>',
        'before_widget' => '<div class="cta-banner-wrapper">',
        'after_widget' => '</div>',
    ]);

    register_sidebar([
        'id' => 'side_nav_administration',
        'name' => 'Side Navigation Administration',
        'description' => 'Widget area for the Administration',
        'before_title' => '<p class="hidden">',
        'after_title' => '</p>',
    ]);

    register_sidebar([
        'id' => 'side_nav_presidents',
        'name' => 'Side Navigation Presidents',
        'description' => 'Widget area for the Presidents',
        'before_title' => '<p class="hidden">',
        'after_title' => '</p>',
    ]);
}

add_action('widgets_init', 'add_widgets');