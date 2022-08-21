<!-- Post template -->

<?php 

    get_header();

// get_template_part('components/thumbnail', 'thumbnail', [
//     'size' => 'custom-size'
// ]);

    // ? Best way?
    $page_object = get_page_by_title( 'briefing room' );
    $page_id = $page_object->ID;

?>

<section class="pt-[85px] pb-[30px] mb-[30px]">
    <div class="px-[35px]">
        <div class="mb-[-10px]">
            <div class="flex flex-col items-center px-[10px] max-w-two-thirds mx-auto">
                <a href="<?php the_permalink( $page_id ); ?>" class="link-hover">
                    <?php echo get_the_title( $page_id ); ?>
                </a>
        
                <h1 class="text-[44px] font-mercury mt-[15px] text-center tracking-tight leading-[132%]">
                    <?php the_title(); ?>
                </h1>
        
                <div class="flex items-center pt-5 uppercase text-secondary-blue text-[11px] font-medium">
                    <span>
                        <?php the_time('F j, Y'); ?>
                    </span>
        
                    <span class="px-[6px]">•</span>
        
                    <?php the_category(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <?php
    $related_posts = get_field('related_posts');
?>


<?php if ($related_posts) : ?>
    <?php foreach($related_posts as $post) : ?>
        <?php setup_postdata($post); ?>

        <p>
            <?php the_title(); ?>
        </p>

        <p>

        </p>
    <?php endforeach ?>
<?php endif; ?>
<div>
    <?php the_content(); ?>
</div> -->

<?php

get_footer();