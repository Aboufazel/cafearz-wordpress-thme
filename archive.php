<?php get_header(); ?>


<div class="container lg:w-[1200px] mt-[55px] mx-auto">

    <div class="hidden lg:flex flex flex-row items-center justify-between mt-[90px]">
        <div class="flex flex-row gap-[5px] text-zeroBlack text-[14px] font-bold items-center">
            <?php
            if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs();
            ?>
        </div>
    </div>

    <h2 class="bg-[#0051FF] rounded-[7px] mt-[52px] text-white text-shadow:[3px 2px 4px 0 rgba(0, 0, 0, 0.25)] text-[35px] font-black max-w-max px-[30px] py-[5px]">
        <?php get_category_post(); ?>
    </h2>

    <div class="container relative lg:w-[1200px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-[20px] mt-10 lg:mt-[70px]">

            <?php if (have_posts()) : ?>
                <!-- the loop -->
                <?php while (have_posts()) : the_post(); ?>
                    <?php include 'Loop.php' ?>
                <?php endwhile; ?>
                <!-- end of the loop -->


                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else: ?>
                <p><?php _e('No content available'); ?></p>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>



