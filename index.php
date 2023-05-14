<?php get_header(); ?>



<section id="blog-banner">
    <div class="container lg:mt-[90px] p-[20px] lg:p-[0] lg:w-[1200px] mx-auto">
        <?php

        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $custom_args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'paged' => $paged
        );

        $custom_query = new WP_Query( $custom_args ); ?>

        <?php if ( $custom_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                <?php include 'RandomBlog.php'?>

            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

        <?php else:  ?>
            <p><?php _e( 'No content available' ); ?></p>
        <?php endif; ?>
    </div>
</section>







<section id="bestArticle" class="">
    <div class="container relative lg:w-[1200px] mx-auto">
        <div class="selectBlog relative lg:pt-[120px]">
            <p
                class="text-hint absolute text-[18px] top-[-12px] lg:top-[107px] right-[140px]"
            >
                CAFEARZ BLOG
            </p>
            <div class="flex flex-row items-center justify-between px-[5px] lg:px-0">
                <div class="flex flex-row px-[5px] lg:px-0 gap-[9px] items-center">
                    <div
                        class="flex flex-row mt-[21px] text-white pt-1 justify-center items-center text-[25px] sharp-icon"
                    >
                        #
                    </div>
                    <p class="font-bold text-black text-[14px] lg:text-[18px] mt-[21px]">
                        برترین مطالب
                    </p>
                </div>

                <a href="<?php the_permalink()?>"
                   target="_blank"
                    class="read-more-btn flex flex-row items-center mt-[21px] font-bold text-[12px] lg:text-[14px]"
                >
                    مشاهده همه
                </a>
            </div>
        </div>

        <div class="flex flex-row items-center mt-[70px]">
            <div class="grid grid-cols-1 lg:grid-cols-4 mx-auto gap-[20px]">

                <?php
                $today = getdate();
                $replywp_args = array(
                    'post_type'=>'post',
                    'posts_per_page'=>'10',
                    'offset'=>0,
                    'meta_key'=>'views','orderby'=>'meta_value_num',
                    'order'=>'DESC','post_status'=>'publish',
                    'date_query'=> array(
                        array('column' =>'post_date_gmt',
                            'after' => '1 week ago'
                        )));
                $the_query = new WP_Query( $replywp_args ); ?>
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <?php endwhile; wp_reset_postdata(); else : ?>
                    <?php _e( 'متاسفیم مطلبی برای نمایش وجود ندارد' ); ?>
                <?php endif; ?>

                <a href="https://www.instagram.com/cafearz_com"
                   target="_blank"
                   class="lg:flex lg:flex-col hidden relative text-right items-center"
                >
                    <div
                        class="instagramCard text-white p-[25px] flex flex-col items-center lg:w-[287px] lg:h-[413px] h-[25px]"
                    >
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/src/assets/img/instagram.png"
                            class="mt-[30px]"
                            alt="اینستاگرام کافه ارز"
                        />

                        <p class="text-[18px] font-bold mb-[9px] mt-[29px]">
                            اینستاگرام کافه ارز
                        </p>
                        <p class="text-[14px]">مطالب بروز در اینستاگرام کافه ارز</p>
                    </div>

                    <div
                        class="relative top-[-80px] w-full flex flex-row justify-center bg-white items-center mt-[21px] font-bold text-[14px]"
                    >
                        <button href="https://www.instagram.com/cafearz_com" class="category-btn bg-white">کلیک کنید</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="newBlogPost">
    <div class="container relative lg:w-[1200px] mx-auto">
        <a href="#newBlogPost">
            <img
                src="<?php echo get_template_directory_uri(); ?>/src/assets/img/arrowButton.png"
                alt="کافه ارز"
                class="absolute hidden lg:block right-[44%] z-10 top-[45px]"
            />
        </a>

        <div class="selectBlog relative lg:pt-[120px]">
            <p
                class="text-hint absolute text-[18px] top-[-12px] lg:top-[107px] right-[140px]"
            >
                CAFEARZ BLOG
            </p>
            <div class="flex flex-row items-center justify-between px-[5px] lg:px-0">
                <div class="flex flex-row px-[5px] lg:px-0 gap-[9px] items-center">
                    <div
                        class="flex flex-row mt-[21px] text-white pt-1 justify-center items-center text-[25px] sharp-icon"
                    >
                        #
                    </div>
                    <p class="font-bold text-black text-[14px] lg:text-[18px] mt-[21px]">
                        جدیدترین مطالب
                    </p>
                </div>

                <div
                    class="read-more-btn flex flex-row items-center mt-[21px] font-bold text-[12px] lg:text-[14px]"
                >
                    مشاهده همه
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-[20px] mt-[70px]">

            <?php

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $custom_args = array(
                'post_type' => 'post',
                'posts_per_page' => 8,
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

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                <p><?php _e( 'No content available' ); ?></p>
            <?php endif; ?>


        </div>
    </div>
</section>



<?php get_footer(); ?>
