<!-- home page aka front page -->

<?php 
    get_header();
?>

<section>
    <div class="rounded-2xl mb-[90px] overflow-hidden mx-[15px] relative">
        <div>
            <?php the_post_thumbnail('full', ['class' => 'object-cover']) ?>
        </div>

        <div class="rounded-tl-2xl pt-[45px] pr-[45px] pb-5 pl-[90px] w-[540px] absolute right-0 bottom-0 bg-white overflow-hidden after:content-[''] after:bg-secondary after:absolute after:top-0 after:left-0 after:h-full after:w-[45px]">
            <div class="left-5 top-[-17px] rotate-90 origin-[0] absolute py-[17px] px-5 z-[1]">
                <p class="uppercase text-[10px] tracking-wider font-medium"><?php _e("We're investing back in the American people", 'presidential') ?></p>
            </div>

            <h1 class="pb-[15px] mb-[11px] text-[44px] font-variant font-mercury font-semibold tracking-tight leading-[108%] border-b-1 border-line"><?php the_title(); ?></h1>
            
            <div class="home-content">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>

<?php
    $featured_image = get_field('featured_image');

    $post_id = get_field('featured_post');
    $post = get_post($post_id);

    // $loop = new WP_Query([
    //     'post_type' => 'page',
    //     'posts_per_page' => -1,
    //     'post_parent' => 45,
    //     'orderby' => 'menu_order', 
    //     'order' => 'ASC',
    // ]);
?>

<section class="mt-[45px] mb-[100px] ">
    <div class="px-[35px]">
        <div class="flex flex-nowrap mx-[-10px]">
            <div class="max-w-one-third px-[10px] border-r-1 border-line">
                <article class="mr-[45px] text-center pb-10">
                    <div class="mb-[30px] rounded-2xl overflow-hidden relative">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo wp_get_attachment_image($featured_image, 'large'); ?>
                        </a>
                    </div>

                    <div>
                        <h2 class="font-mercury tracking-tight leading-[132%] text-[32px]">
                            <a class="border-b-1 border-transparent hover:text-red-hover hover:border-red-hover transition-all duration-200 ease-in-out" href="<?php the_permalink(); ?>">
                                <?php the_title() ?>
                            </a>
                        </h2>

                        <div class="flex items-center pt-2 uppercase text-secondary-blue text-[11px] font-medium">
                            <span>
                                <?php the_time('F j, Y'); ?>
                            </span>

                            <span class="px-[6px]">•</span>

                            <?php the_category(); ?>
                        </div>
                    </div>
                </article>
            </div>

            <?php wp_reset_postdata(); ?>
            
            <div class="max-w-one-third px-[10px] border-r-1 border-line">
                <?php 
                    $highlighted_posts = get_field('highlighted_posts');
                    if ($highlighted_posts) :
                ?>
                    <ul>
                        <?php foreach( $highlighted_posts as $post ): 
                            setup_postdata($post); ?>

                            <li class="relative mx-[45px] mb-[25px] pb-5 last-of-type:after:hidden after:content-[''] after:block after:bg-line after:bottom-0 after:absolute after:left-1/2 after:-translate-x-1/2 after:h-[1px] after:w-full">
                                <h2 class="text-base font-mercury leading-[140%]">
                                    <a class="border-b-1 border-transparent hover:text-red-hover hover:border-red-hover transition-all duration-200 ease-in-out" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="flex items-center flex-wrap pt-2 uppercase text-secondary-blue text-[11px] font-medium">
                                    <span class="pt-2">
                                        <?php the_time('F j, Y'); ?>
                                    </span>

                                    <span class="px-[6px]">•</span>

                                    <span class="pt-2">
                                        <?php the_category(); ?>
                                    </span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>  
                <?php endif; ?>              
            </div>

            <?php wp_reset_postdata(); ?>

            <div class="max-w-pone-third px-[10px]">
                <?php
                    $loop = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'orderby' => 'date', 
                        'order' => 'DESC',
                    ]);
                ?>

                <ul>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <li class="relative mx-[45px] mb-[25px] pb-5 last-of-type:after:hidden after:content-[''] after:block after:bg-line after:bottom-0 after:absolute after:left-1/2 after:-translate-x-1/2 after:h-[1px] after:w-full">
                            <h2 class="text-base font-mercury leading-[140%]">
                                <a class="border-b-1 border-transparent hover:text-red-hover hover:border-red-hover transition-all duration-200 ease-in-out" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="flex items-center flex-wrap pt-2 uppercase text-secondary-blue text-[11px] font-medium">
                                <span class="pt-2">
                                    <?php the_time('F j, Y'); ?>
                                </span>

                                <span class="px-[6px]">•</span>

                                <span class="pt-2">
                                    <?php the_category(); ?>
                                </span>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
    
<?php wp_reset_postdata(); ?>

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