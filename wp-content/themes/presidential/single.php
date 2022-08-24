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

<section class="content">
    <div class="px-[35px]">
        <div class="mx-[-10px] custom-max">
            <?php the_content(); ?>
        
            <span class="block mb-[25px] text-center custom-max font-mercury"><?php _e('###', 'presidential') ?></span>
        </div>
    </div>
</section>

<?php $prev_post = get_previous_post(); ?>
<?php if ($prev_post) : ?>
    <section class="mt-[60px]">
        <div class="px-[35px]">
            <div class="mx-[-10px]">
                <a href="<?php the_permalink($prev_post->ID) ?>" class="group text-white rounded-2xl flex flex-col transition-all duration-200 ease-in-out justify-center items-center hover:bg-primary bg-secondary-blue min-h-[300px] py-[70px] px-10">
                    <p class="font-mercury max-w-[960px] text-center text-[32px] leading-[132%]"><?php echo get_the_title($prev_post) ?></p>

                    <div class="flex items-center pt-2 uppercase text-[11px] font-medium">
                        <span>
                            <?php echo get_the_time('F j, Y', $prev_post); ?>
                        </span>

                        <span class="px-[6px]">•</span>

                        <?php $category = get_the_category($prev_post); ?>
                        <?php echo $category[0]->cat_name; ?>
                    </div>

                    <div class="mt-[30px] pb-[1px] border-b-1 border-line-light group-hover:border-text-light transition-all duration-200 ease-in-out">
                        <p class="inline leading-[156%] text-[13px] font-medium text-text-light group-hover:text-white">
                            <span>
                                <?php _e('Next', 'presidential'); ?>
                            </span>    

                            <svg class="inline ml-1 mb-[2px] w-[14px] h-[7px] group-hover:translate-x-[5px] transition-all duration-200 ease-in-out" width="63" height="68" viewBox="0 0 63 68" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m0 0 63 34L0 68l17-34L0 0Z" fill="currentColor"/></svg>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
<?php endif ?>

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