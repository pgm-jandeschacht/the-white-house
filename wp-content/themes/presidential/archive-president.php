<?php

    get_header();

    // ? Best way?
    $page_object = get_page_by_title( 'the white house' );
    $page_id = $page_object->ID;
?>

<section class="pt-[85px] pb-[30px] mb-[30px] ">
    <div class="flex flex-col items-center px-[10px]">
        <a href="<?php the_permalink( $page_id ); ?>" class="link-hover">
            <?php echo get_the_title( $page_id ); ?>
        </a>

        <h1 class="title-blue mt-[15px]">
            <?php _e('Presidents', 'presidential'); ?>
        </h1>

        <p class="mt-[15px] text-[14px] md:text-[15px] font-mercury">
            <?php _e('Learn more about the Presidents of the United States', 'presidential') ?>
        </p>
    </div>
</section>

<section>
    <?php get_template_part('components/cards-president', 'cards', [
        'cards' => new WP_Query([
            'post_type' => 'president',
            'posts_per_page' => -1,
            'meta_key' => 'order_of_president',
            'orderby' => 'meta_value',
            'order' => 'ASC',
        ])
    ]); ?>
</section>

<?php

    get_footer();