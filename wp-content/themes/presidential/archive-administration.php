<?php

    get_header();

?>

<section class="pt-[85px] pb-[30px] mb-[30px]">
    <div class="w-full max-width-half">
        <h1 class="title-blue">
            <?php _e('The Biden-Harris Administration', 'presidential'); ?>
        </h1>
    </div>
</section>

<section class="px-[35px]">
    <div class="ml-[-10px] mr-[-10px]">
        <div class="pb-[50px] md:max-w-two-thirds lg:max-w-half m-auto">
            <p class="font-mercury leading-[176%]">
                <?php _e('Thousands of people work in the West Wing, the East Wing, the Cabinet, and the Executive Office of the President. Learn more about the people who carry out the priorities of the Biden-Harris Administration.', 'presidential') ?>
            </p>
        </div>

        <?php get_template_part('components/cards-administration', 'cards', [
            'cards' => new WP_Query([
                'post_type' => 'administration',
                'posts_per_page' => -1,
                'meta_key' => 'job_title',
                'orderby' => 'meta_label',
                'order' => 'ASC',
            ])
        ]); ?>
    </div>
</section>

<?php

    get_footer();