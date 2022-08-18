<!-- blog post index page -->

<?php

get_header(); 

?>

<?php 
    $loop = new WP_Query([  // With WP_Query, we can query for posts and pages and limit the number of posts we want to show.
        'post_type' => 'post',
        'posts_per_page' => 3,
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
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
    <div>
        <div>
            <p><?php the_content(); ?></p>
        </div>
    </div>
<?php endwhile;
wp_reset_postdata(); // Needed to reset the post data

get_footer();