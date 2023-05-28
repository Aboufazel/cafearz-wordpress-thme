<?php get_header(); ?>

<div class="container lg:w-[1200px] mx-auto min-h-[230px]">

    <div class="hidden lg:flex  lg:flex-row items-center justify-between mt-[50px]">
        <h1>
            نتیجه جستجو :
            <?php printf(the_search_query());?>
        </h1>
    </div>

    <div class="container relative px-3 lg:w-[1200px] mx-auto">
        <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-4 gap-[20px] mt-10 lg:mt-[70px]">


            <?php if ( have_posts() ) : ?>
                <!-- the loop -->
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php include 'Loop.php'?>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                <div class="col-span-3 font-semibold text-[14px]"><?php _e( 'یافت می نشد! آنچه یافت می نشود آنم آرزوست!' ); ?></div>
            <?php endif; ?>

        </div>

        <?php
        global $wp_query;
        ?>

        <?php
        custom_pagination($wp_query->max_num_pages,"",$paged);
        ?>
    </div>
</div>



<?php get_footer(); ?>
