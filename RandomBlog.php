<div class="grid grid-cols-1 lg:grid-cols-2 lg:place-items-center lg:bg-[#0051FF]  lg:py-5 lg:px-8 rounded-[25px] lg:pb-[70px]">

    <div class="flex lg:hidden justify-start w-full z-10">
        <img
            src="<?php the_post_thumbnail_url('large'); ?>"
            alt="<?php the_title(); ?>"
            width="575px"
            height="360px"
            class="mt-[20px] w-full rounded-[15px] relative"
        />
    </div>

    <div class="flex flex-col gap-[12px] mt-5 lg:mt-0  items-start justify-center w-full z-10">
        <h1 title="<?php the_title(); ?>" class="lg:text-[28px] lg:text-white font-black blog-title">
            <?php the_title(); ?>
        </h1>

        <a target="<?php echo custom_permalink_target($post->ID); ?>"
           href="<?php echo custom_permalink($post->ID); ?>" class="text-[16px] font-normal lg:text-dataBg text-justify lg:mt-[17px] leading-[35px]">
            <?php the_excerpt();?>
        </a>

        <div class="flex flex-row w-full mt-8 items-center justify-between">
            <div
                class="bg-dataBg px-[25px] py-[8px] gap-[6px] rounded-[25px] flex items-center"
            >
                <svg class="w-[18px] h-[18px]">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/src/assets/svg/sprite.svg#calendar"></use>
                </svg>

                <p class="text-[12px] font-bold"><?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?></p>
            </div>

            <a href="<?php echo custom_permalink($post->ID); ?>"
               title="<?php the_title(); ?>"
               target="<?php echo custom_permalink_target($post->ID); ?>"
               class="bg-dataBg  px-5 py-1 text-blue text-[12px] hover:scale-110 hover:text-black hover:shadow-lg transition rounded-[25px] font-semibold">
                مطالعه
            </a>
        </div>
    </div>

    <div class="lg:flex hidden justify-start w-full z-10">
        <img
            src="<?php the_post_thumbnail_url('large'); ?>"
            alt="<?php the_title(); ?>"
            class="lg:mt-[35px] shadow-xl rounded-[15px] w-[575px] h-[360px] relative left-[-95px]"
        />
    </div>
</div>