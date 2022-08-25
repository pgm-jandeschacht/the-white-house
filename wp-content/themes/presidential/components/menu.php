<div x-show="open" class="wrapper-navigation">
    <div class="navigation-header">
        <a href="<?php echo home_url('/') ?>">
            <img width="86" height="61" src="<?php echo get_theme_file_uri('assets/images/logo-inverse-white-house.svg'); ?>">
        </a>
    </div>

    <div class="navigation-body-outer">
        <div class="px-[35px]">
            <div class="mx-[-10px]">
                <div class="navigation-body-inner">
                    <div class="navigation-body-main">
                        <?php
                            if (has_nav_menu('primary_menu')) {
                                wp_nav_menu([
                                    'theme_location' => 'primary_menu',
                                    'container' => 'false',
                                    'menu_class' => 'columns-3 gap-[80px] pr-[20px] w-full',
                                    'li_class' => 'mb-6 flex min-h-[44px]',
                                    'link_class' => 'text-[25px] font-mercury font-bold border-b-1 border-line-dark hover:text-red-hover hover:border-red-hover transition-all duration-200 ease-in-out',
                                ]);
                            }
                        ?>
                    </div>
            
                    <div class="navigation-body-side">
                        <div class="mb-10">
                            <?php
                                if (has_nav_menu('secondary_menu')) {
                                    wp_nav_menu([
                                        'theme_location' => 'secondary_menu',
                                        'container' => 'false',
                                        'menu_class' => 'menu',
                                        'li_class' => 'mb-4',
                                        'link_class' => 'text-[13px] capitalize hover:text-red-hover border-b-1 border-transparent hover:border-red-hover transition-all duration-200 ease-in-out',
                                    ]);
                                }
                                ?>
                        </div>

                        <div class="mb-[50px]">
                            <?php
                                if (has_nav_menu('social_menu')) {
                                    wp_nav_menu([
                                        'theme_location' => 'social_menu',
                                        'container' => 'false',
                                        'menu_class' => 'flex facebook-icon',
                                        'li_class' => 'pr-3 flex',
                                        'link_class' => 'w-[17px] h-[17px]',
                                    ]);
                                }
                            ?>
                        </div>

                        <div class="mb-[15px]">
                            <?php if (is_active_sidebar('footer_widget_area')) : ?>
                                <?php dynamic_sidebar('footer_widget_area'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-1025 right-29 w-full h-full z-[-1]">
        <img width="1064" height="550" src="<?php echo get_theme_file_uri('assets/images/outline-white-house.svg'); ?>">
    </div>
</div>