<?php

function load_translations() {
    load_theme_textdomain('presidential', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'load_translations');