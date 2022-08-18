<!-- Post template -->

<?php 

get_header();

// get_template_part('components/thumbnail', 'thumbnail', [
//     'size' => 'custom-size'
// ]);

the_title();

?>

<?php
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
</div>

<?php

get_footer();