<?php get_header(); ?>

<div  class="page_header_page "   >
    <div   class="app-container">
        <h1>
            نتیجه جستجو :
            <?php printf(the_search_query());?>
        </h1>
        <?php
        if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs();
        ?>
    </div>
</div>

<div class="app-container   d-none d-md-block ">
    <?php include 'menu.php'; ?>
</div>


<div class="app-container mt-5">

    <div class="row">
        <div class="col-lg-9 col-md-12  xs-540">

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

                <?php
                custom_pagination($wp_query->max_num_pages,"",$paged);
                ?>

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                <div class="notfound"><?php _e( 'No content available' ); ?></div>
            <?php endif; ?>
        </div>
        <div id="afix" class="col-lg-3  xs-540">

            <?php get_sidebar(); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
