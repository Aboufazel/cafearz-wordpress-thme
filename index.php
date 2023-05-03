<?php get_header(); ?>

<div class="fix-head"></div>

<div style="margin-bottom: 15px;" class="app-container  d-none d-md-block ">
    <br/>

    <?php include 'menu.php'; ?>
</div>
<div class="app-container">

<!--    <div class="search-sidebar hidden-lg hidden-md hidden-sm visible-xs">-->
<!--        <form class="search-form clearfix" action="--><?php //echo home_url(); ?><!--">-->
<!--            <input name="s"  value="--><?php // if(isset($_GET['s']))  echo $_GET['s']; else echo  ''; ?><!--" id="s" type="text"  class="form-control" placeholder="  Search">-->
<!--            <button type="submit" class="icon">-->
<!--                <i class="fa fa-search "></i>-->
<!--            </button>-->
<!--            <input type="hidden" value="submit" />-->
<!--        </form>-->
<!---->
<!--    </div>-->
    <?php
    $querystr = "
            SELECT $wpdb->posts.* 
            FROM $wpdb->posts, $wpdb->postmeta
            WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
            AND $wpdb->postmeta.meta_key = 'selected' 
            AND $wpdb->postmeta.meta_value = 1 
            AND $wpdb->posts.post_status = 'publish' 
            AND $wpdb->posts.post_type = 'post'
            ORDER BY $wpdb->posts.post_modified DESC
            LIMIT 6
         ";

    $pageposts = $wpdb->get_results($querystr, OBJECT);
    $selected_count= count($pageposts);
    $selected_counter=0;
    ?>

    <?php if ($pageposts): ?>
        <div class="row">
            <?php foreach ($pageposts as $post): ?>

                <?php if ($selected_count==1): ?>

                    <div class="col-md-12 col-sm-12 starc-img-box" >
                        <a  target="<?php echo  custom_permalink_target($post->ID); ?>"  title=" <?php the_title(); ?>" data-top-image="<?php the_post_thumbnail_url('large'); ?>" href="<?php echo  custom_permalink($post->ID); ?>" style="" class="blog-post bg-img">

                            <h2 class="title">   <?php the_title(); ?></h2>
                            <span class="mask"></span>

                        </a>
                        <?php get_category_post(); ?>

                    </div>

                <?php else:; ?>

                    <div class="col-md-6 col-sm-6 col-xs-6 xs-540 starc-img-box" >

                        <a  target="<?php echo  custom_permalink_target($post->ID); ?>"  data-top-image="<?php the_post_thumbnail_url('large'); ?>"   title=" <?php the_title(); ?>" href="<?php echo  custom_permalink($post->ID); ?>" style="" class="blog-post bg-img">

                            <h2 class="title">   <?php the_title(); ?></h2>
                            <span class="mask"></span>
                        </a>
                        <?php get_category_post(); ?>

                    </div>

                <?php endif; ?>

                <?php
                unset($pageposts[$selected_counter]);

                $selected_counter++;
                if($selected_counter==2)
                    break;
                ?>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>

        </div>

        <?php if ($selected_count>5): ?>
            <div class="row m-t-10">
                <?php foreach ($pageposts as $post): ?>

                    <?php if ($selected_count>5): ?>

                        <div   class="col-md-3  col-sm-6 col-xs-6 xs-540 starc-img-box thumb">
                                <a target="_blank" title=" <?php the_title(); ?>" href="<?php echo custom_permalink($post->ID); ?>"  data-top-image="<?php the_post_thumbnail_url('large'); ?>"   style="" class="blog-post bg-img">

                                    <h2 class="title">   <?php the_title(); ?></h2>
                                    <span class="mask"></span>

                                </a>
                                <?php get_category_post(); ?>

                        </div>


                    <?php endif; ?>


                <?php endforeach; ?>

            </div>
        <?php endif; ?>

    <?php endif; ?>


    <!-- latest posts -->

    <div class="row mt-5">
        <div class="col-md-9 col-sm-9 col-xs-12  xs-540">
            <div class="blog-title">
                <svg class="text-dark-550 dark:text-white ml-4" width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="24" r="10" fill="currentColor"></circle>
                    <circle cx="30" cy="13" r="7" fill="currentColor" fill-opacity="0.4"></circle>
                    <circle cx="15" cy="4" r="4" fill="currentColor" fill-opacity="0.7"></circle>
                </svg>
                جدیدترین نوشته ها
            </div>
            <?php

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $custom_args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'paged' => $paged
            );

            $custom_query = new WP_Query( $custom_args ); ?>

            <?php if ( $custom_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                    <?php include 'Loop.php'?>

                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->
                <?php
                custom_pagination($custom_query->max_num_pages,"",$paged);
                ?>

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                <p><?php _e( 'No content available' ); ?></p>
            <?php endif; ?>

        </div>

        <div id="afix" class="col-md-3 col-sm-3 col-xs-4  xs-540">

            <?php get_sidebar(); ?>
        </div>

    </div>

</div>

<?php get_footer(); ?>
