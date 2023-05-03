<div class="blog-post-flat">
    <?php get_category_post(); ?>

    <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-5  xs-540 pull-left">
            <a class="bg-img min-h-200" data-gravatar-hash="<?php the_post_thumbnail_url('medium'); ?>" data-title-hash="<?php the_title() ?>" target="<?php custom_permalink_target($post->ID); ?>"  title="<?php the_title();  ?>" href="<?php custom_permalink($post->ID);  ?>">

            </a>
        </div>
        <div class="col-md-7 col-sm-7 col-sm-5  xs-540 pull-right">
            <div class="cont">
                <a  target="<?php echo  custom_permalink_target($post->ID); ?>"  title="<?php the_title();  ?>" href="<?php echo  custom_permalink($post->ID);  ?>"><h3><?php the_title();  ?></h3></a>
                <div class="details">
                    <?php
                    the_excerpt();
                    ?>
                </div>

                <div class="p-footer">

                    <div class=" visit">
                         <?php echo  get_the_date();  ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>


    </div>
</div>