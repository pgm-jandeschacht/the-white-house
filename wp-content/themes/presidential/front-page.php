<!-- home page aka front page -->

<?php 
    get_header();
?>

<section class="mt-[60px]">
    <ul class="px-[35px] repeater-blocks">
        <?php if( have_rows('blocks') ) : ?>
            <?php while ( have_rows('blocks') ) : the_row(); ?>
                <?php $image = get_sub_field('image'); ?>
    
                <li class="repeater-block group mx-[-10px]">
                    <div class="repeater-block-image-wrapper">
                        <div class="repeater-block-image">
                            <?php echo wp_get_attachment_image($image, 'large'); ?>
                        </div>
                    </div>

                    <div class="repeater-block-text">
                        <div>
                            <p class="mt-4 mb-5 text-[13px] uppercase font-medium tracking-wider"><?php the_sub_field('subtitle') ?></p>

                            <h2 class="font-variant pb-[30px] mb-5 text-[44px] font-mercury font-semibold border-b-1 border-line"><?php the_sub_field('title') ?></h2>
                        </div>

                        <p class="mb-[30px] text-[15px] font-mercury leading-[166%]"><?php the_sub_field('content') ?></p>

                        <ul>
                            <?php if ( have_rows('page_links') ) : ?>
                                <?php while ( have_rows('page_links') ) : the_row(); ?>
                                    <li class="mb-5">
                                        <a class="repeater-block-link" href="<?php the_sub_field('link'); ?>">
                                            <?php the_sub_field('link_name'); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</section>

<!-- <?php if (!is_user_logged_in()) {
    // if user is not logged in hide some things
} ?> -->

<?php
    get_footer();