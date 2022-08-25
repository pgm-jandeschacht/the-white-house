            <?php if (is_active_sidebar('footer_banner_cta')) : ?>
                <section class="cta-banner">
                    <div class="px-[35px]">
                        <div class="mx-[-10px] py-[42px] px-[50px] flex justify-between items-center border-[3px] border-primary rounded-2xl w-full">
                            <div>
                                <img width="135" height="107" src="<?php echo get_theme_file_uri('assets/images/the-white-house_logo-stacked.svg'); ?>">
                            </div>    
                        
                            <div class="max-w-two-thirds w-full flex justify-center relative">
                                <div class="cta-banner-wrapper">
                                    <h2><?php _e('Stay Connected', 'presidential'); ?></h2>

                                    <?php dynamic_sidebar('footer_banner_cta'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </main>
        
        <footer class="footer">
            <div class="bottom-0 absolute right-0 z-[-1] overflow-hidden">
                <img class="-bottom-28 right-[-7.86%] relative opacity-50" width="685" height="687" src="<?php echo get_theme_file_uri('assets/images/seal.svg'); ?>">
            </div>

            <div class="relative px-[35px]">
                <div class="mx-[-10px] flex flex-col md:flex-row justify-between pt-[90px] border-t-1 border-line">
                    <div class="max-w-1/2 min-w-45 mb-10">
                        <nav aria-label="Footer Primary Navigation" class="px-[10px] flex w-full max-w-83">
                            <?php
                                if (has_nav_menu('footer_primary')) {
                                    wp_nav_menu([
                                        'theme_location' => 'footer_primary',
                                        'container' => 'false',
                                        'menu_class' => 'md:columns-2 md:gap-[60px] min-w-45 w-full',
                                        'li_class' => 'mb-4 flex',
                                        'link_class' => 'font-medium text-[13px] pb-[3px] border-b-1 border-line-dark hover:text-red-hover hover:border-red-hover transition-all duration-200 ease-in-out',
                                    ]);
                                }
                            ?>
                        </nav>
                    </div>

                    <div class="w-[400px] max-w-1/2 flex flex-col md:flex-row justify-between">
                        <nav class="mb-[76px] min-w-[154px] px-[10px]" aria-label="Footer Secondary Navigation">
                            <?php
                                if (has_nav_menu('footer_secondary')) {
                                    wp_nav_menu([
                                        'theme_location' => 'footer_secondary',
                                        'container' => 'false',
                                        'menu_class' => '',
                                        'li_class' => 'mb-2 flex',
                                        'link_class' => 'pb-[2px] capitalize text-[10px] border-b-1 border-transparent hover:text-red-hover hover:border-red-hover transition-all duration-200 ease-in-out',
                                    ]);
                                }
                            ?>
                        </nav>

                        <div>
                            <div class="mb-10">
                                <?php
                                    if (has_nav_menu('social_menu')) {
                                        wp_nav_menu([
                                            'theme_location' => 'social_menu',
                                            'container' => 'false',
                                            'menu_class' => 'flex facebook-icon',
                                            'li_class' => 'pr-5 flex',
                                            'link_class' => 'w-[17px] h-[17px]',
                                        ]);
                                    }
                                ?>
                            </div>

                            <div class="mb-[30px] footer-widget">
                                <?php if (is_active_sidebar('footer_widget_area')) : ?>
                                    <?php dynamic_sidebar('footer_widget_area'); ?>
                                <?php endif; ?>
                            </div>

                            <a href="<?php echo home_url('/') ?>" class="font-mercury text-secondary-brown text-2xl tracking-widest hover:text-red-hover transition-all duration-200 ease-in-out">
                                <span class="font-semibold">WH</span>.GOV
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-[35px] mt-8 md:mt-0">
                <div class="mx-[10px]">
                    <?php if (is_user_logged_in()) :?>
                        <a class="rounded-[100px] text-secondary-blue border-2 border-secondary-blue py-[18.5px] px-[25px] bg-white text-[13px] font-medium leading-[120%] text-center hover:bg-secondary-blue hover:text-white transition-all duration-200 ease-in-out" href="<?php echo wp_logout_url(home_url()); ?>">
                            <?php _e('Log out', 'presidential') ?>
                        </a>

                        <div class="mt-8">
                            <a class="font-medium text-[13px] pb-[3px] border-b-1 border-line-dark hover:text-red-hover hover:border-red-hover transition-all duration-200 ease-in-out" href="<?php echo get_the_permalink(398); ?>">
                                <?php echo get_the_title(398); ?>
                            </a>
                        </div>
                    <?php else : ?>
                        <a class="rounded-[100px] text-secondary-blue border-2 border-secondary-blue py-[18.5px] px-[25px] bg-white text-[13px] font-medium leading-[120%] text-center hover:bg-secondary-blue hover:text-white transition-all duration-200 ease-in-out" href="<?php echo wp_login_url(home_url()); ?>">
                            <?php _e('Log in/ Register', 'presidential') ?>
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>