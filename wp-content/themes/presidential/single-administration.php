<?php
    get_header();

    $page_object = get_post_type_archive_link( 'administration' );
?>

<section class="px-[35px]">
    <div class="mx-[-10px] flex">
        <div class="content max-w-half ml-[25%]">
            <!-- <div class="custom-max"> -->
                <?php the_content(); ?>
            <!-- </div> -->
        </div>

        <div class="max-w-[16.666%] ml-[8.333%] px-[10px]">
            <nav aria-label="Side Navigation" class="side-navigation relative before:content-[''] before:h-full before:w-[1px] before:bg-line before:absolute before:left-[-20px] before:top-0">
                <a href="<?php echo $page_object ?>" class="leading-[132%] mb-[30px] text-[11px] pb-[1px] font-medium uppercase border-b-1 border-line-dark hover:border-red-hover-line hover:text-red-hover transition-all duration-200 ease-in-out">
                    <?php _e('The Biden-Harris Administration', 'presidential'); ?>
                </a>
    
                <div class="mt-[30px]">
                    <?php if (is_active_sidebar('side_nav_administration')) : ?>
                        <?php dynamic_sidebar('side_nav_administration'); ?>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
</section>

<?php
    get_footer();