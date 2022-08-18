<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="px-[25px] flex justify-between">
            <div>
                <a href="<?php home_url() ?>" class="font-mercury text-[18.85px] font-semibold leading-4 tracking-widest uppercase hover:text-red-hover transition-all duration-200 ease-in-out">
                    <?php _e('The White House', 'presidential') ?>
                </a>
            </div>

            <div>
                Burger menu
            </div>

            <!-- <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } 
            ?> -->

            <!-- <ul>
                <?php
                    // Check if the menu exists
                    if (has_nav_menu('primary_menu')) {
                        wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'container' => 'false',
                            'menu_class' => 'menu',
                            'li_class' => 'text-xl',
                            'link_class' => 'text-green-500',
                            'items_wrap' => '%3$s'
                        ]);
                    }
                ?>
            </ul> -->
        </nav>

        
        <!-- <?php if (is_user_logged_in()) : ?>
            <a href="<?php echo wp_logout_url(home_url()) ?>">
                <?php _e('Logout', 'presidential') ?>
            </a>
        <?php else : ?>
            <a href="<?php echo wp_registration_url() ?>">
                <?php _e('Register', 'presidential') ?>
            </a>
        <?php endif ?> -->