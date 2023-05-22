<?php get_header(); ?>

<div class="container lg:w-[1200px] mx-auto">

    <div class="hidden lg:flex  lg:flex-row items-center justify-between mt-[50px]">
        <h1>
            نتیجه جستجو :
            <?php printf(the_search_query());?>
        </h1>
    </div>

    <div class="container relative lg:w-[1200px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-[20px] mt-10 lg:mt-[70px]">


            <?php if ( have_posts() ) : ?>
                <!-- the loop -->
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php include 'Loop.php'?>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->
                <?php
                global $wp_query;
                ?>

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                <div class="col-span-3 font-semibold text-[14px]"><?php _e( 'یافت می نشد! آنچه یافت می نشود آنم آرزوست!' ); ?></div>
            <?php endif; ?>

        </div>

        <?php
        custom_pagination($wp_query->max_num_pages,"",$paged);
        ?>
    </div>
</div>



<?php get_footer(); ?>
