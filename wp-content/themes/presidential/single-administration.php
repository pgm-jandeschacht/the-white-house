<?php
    get_header();

    $page_object = get_post_type_archive_link( 'administration' );
?>

<section class="px-[25px] mb-[75px]">
    <div class="mx-[-10px] flex">
        <div class="min-h-[540px] w-full max-w-half flex">
            <div class="rounded-[20px] rounded-tr-none overflow-hidden w-full relative">
                <?php the_post_thumbnail( 'full', ['class' => 'absolute bottom-0 left-0 object-cover w-full h-full float-left'] ); ?>
            </div>
        </div>
    
        <div class="max-w-half flex justify-center items-center w-full">
            <div class="max-w-[58.333%] mx-auto my-[20px] flex flex-col items-center">
                <a href="<?php echo $page_object ?>" class="link-hover font-medium leading-[125%] tracking-wider">
                    <?php _e('The Biden-Harris Administration', 'presidential'); ?>
                </a>

                <h1 class="font-mercury font-variant capitalize text-[44px] font-semibold tracking-tight mt-2 text-center leading-[108%]">
                    <?php the_title(); ?>
                </h1>

                <?php if (get_field('job_title')) : ?>
                    <p class="mt-2 text-[13px] font-medium uppercase tracking-wider text-center">
                        <?php the_field('job_title'); ?>
                    </p>
                <?php endif ?>

                <?php if (get_field('summary')) : ?>
                    <p class="font-mercury leading-[166%] text-center mt-[15px] text-[15px]">
                        <?php the_field('summary'); ?>
                    </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<section class="px-[35px]">
    <div class="mx-[-10px] flex">
        <div class="content">
            <div class="max-w-[16.666%] ml-[8.333%] px-[10px] float-right">
                <?php if (is_active_sidebar('side_nav_administration')) : ?>
                    <nav aria-label="Side Navigation" class="side-navigation relative before:content-[''] before:h-full before:w-[1px] before:bg-line before:absolute before:left-[-20px] before:top-0">
                        <a href="<?php echo $page_object ?>" class="leading-[132%] mb-[30px] text-[11px] pb-[1px] font-medium uppercase border-b-1 border-line-dark hover:border-red-hover-line hover:text-red-hover transition-all duration-200 ease-in-out">
                            <?php _e('The Biden-Harris Administration', 'presidential'); ?>
                        </a>
            
                        <div class="mt-[30px]">
                            <?php dynamic_sidebar('side_nav_administration'); ?>
                        </div>
                    </nav>
                <?php endif; ?>
            </div>

            <?php the_content(); ?>
        </div>

    </div>
</section>

<?php
    get_footer();