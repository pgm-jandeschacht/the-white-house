<?php

    get_header();

    $the_post_id = 404;
?>

<section class="pt-[85px] pb-[30px] mb-[30px]">
    <div class="w-full max-width-half">
        <h1 class="title-blue">
            <?php echo get_the_title($the_post_id); ?>
        </h1>
    </div>
</section>

<section class="px-[35px]">
    <div class="ml-[-10px] mr-[-10px]">
        <div class="pb-[50px] content">
            <p class="font-mercury leading-[176%]">
                <?php echo get_post_field('post_content', $the_post_id); ?>
            </p>
        </div>

        <?php get_template_part('components/cards-administration', 'cards', [
            'cards' => new WP_Query([
                'post_type' => 'administration',
                'posts_per_page' => -1,
                'meta_key' => 'job_title',
                'orderby' => 'meta_value',
                'order' => 'ASC',
            ])
        ]); ?>
    </div>
</section>

<?php

    get_footer();