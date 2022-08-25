<!-- blog post index page -->

<?php

get_header(); 

?>

<section class="pt-[85px] pb-[30px] mb-[30px] ">
    <div class="flex flex-col items-center px-[10px]">
        <h1 class="title-blue mt-[15px] max-w-half">
            <?php single_post_title(); ?>
        </h1>
    </div>
</section>

<section class="px-[35px]">
    <div class="mx-[-10px] flex">
        <div class="max-w-half ml-[25%] px-[10px]">
            <ul>
                <?php 
                    $loop = new WP_Query([  // With WP_Query, we can query for posts and pages and limit the number of posts we want to show.
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'order_by' => 'date',
                        'order' => 'DESC',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
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
                ?>
            </ul>

            <div class="pagination">
                <?php
                    the_posts_pagination([
                    'show_all'     => false, 
                    'prev_text'    => false,
                    'next_text'    => false,
                    'mid_size' => 3,
                    'end_size' => 1,
                    ]);
                ?>
            </div>
        </div>

        <div class="max-w-[16.666%] ml-[8.333%] px-[10px]">
            <nav aria-label="Side Navigation" class="side-navigation relative before:content-[''] before:h-full before:w-[1px] before:bg-line before:absolute before:left-[-20px] before:top-0">
                <?php if (is_active_sidebar('side_nav_categories')) : ?>
                    <?php dynamic_sidebar('side_nav_categories'); ?>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</section>

<?php

    get_footer();