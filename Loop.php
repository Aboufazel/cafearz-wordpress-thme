<div class="flex flex-col">
    <a href="<?php echo custom_permalink($post->ID); ?>"
       target="<?php echo custom_permalink_target($post->ID); ?>"
       class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

        <div class="flex flex-col relative items-center">
            <img
                src="<?php the_post_thumbnail_url('large'); ?>"
                alt="<?php the_title(); ?>"
                class="w-full px-3 bg-none rounded-[10px] shadow-xl h-[178px]"
            />
        </div>

        <div
            class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
        >
            <h3 class="lg:text-[14px] px-1 overflow-hidden max-w-[200px] whitespace-nowrap text-ellipsis">
                <?php the_title(); ?>
            </h3>
            <div
                class="text-[14px] leading-6 text-blogDetail text-center
                overflow-hidden max-w-[300px] lg:max-w-[1550px] whitespace-nowrap text-ellipsis
                lg:text-justify font-light w-[95%]"
            >
                <?php the_excerpt();?>
            </div>
            <div
                class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
            >
                <svg class="w-[18px] h-[18px]">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/src/assets/svg/sprite.svg#calendar"></use>
                </svg>

                <p class="text-[12px] font-normal"><?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?></p>
            </div>
        </div>
    </a>
</div>