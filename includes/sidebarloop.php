<div class="blog-post-flat hot ">
    <a target="_blank" class="d-flex justify-content-between align-items-center flex-row-reverse bg-img-sidebar min-h-80" data-gravatar-hash="<?php the_post_thumbnail_url('thumbnail'); ?>" data-title-hash="<?php the_post_thumbnail_caption() ?>"  href="<?php echo  custom_permalink($post->ID);  ?>" title="<?php the_title_attribute(); ?>" >

        <div class="cont">
            <h4><?php the_title(); ?></h4>
        </div>
    </a>
</div>