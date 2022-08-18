<div>
    <p>President</p>

    <?php if (isset($args['cards']) && $args['cards']->have_posts()) : ?>
        <?php while ($args['cards']->have_posts()) : $args['cards']->the_post(); ?>
            <div>
                <h1><?php the_title(); ?></h1>
            </div>
            <div>
                <div>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>