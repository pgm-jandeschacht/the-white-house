<!-- home page aka front page -->

<?php get_header(); ?>

    <p class="text-test">hello</p>

    <a href="<?php the_permalink() ?>">
        <?php _e('Read more', 'presidential') ?> <!-- translation, can be put in custom function -->
        <?php esc_html_e('Read more', 'presidential') ?> <!-- esc_html_e is a function that escapes html -->
    </a>

    <?php get_template_part('components/cards', 'cards', [
        'cards' => new WP_Query([
            'post_type' => 'president',
            'posts_per_page' => 3,
        ])
    ]); ?>

<?php if (!is_user_logged_in()) {
    // if user is not logged in hide some things
} ?>

<?php get_footer(); ?>