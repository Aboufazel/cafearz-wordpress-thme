<div class="flex min-h-[300px] flex-col mb-[32px] gap-[12px] items-center">

    <div class="flex flex-col mb-[15px] relative items-center ">
        <a href="<?php echo custom_permalink($post->ID); ?>"
           title="<?php the_title(); ?>"
           target="<?php echo custom_permalink_target($post->ID); ?>"
           class="flex flex-grow items-center relative justify-center w-full lazy-box ">
            <img
                data-src="<?php the_post_thumbnail_url('small'); ?>"
                alt="<?php the_title(); ?>"
                class="shadow-xl rounded-[10px] w-[278px] h-[178px]"
            />
        </a>
    </div>

    <div
        class="flex w-full sm:max-w-[300px] gap-[12px] px-2 flex-col items-center lg:items-start"
    >
        <h2 title="<?php the_title(); ?>" class="lg:text-[14px] transition hover:text-blue">
            <a href="<?php echo custom_permalink($post->ID); ?>"
               title="<?php the_title(); ?>"
               target="<?php echo custom_permalink_target($post->ID); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <div
            class="text-[14px] leading-6 text-blogDetail text-center
                lg:text-justify font-light]"
        >
            <?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
        </div>
        <div class="flex flex-row w-full justify-between items-center">
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
</div>
