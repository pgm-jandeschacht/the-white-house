<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
    <body>
        <header class="sticky top-0 z-10 h-[56px] bg-white">
            <nav class="px-5 md:px-[25px] xl:px-10 flex justify-between items-stretch h-full">
                <div class="flex items-center">
                    <a href="<?php echo home_url('/') ?>" class="font-mercury text-[18.85px] font-semibold leading-4 tracking-widest uppercase hover:text-red-hover transition-all duration-200 ease-in-out">
                        <?php _e('The White House', 'presidential') ?>
                    </a>
                </div>
    
                <button class="group wrapper flex justify-center relative bottom-auto right-auto h-full">
                    <div class="flex w-full h-full flex-col justify-center">
                        <span class="burger-inner-wrapper group-hover:translate-y-[-2px]">
                            <span class="burger-top"></span>
                        </span>
    
                        <span class="burger-text">
                            <?php _e('Menu', 'presidential') ?>
                        </span>
    
                        <span class="burger-inner-wrapper group-hover:translate-y-[2px]">
                            <span class="burger-bottom"></span>
                        </span>
                    </div>
                </button>
    
                <div class="absolute z-10 m-auto left-0 right-0 top-[8px] w-24">
                    <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } 
                    ?>
                </div>
    
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
        </header>

        
        <!-- <?php if (is_user_logged_in()) : ?>
            <a href="<?php echo wp_logout_url(home_url()) ?>">
                <?php _e('Logout', 'presidential') ?>
            </a>
        <?php else : ?>
            <a href="<?php echo wp_registration_url() ?>">
                <?php _e('Register', 'presidential') ?>
            </a>
        <?php endif ?> -->