<div id="newLoop" class="flex items-center border rounded-[15px] p-3 min-h-[100px] bg-white">

    <div class="lazy-box justify-center w-1/6 relative items-center">
        <a href="<?php echo custom_permalink($post->ID); ?>"
           title="<?php the_title(); ?>"
           class="w-full"
           target="<?php echo custom_permalink_target($post->ID); ?>">
            <img
                data-src="<?php the_post_thumbnail_url('thumbnail'); ?>"
                alt="<?php the_title(); ?>"
                class="bg-none shadow-xl rounded-[15px]"
            />
        </a>
    </div>

    <div
        class="flex flex-row w-5/6 justify-start pr-3 gap-[12px]"
    >
        <h3 title="<?php the_title(); ?>" class="text-[14px] font-normal text-start transition hover:text-blue">
            <a href="<?php echo custom_permalink($post->ID); ?>"
               title="<?php the_title(); ?>"
               target="<?php echo custom_permalink_target($post->ID); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
<!--        <div-->
<!--            class="py-[3px] gap-[6px] rounded-[25px] flex items-center"-->
<!--        >-->
<!--            <svg class="w-[18px] h-[18px]">-->
<!--                <use-->
<!--                    xlink:href="--><?php //echo get_template_directory_uri(); ?><!--/src/assets/svg/sprite.svg#calendar"></use>-->
<!--            </svg>-->
<!---->
<!--            <p class="text-[12px] font-normal">--><?php //shamsiDate(get_the_date('Y-m-d', $post->ID)); ?><!--</p>-->
<!--        </div>-->
    </div>
</div>
