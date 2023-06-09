<div class="flex flex-col items-center bg-white rounded-[10px] py-5 px-3 lg:p-0 lg:bg-inherit min-h-[300px] gap-[12px] loop-card-hover">

    <div class="flex flex-col  mb-[15px] lazy-box relative items-center">

        <a href="<?php echo custom_permalink($post->ID); ?>"
           title="<?php the_title(); ?>"
           class="w-full"
           target="<?php echo custom_permalink_target($post->ID); ?>">
            <div class="img-box">
                <img
                    data-src="<?php the_post_thumbnail_url('small'); ?>"
                    alt="<?php the_title(); ?>"
                    class="bg-none shadow-xl lg:w-[300px] lg:h-[178px] w-full h-auto rounded-[10px]"
                />
            </div>

        </a>
    </div>

    <div
        class="flex flex-col w-full  gap-[12px]  items-start"
    >
        <h3 title="<?php the_title(); ?>" class="text-[16px] text-start transition hover:text-blue">
            <a href="<?php echo custom_permalink($post->ID); ?>"
               title="<?php the_title(); ?>"
               target="<?php echo custom_permalink_target($post->ID); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <div
            class="text-[14px] leading-6 text-blogDetail lg:text-justify font-light]"
        >
            <?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
        </div>
        <div
            class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
        >
            <svg class="w-[18px] h-[18px]">
                <use
                    xlink:href="<?php echo get_template_directory_uri(); ?>/src/assets/svg/sprite.svg#calendar"></use>
            </svg>

            <p class="text-[12px] font-normal"><?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?></p>
        </div>
    </div>
</div>
