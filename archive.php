<?php get_header(); ?>


<div
    class="ArchiveTopBox font-black  text-[28px] lg:text-[40px] text-gold w-full mt-7 lg:mt-[25px] lg:mb-[40px]  flex items-center justify-center"
>
    <?php dimox_breadcrumbs2(); ?>
</div>


<div class="container lg:w-[1200px] mx-auto">
    <section class="breadCrump hidden lg:block mb-[55px]">
        <div class="div flex flex-row items-center justify-between">
            <div class="flex flex-row gap-[5px] text-zeroBlack text-[14px] font-bold items-center">
                <?php
                if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs();
                ?>
            </div>
        </div>
    </section>

    <section id="newBlogPost">
        <div class="container relative lg:w-[1200px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-[20px] mt-10 lg:mt-[70px]">

                <?php if (have_posts()) : ?>
                    <!-- the loop -->
                    <?php while (have_posts()) : the_post(); ?>
                        <?php include 'Loop.php' ?>
                    <?php endwhile; ?>
                    <!-- end of the loop -->


                    <?php
                    custom_pagination($wp_query->max_num_pages, "", $paged);
                    ?>


                    <?php wp_reset_postdata(); ?>

                <?php else: ?>
                    <p><?php _e('No content available'); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>



