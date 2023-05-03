<?php get_header('blog'); ?>
<section>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php setPostViews($post->ID); ?>
            <div class="app-container mt-4 mb-4   d-none d-md-block ">
                <?php include 'menu.php'; ?>
            </div>

            <div class="app-container">
                <div class="row">

                    <div class="col-lg-9 col-md-12 col-xs-12">
                        <div class="starc-img-box dpost">
                            <a title=" <?php the_title(); ?>" href="<?php the_permalink() ?>"
                               style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"
                               class="blog-post">

                                <h1 class="title">   <?php the_title(); ?></h1>
                                <span class="mask"></span>

                            </a>
                            <?php get_category_post(); ?>
                        </div>

                        <div class="display_post">

                            <div class="brc d-none d-md-block">
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo site_url(); ?>">وبلاگ</a></li>
                                    <li> <?php get_category_post(); ?></li>
                                    <li class="active"><?php the_title(); ?></li>
                                </ol>
                            </div>
                            <?php the_content(); ?>
                            <div class="clearfix"></div>
                        </div>

                        <div class="social-share">
                            <div class="float-right">
                                <div class="author">
                                    <b> <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>  </b>
                                    <?php the_author_posts_link(); ?>
                                </div>
                            </div>
                            <div>
                                <?php
                                $user = wp_get_current_user();
                                if (in_array('author', (array)$user->roles) || in_array('editor', (array)$user->roles) || in_array('administrator', (array)$user->roles)) {
                                    ?>
                                    <a style="float: left;margin-left: 10px;padding: 3px 10px;font-size: 10px;margin-top: 5px;"
                                       class="btn btn-warning btn-sm"
                                       href="<?php echo get_edit_post_link($post->ID); ?>">ویرایش</a>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="clearfix"></div>
                            <div class="mt-2"> انتشار : <?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?></div>
                            <h4 class="float-right ">این مطلب را به اشتراک بگذارید : </h4>
                            <ul class="social">
                                <li><a class="facebook" title="فیس بوک"
                                       href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">
                                        <svg class="icon facebook ">
                                            <use xlink:href="https://cafearz.com/blog/wp-content/themes/cafearz/images/sprite.svg#facebook"></use>
                                        </svg>
                                    </a></li>
                                <li><a class="" title="توییتر "
                                       href="http://www.twitter.com/share?url=<?php the_permalink(); ?>">
                                        <svg class="icon twitter">
                                            <use xlink:href="https://cafearz.com/blog/wp-content/themes/cafearz/images/sprite.svg#twitter"></use>
                                        </svg>
                                    </a></li>
                                <li><a title=" لینکدین"
                                       href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>">
                                        <svg class="icon paper-plane">
                                            <use xlink:href="https://cafearz.com/blog/wp-content/themes/cafearz/images/sprite.svg#linkedin"></use>
                                        </svg>
                                    </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <?php
                        $categories = get_the_category($post->ID);
                        $args=null;
                        if ($categories) {
                            $category_ids = array();
                            foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                            $args = array(
                                'category__in' => $category_ids,
                                'post__not_in' => array($post->ID),
                                'posts_per_page' => 6, // Number of related posts that will be shown.
                                'ignore_sticky_posts' => 1
                            );
                        }

                        if ($args) {

                            $rel_posts = new WP_Query($args);
                            if ($rel_posts->have_posts()) {
                                ?>

                                <div class="relation_post">
                                    <div class="blog-title">
                                        <strong class="title">

                                            مطالب مرتبط
                                        </strong>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <?php while ($rel_posts->have_posts()) : $rel_posts->the_post(); ?>
                                            <div class="col-md-4  col-sm-6 col-xs-6 xs-540 starc-img-box thumb">
                                                <a title=" <?php the_title(); ?>" href="<?php the_permalink() ?>"
                                                   style="background-image: url('<?php the_post_thumbnail_url('large'); ?>')"
                                                   class="blog-post">
                                                    <h3 class="title">   <?php the_title(); ?></h3>
                                                    <span class="mask"></span>
                                                </a>

                                                <?php get_category_post(); ?>
                                            </div>
                                        <?php
                                        endwhile;
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>

                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                        <div class="clearfix"></div>

                    </div>
                    <div id="afix" class="col-lg-3 col-md-12 d-none d-sm-block ">
                        <div>
                            <?php get_sidebar(); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>

    <?php endif; ?>
</section>
<?php get_footer('blog'); ?>

