<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
    <body class="relative" x-data="{ open: false }">
        <header class="sticky top-0 z-10 h-[56px] bg-white">
            <nav class="px-5 md:px-[25px] xl:px-10 flex justify-between items-stretch h-full">
                <div class="flex items-center">
                    <a href="<?php echo home_url('/') ?>" class="font-mercury text-[18.85px] font-semibold leading-4 tracking-widest uppercase hover:text-red-hover transition-all duration-200 ease-in-out">
                        <span class="hidden md:block">
                            <?php _e('The White House', 'presidential') ?>
                        </span>

                        <img width="103" height="15" class="block md:hidden" src="<?php echo get_theme_file_uri('assets/images/text-logo.svg'); ?>">
                    </a>
                </div>
    
                <button @click="open = ! open" class="group wrapper flex justify-center md:relative md:bottom-auto md:right-auto md:h-full" :class="open ? 'bg-primary text-white' : ''">
                    <div class="flex w-full h-full flex-col justify-center">
                        <span class="burger-inner-wrapper group-hover:scale-110 group-hover:translate-y-[-2px]">
                            <span class="burger-top" :class="open ? 'hidden' : 'block'"></span>
                        </span>
        
                            <span class="burger-text" x-show="!open">
                                <?php _e('Menu', 'presidential') ?>
                            </span>

                            <span class="burger-text" x-show="open">
                                <?php _e('Close', 'presidential') ?>
                            </span>

                        <span class="burger-inner-wrapper" :class="open ? 'h-[40px]' : 'group-hover:translate-y-[2px] group-hover:scale-110'">
                            <span class="burger-bottom" :class="open ? 'close' : ''"></span>
                        </span>
                    </div>
                </button>
    
                <div class="absolute z-10 m-auto left-0 right-0 top-[3px] md:top-[8px] w-[72px] md:w-24">
                    <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } 
                    ?>
                </div>

                <?php get_template_part('components/menu'); ?>
    
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

        <main class="max-width" x-show="!open">

        
        <!-- <?php if (is_user_logged_in()) : ?>
            <a href="<?php echo wp_logout_url(home_url()) ?>">
                <?php _e('Logout', 'presidential') ?>
            </a>
        <?php else : ?>
            <a href="<?php echo wp_registration_url() ?>">
                <?php _e('Register', 'presidential') ?>
            </a>
        <?php endif ?> -->