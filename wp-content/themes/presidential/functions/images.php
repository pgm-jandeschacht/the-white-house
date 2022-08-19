<?php 

add_image_size('president-big', '640', '640', true);

function change_logo_class($html) {
    $html = str_replace('custom-logo', 'w-full h-full hover:scale-[1.06] transition-all duration-200 ease-in-out', $html);
    $html = str_replace('custom-logo_link', 'hover:scale-110', $html);

    return $html;
}

add_filter('get_custom_logo', 'change_logo_class');