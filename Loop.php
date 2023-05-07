
<a href="<?php echo custom_permalink($post->ID); ?>" title="<?php the_title(); ?>"
   target="<?php echo custom_permalink_target($post->ID); ?>"
   class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

    <div class="flex flex-col relative items-center">
        <img
            src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
            alt="شرکت های فعال در مناورس"
            class="w-full lg:w-[100%] px-3 lg:px-0"
        />

        <div
            class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
        >
            <?php get_category_post(); ?>
        </div>
    </div>

    <div
        class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
    >
        <h3 class="font-bold text-[14px] mt-[14px]">
            <h3><?php the_title(); ?>
            </h3>
            <p
                class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
            >
                <?php
                the_excerpt();
                ?>
            </p>
            <div
                class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
            >
                <i class="fa-regular fa-calendar-days"></i>

                <p class="text-[14px] font-semibold"><?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?></p>
            </div>
    </div>
</a>