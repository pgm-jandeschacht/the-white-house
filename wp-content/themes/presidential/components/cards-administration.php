<ul class="flex pt-[25px] ml-[-10px] mr-[-10px] flex-wrap">
    <?php if (isset($args['cards']) && $args['cards']->have_posts()) : ?>
        <?php while ($args['cards']->have_posts()) : $args['cards']->the_post(); ?>
            <li class="w-full sm:w-1/2 lg:w-1/4 px-[10px] mb-12 flex justify-start items-start">
                <a href="<?php the_permalink(); ?>" class="group w-full md:hover:translate-y-[-10px] transition-all duration-300 ease-in-out">
                    <div class="rounded-m w-full h-full mb-[10px] flex overflow-hidden">
                        <?php the_post_thumbnail('mediumLarge', ['class' => 'object-cover']) ?>
                    </div>
    
                    <h2 class="leading-[132%] tracking-tight mt-[2px] text-[10px] md:text-[11px] uppercase font-medium md:group-hover:text-red-hover transition-all duration-200 ease-in-out">
                        <?php the_field('job_title'); ?> <?php the_title(); ?>
                    </h2>
                </a>
            </li>
        <?php endwhile; ?>
    <?php endif; ?>
</ul>
