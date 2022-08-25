<?php

    get_header();

?>

<section class="px-[35px]">
    <div class="mx-[-10px] block">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<section>
    <?php 
        $loop = new WP_Query([
            'post_type' => 'page',
            'posts_per_page' => -1,
            'post_parent' => 45,
            'orderby' => 'menu_order', 
            'order' => 'ASC',
        ]);
    ?>

    <ul class="flex flex-wrap mx-[25px] mt-[25px] pt-[25px]">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <li class="w-full sm:w-1/2 lg:w-1/4 px-[10px] mb-12 flex justify-start items-start">
                <a href="<?php the_permalink(); ?>" class="group w-full md:hover:translate-y-[-10px] transition-all duration-300 ease-in-out">
                    <div class="rounded-m w-full h-full mb-[10px] relative overflow-hidden">
                        <div class="pb-[87.12%] relative w-full">
                            <?php the_post_thumbnail('mediumLarge', ['class' => 'object-cover w-full h-full left-0 top-0 absolute']) ?>
                        </div>
                    </div>

                    <p class="mt-[2px] font-medium uppercase text-[10px] md:text-[11px] md:group-hover:text-red-hover transition-all duration-200 ease-in-out">
                        <?php the_title(); ?>
                    </p>
                </a>
            </div>
        <?php endwhile; ?>
    </ul>
</section>


<?php

    get_footer();
