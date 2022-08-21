<!-- blog post index page -->

<?php

get_header(); 

?>

<section class="pt-[85px] pb-[30px] mb-[30px] ">
    <div class="flex flex-col items-center px-[10px]">
        <h1 class="title-blue mt-[15px]">
            <?php single_post_title(); ?>
        </h1>
    </div>
</section>

<section class="px-[35px]">
    <div class="mx-[-10px]">
        <div class="max-w-half ml-[25%] px-[10px]">
            <ul>
                <?php 
                    $loop = new WP_Query([  // With WP_Query, we can query for posts and pages and limit the number of posts we want to show.
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'order_by' => 'date',
                        'order' => 'DESC',
                    ]);
                    
                    // 'meta_query' => [
                    //     'relation' => 'AND',
                    //     [
                    //         'key' => 'author',
                    //         'value' => 'jandeschacht'
                    //     ]
                    // ]

                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <li class="mb-10 pb-10 border-b-1-5 border-line">
                            <a href="<?php the_permalink(); ?>" class="group">
                                <h2 class="inline text-[32px] font-mercury tracking-tight leading-[132%] group-hover:text-red-hover border-b-1 border-transparent group-hover:border-red-hover transition-all duration-200 ease-in-out">
                                    <?php the_title(); ?>
                                </h2>
                            </a>

                            <div class="flex items-center pt-2 uppercase text-secondary-blue text-[11px] font-medium">
                                <span>
                                    <?php the_time('F j, Y'); ?>
                                </span>

                                <span class="px-[6px]">•</span>

                                <?php the_category(); ?>
                            </div>
                        </li>
                    <?php endwhile;

                    wp_reset_postdata(); // Needed to reset the post data
                ?>
            </ul>
        </div>

        <div>
            <?php if (is_active_sidebar('side_nav_categories')) : ?>
                <?php dynamic_sidebar('side_nav_categories'); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php

    get_footer();