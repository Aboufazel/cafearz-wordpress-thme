<div class="grid grid-cols-1 lg:grid-cols-2 mt-[90px] place-items-center lg:pb-[70px]">

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
        <p target="_blank" class="text-[12px] font-bold first-blue-text">
            <?php get_category_post(); ?>
        </p>

        <h1 class="lg:text-[25px] font-black blog-title">
            <?php the_title(); ?>
        </h1>

        <p class="text-[16px] data-color font-light">
            <?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?>
        </p>

        <a title="<?php the_title(); ?>"
           target="<?php echo custom_permalink_target($post->ID); ?>"
           href="<?php echo custom_permalink($post->ID); ?>" class="text-[16px] text-justify lg:mt-[17px] leading-[35px]">
            <?php the_excerpt();?>
        </a>

        <div class="flex flex-row items-center mt-[20px] lg:mt-[48px] w-full">
            <div class="flex items-center justify-start w-1/2">
                <div class="flex flex-row gap-[11px] items-center writer-pic">
                    <div class="rounded-[50%] flex items-center justify-center w-[54px] h-[54px]">
                        <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                    </div>
                    <div class="flex flex-col gap-[4px] justify-center">
                        <p class="lg:text-[16px] text-black text-[12px] font-bold">
                            <?php the_author_posts_link(); ?>
                        </p>
                        <p class="text-[12px]">نویسنده</p>
                    </div>
                </div>
            </div>
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