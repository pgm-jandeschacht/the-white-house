<?php 

    get_header();

?>

<main class="max-width">
    <section class="pt-[85px] pb-[30px] mb-[30px]">
        <div class="w-full max-width-half">
            <h1 class="title-blue">
                <?php echo the_title(); ?>
            </h1>
        </div>
    </section>

    <section class="px-[35px] max-w-[790px] ml-auto mr-auto">
        <?php echo the_content(); ?>
    </section>
</main>


<?php

    get_footer();