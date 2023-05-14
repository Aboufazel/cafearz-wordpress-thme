<div class="flex cursor-pointer flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

    <div class="flex flex-col mb-[15px] relative items-center">
        <img
            src="<?php the_post_thumbnail_url('large'); ?>"
            alt="<?php the_title(); ?>"
            class="w-[95%] bg-none rounded-[10px] shadow-xl h-[178px]"
        />

        <div
            class="category-btn h-[29px] text-[12px] bottom-[-14px] left-[22px] bg-white flex flex-row items-center font-bold text-[14px]"
        >
            <?php get_category_post(); ?>
        </div>
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
            <?php the_excerpt(); ?>
        </div>
        <div class="flex flex-row w-full justify-between items-center">
            <div
                class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
            >
                <svg class="w-[18px] h-[18px]">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/src/assets/svg/sprite.svg#calendar"></use>
                </svg>

                <p class="text-[12px] font-normal"><?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?></p>
            </div>
            <a href="<?php echo custom_permalink($post->ID); ?>"
               target="<?php echo custom_permalink_target($post->ID); ?>"
               class="bg-dataBg  px-5 py-1 text-blue text-[12px] rounded-[25px] font-semibold">
                مطالعه
            </a>
        </div>
    </div>
</div>
