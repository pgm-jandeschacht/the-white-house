<?php

    get_header();

?>

<section class="pt-[70px] pb-[75px] mb-[95px] mx-[15px] min-h-[370px] bg-primary flex items-center rounded-2xl">
    <div class="px-[35px] max-w-half mx-auto">
        <h1 class="title-white">
            <?php the_title(); ?>
        </h1>
    </div>
</section>

<section class="px-[35px]">
    <div class="mx-[-10px] block">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</section>


<?php

    get_footer();
