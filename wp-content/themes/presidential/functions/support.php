<?php 

// Check needed image sizes before developing or uploading them

function add_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('custom-size', '100', '100', true);
    add_theme_support('custom-logo', [
        'height' => '100',
        'width' => '100',
        'flex-width' => true,
    ]);
    // add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
}

add_action('after_setup_theme', 'add_support');