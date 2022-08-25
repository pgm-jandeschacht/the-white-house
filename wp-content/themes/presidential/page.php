<!-- fallback single unique page -->

<?php

    get_header();

?>

<section class="pt-[85px] pb-[30px] mb-[30px] ">
    <div class="flex flex-col items-center px-[10px] max-w-half mx-auto">
        <h1 class="title-blue mt-[15px]">
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
