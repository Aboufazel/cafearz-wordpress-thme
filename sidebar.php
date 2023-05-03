<div class="ads mb-4">
    <?php dynamic_sidebar_customize( 'home_right_1' ); ?>

</div>
<div  class="hidden-xs">
    <div id="afix-hot-post">
            <div class="blog-title">
                <svg class="text-dark-550 dark:text-white ml-4" width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="24" r="10" fill="currentColor"></circle>
                    <circle cx="30" cy="13" r="7" fill="currentColor" fill-opacity="0.4"></circle>
                    <circle cx="15" cy="4" r="4" fill="currentColor" fill-opacity="0.7"></circle>
                </svg>
                    برترین مطالب

            </div>
            <?php

                $popularpost = new WP_Query(array(
                    'posts_per_page' =>-5,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'date_query'     => array(
                        array(
                            'after' => '4 week ago'
                        )
                    )

                ));

                while ( $popularpost->have_posts() ) : $popularpost->the_post();
                    include 'includes/sidebarloop.php';
                endwhile;

            ?>
    </div>
</div>



