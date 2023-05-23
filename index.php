<?php get_header(); ?>


<section id="blog-banner">
    <div class="container lg:mt-[80px] p-3 lg:p-[0] lg:w-[1200px] mx-auto">
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
            LIMIT 4
         ";

$pageposts = $wpdb->get_results($querystr, OBJECT);
$selected_count= count($pageposts);
$selected_counter=0;


?>


<?php if ($pageposts): ?>



        <?php if ($selected_count>=4): ?>
            <section id="selectBlog" class="container lg:w-[1200px] mx-auto">
                <div class="selectBlog mt-[105px]">
                    <p class="selectBlog-title absolute text-[18px] top-[-12px] right-[140px]">
                        FAVORATE NEWS
                    </p>

                    <div class="flex flex-row items-center justify-between px-[5px] lg:px-0">
                        <div class="flex flex-row px-[5px] lg:px-0 gap-[9px] items-center">
                            <div
                                class="flex flex-row mt-[21px] text-white pt-1 justify-center items-center text-[25px] sharp-icon"
                            >
                                #
                            </div>
                            <p class="font-bold text-black text-[14px] lg:text-[18px] mt-[21px]">
                                منتخب سر دبیر
                            </p>
                        </div>
                    </div>

                </div>
                <div class="grid lg:grid-cols-12 grid-cols-1  justify-between items-center gap-[20px] lg:mt-[50px]">


                    <?php foreach ($pageposts as $post): ?>
                        <div class="col-span-3 ">
                            <div title=" <?php the_title(); ?>"
                               class="min-h-[300px] block w-full relative my-[10px] lg:my-0 text-right items-center"
                            >
                                <div class="flex flex-col relative items-center lg:items-start">

                                    <div class="lazy-box  shadow-xl relative">

                                        <img
                                            data-src="<?php the_post_thumbnail_url('small'); ?>"
                                            alt="<?php the_title(); ?>"
                                            class="w-[95%] bg-none rounded-[10px] h-[178px]"
                                        />
                                    </div>

                                    <div
                                        class="category-btn bottom-[-18px] left-[40px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                                    >
                                        <?php get_category_post(); ?>
                                    </div>
                                </div>

                                <div class="flex w-full flex-col mt-2 px-3 lg:px-0 items-start">
                                    <h2
                                        class="font-bold text-[13px] lg:text-[16px] lg:mt-[14px] mt-[25px]"
                                    >
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="flex flex-row items-center justify-between w-full text-[14px] mt-[5px] data-color">
                                        <?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?>

                                        <a href="<?php echo custom_permalink($post->ID); ?>"
                                           target="<?php echo custom_permalink_target($post->ID); ?>"
                                           class="bg-dataBg  px-5 py-1 text-blue text-[12px] hover:scale-110 hover:bg-blue hover:text-white  transition rounded-[25px] font-semibold">
                                            مطالعه
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </section>


        <?php endif; ?>



    <?php wp_reset_postdata(); ?>
<?php endif; ?>


<section id="newBlogPost">
    <div class="container relative lg:w-[1200px] mx-auto">
        <a href="#newBlogPost">
            <svg class="w-[147px] h-[70px] absolute hidden lg:block right-[41%] z-10 top-[46px]">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/sprite.svg#arrowbottom"></use>
            </svg>
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

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                <p><?php _e( 'No content available' ); ?></p>
            <?php endif; ?>


        </div>
        <!-- pagination here -->
        <?php
        custom_pagination($custom_query->max_num_pages,"",$paged);
        ?>

    </div>
</section>



<section id="bestArticle">
    <div class="container relative lg:w-[1200px] mx-auto">
        <div class="selectBlog relative lg:pt-[50px]">
            <p
                class="text-hint absolute text-[18px] top-[-12px] lg:top-[37px] right-[140px]"
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
            </div>
        </div>

        <div class="flex flex-row items-center mt-[70px]">
            <div class="grid grid-cols-1 lg:grid-cols-4 mx-auto gap-[20px]">

                <?php

                $popularpost = new WP_Query(array(
                    'posts_per_page' =>-3,
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
                    include 'Loop.php';
                endwhile;

                ?>

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


<script>
    addEventListener("load", function () {
        doc = document;
        bod = doc.body;
        htm = doc.documentElement;

        const element = document.getElementById("finish-content");

        const yElement = element.offsetTop;


        addEventListener("scroll", function () {

            const content= window.scrollY;

            if (document.documentElement.clientWidth < mediaBreakpointSize) {

                doc.getElementById("header").style.width =
                    htm.scrollTop > 5 ? "100%" : "100%";


                doc.getElementById("header").style.borderRadius =
                    htm.scrollTop > 5 ? "0" : "0";

                doc.getElementById("header").style.position =
                    htm.scrollTop > 5 ? "sticky" : "";

                doc.getElementById("header").style.background =
                    htm.scrollTop > 5 ? "rgba( 255, 255, 255, 0.85 )" : "rgba( 255, 255, 255, 0.85 )"


                doc.getElementById("header").style.boxShadow =
                    htm.scrollTop > 5 ? "0 49px 29px -23px rgba(0, 0, 0, 0.05)" : "0 49px 29px -23px rgba(0, 0, 0, 0.05)";

            } else {


                doc.getElementById("header").style.boxShadow =
                    htm.scrollTop > 5 ? "0 49px 29px -23px rgba(0, 0, 0, 0.05)" : "";

                doc.getElementById("header").style.background =
                    htm.scrollTop > 5 ? "rgba( 255, 255, 255, 0.85)" : ""


                doc.getElementById("header").style.position =
                    htm.scrollTop > 5 ? "sticky" : "sticky";

                doc.getElementById("header").style.top =
                    htm.scrollTop > 5 ? "0" : "0";

                doc.getElementById("header").style.borderRadius =
                    htm.scrollTop > 5 ? "0 0 25px 25px" : "0 0 25px 25px";
            }


            doc.getElementById("shareSocial").style.position =
                htm.scrollTop > 90 ? "fixed" : "";

            doc.getElementById("shareSocial").style.right =
                htm.scrollTop > 90 ? "370px" : "";

            doc.getElementById("shareSocial").style.top =
                htm.scrollTop > 90 ? "130px" : "";

            doc.getElementById("shareSocial").style.display =
                content >= yElement
                    ? "none"
                    : "";
        });
    });
</script>



<?php get_footer(); ?>
