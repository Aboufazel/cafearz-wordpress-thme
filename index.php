<?php get_header(); ?>

<section id="blog-banner">
    <div class="container lg:mt-[120px] p-[20px] lg:p-[0] lg:w-[1200px] mx-auto">
        <div class="left-rectangle z-0 hidden lg:flex"></div>

        <div class="grid grid-cols-1 lg:grid-cols-2 place-items-center">

            <div class="flex lg:hidden justify-start w-full z-10">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/src/assets/img/blog-pic.png"
                    width="575px"
                    height="360px"
                    class="lg:mt-[48px] mt-[20px] lg:w-[85%] rounded-2xl relative lg:left-[-95px]"
                    alt="صرافی کافه ارز"
                />
            </div>


            <div class="flex flex-col gap-[12px] mt-5 lg:mt-0  items-start justify-center w-full z-10">
                <p class="text-[12px] font-bold first-blue-text">رمزارزها</p>

                <h1 class="lg:text-[25px] font-black blog-title">
                    مقایسه پنکیک سواپ و یونی سواپ؛ تفاوت دو صرافی غیرمتمرکز محبوب
                </h1>

                <p class="text-[16px] data-color font-light">16 بهمن 1401</p>

                <p class="text-[16px] text-justify lg:mt-[17px] leading-[35px]">
                    دو صرافی پنکیک سواپ و یونی سواپ، از محبوبترین پلتفرم‌‌های معاملاتی
                    غیرمتمرکز به شمار می‌روند که طرفداران زیادی در حوزه پرداخت ارزی به
                    خصوص ارزهای دیجیتال دارند. صرافی‌های غیرمتمرکز یکی از پدیده‌های نوظهور
                    در زمینه پرداخت‌ های ارزی است که مقوله خرید و فروش ارزهای دیجیتال را
                    به طور کلی متحول کرده است. از محبوبترین صرافی‌های غیرمتمرکز می‌توان به
                    سوشی سواپ، یونی سواپ و پنکیک سواپ اشاره کرد. یونی سواپ پرچمدار
                    صرافی‌های غیر متمرکز بر بستر بلاک‌ چین اتریوم است
                </p>

                <div class="flex flex-row items-center mt-[20px] lg:mt-[48px] w-full">
                    <div class="flex items-center justify-start w-1/2">
                        <div class="flex flex-row gap-[11px] items-center writer-pic">
                            <div class="rounded-[50%] bg-black w-[54px] h-[54px]"></div>
                            <div class="flex flex-col gap-[4px] justify-center">
                                <p class="lg:text-[16px] text-black text-[12px] font-bold">
                                    مهران رباطی
                                </p>
                                <p class="text-[12px]">نویسنده</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end w-1/2">
                        <p
                            class="read-duration-box font-bold text-[10px] lg:text-[14px] rounded-[9px]"
                        >
                            زمان مطالعه 6 دقیقه
                        </p>
                    </div>
                </div>
            </div>

            <div class="lg:flex hidden justify-start w-full z-10">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/src/assets/img/blog-pic.png"
                    width="575px"
                    height="360px"
                    class="lg:mt-[-25px] mt-[20px] rounded-[15px] shadow-xl lg:w-[85%] relative lg:left-[-95px]"
                    alt="صرافی کافه ارز"
                />
            </div>
        </div>
    </div>

    <div class="right-rectangle z-0 hidden lg:flex"></div>
</section>

<section id="selectBlog" class="container lg:w-[1200px] mx-auto">
    <div class="selectBlog mt-[105px]">
        <p class="selectBlog-title absolute text-[18px] top-[-12px] right-[140px]">
            FAVORATE NEWS
        </p>

        <div class="flex flex-row items-center justify-between px-[5px] lg:px-0">
            <div class="flex flex-row px-[5px] lg:px-0 gap-[9px] items-center">
                <div
                    class="flex flex-row mt-[21px] text-white pt-1 justify-center items-center text-[25px] sharp-icon"
                >
                    #
                </div>
                <p class="font-bold text-black text-[14px] lg:text-[18px] mt-[21px]">
                    منتخب سر دبیر
                </p>
            </div>
        </div>

    </div>

    <div class="flex flex-row items-center gap-[5px] mt-[67.2px]">
        <div class="selectBlog-rectangle"></div>

        <div class="grid grid-cols-1 lg:grid-cols-3 mx-auto">


            <?php
            $querystr = "
            SELECT $wpdb->posts.* 
            FROM $wpdb->posts, $wpdb->postmeta
            WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
            AND $wpdb->postmeta.meta_key = 'selected' 
            AND $wpdb->postmeta.meta_value = 1 
            AND $wpdb->posts.post_status = 'publish' 
            AND $wpdb->posts.post_type = 'post'
            ORDER BY $wpdb->posts.post_modified DESC
            LIMIT 3
         ";

            $pageposts = $wpdb->get_results($querystr, OBJECT);
            $selected_count= count($pageposts);
            $selected_counter=0;
            ?>

            <?php if ($pageposts): ?>
                <div class="row">
                    <?php foreach ($pageposts as $post): ?>

                        <?php if ($selected_count==1): ?>

                            <div class="col-md-12 col-sm-12 starc-img-box" >
                                <a  target="<?php echo  custom_permalink_target($post->ID); ?>"  title=" <?php the_title(); ?>" data-top-image="<?php the_post_thumbnail_url('large'); ?>" href="<?php echo  custom_permalink($post->ID); ?>" style="" class="blog-post bg-img">

                                    <h2 class="title">   <?php the_title(); ?></h2>
                                    <span class="mask"></span>

                                </a>
                                <?php get_category_post(); ?>

                            </div>

                        <?php else:; ?>

                            <div class="col-md-6 col-sm-6 col-xs-6 xs-540 starc-img-box" >

                                <a  target="<?php echo  custom_permalink_target($post->ID); ?>"  data-top-image="<?php the_post_thumbnail_url('large'); ?>"   title=" <?php the_title(); ?>" href="<?php echo  custom_permalink($post->ID); ?>" style="" class="blog-post bg-img">

                                    <h2 class="title">   <?php the_title(); ?></h2>
                                    <span class="mask"></span>
                                </a>
                                <?php get_category_post(); ?>

                            </div>

                        <?php endif; ?>

                        <?php
                        unset($pageposts[$selected_counter]);

                        $selected_counter++;
                        if($selected_counter==2)
                            break;
                        ?>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>

                </div>

                <?php if ($selected_count>5): ?>
                    <div class="row m-t-10">
                        <?php foreach ($pageposts as $post): ?>

                            <?php if ($selected_count>5): ?>

                                <div   class="col-md-3  col-sm-6 col-xs-6 xs-540 starc-img-box thumb">
                                    <a target="_blank" title=" <?php the_title(); ?>" href="<?php echo custom_permalink($post->ID); ?>"  data-top-image="<?php the_post_thumbnail_url('large'); ?>"   style="" class="blog-post bg-img">

                                        <h2 class="title">   <?php the_title(); ?></h2>
                                        <span class="mask"></span>

                                    </a>
                                    <?php get_category_post(); ?>

                                </div>


                            <?php endif; ?>


                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>

            <?php endif; ?>

        </div>
    </div>
</section>

<section id="bestArticle">
    <div class="container relative lg:w-[1200px] mx-auto">
        <a href="#bestArticle">
            <img
                src="<?php echo get_template_directory_uri(); ?>/src/assets/img/arrowButton.png"
                alt="کافه ارز"
                class="absolute hidden lg:block right-[44%] z-10 top-[45px]"
            />
        </a>

        <div class="selectBlog relative lg:pt-[120px]">
            <p
                class="text-hint absolute text-[18px] top-[-12px] lg:top-[107px] right-[140px]"
            >
                CAFEARZ BLOG
            </p>
            <div class="flex flex-row items-center justify-between px-[5px] lg:px-0">
                <div class="flex flex-row px-[5px] lg:px-0 gap-[9px] items-center">
                    <div
                        class="flex flex-row mt-[21px] text-white pt-1 justify-center items-center text-[25px] sharp-icon"
                    >
                        #
                    </div>
                    <p class="font-bold text-black text-[14px] lg:text-[18px] mt-[21px]">
                        برترین مطالب
                    </p>
                </div>

                <div
                    class="read-more-btn flex flex-row items-center mt-[21px] font-bold text-[12px] lg:text-[14px]"
                >
                    مشاهده همه
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center mt-[70px]">
            <div class="grid grid-cols-1 lg:grid-cols-4 mx-auto gap-[20px]">

                <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                    <div class="flex flex-col relative items-center">
                        <img
                            src="../assets/img/second-index-pic.png"
                            alt="شرکت های فعال در مناورس"
                            class="w-full lg:w-[100%] px-3"
                        />

                        <div
                            class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                        >
                            رمزارزها
                        </div>
                    </div>

                    <div
                        class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                    >
                        <h3 class="font-bold text-[14px] mt-[14px]">
                            شرکت‌ های فعال در متاورس کدامند؟
                        </h3>
                        <p
                            class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                        >
                            مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                            محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                            طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                        </p>
                        <div
                            class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                        >
                            <i class="fa-regular fa-calendar-days"></i>

                            <p>16 بهمن 1401</p>
                        </div>
                    </div>
                </a>

                <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                    <div class="flex flex-col relative items-center">
                        <img
                            src="../assets/img/second-index-pic.png"
                            alt="شرکت های فعال در مناورس"
                            class="w-full lg:w-[100%] px-3"
                        />

                        <div
                            class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                        >
                            رمزارزها
                        </div>
                    </div>

                    <div
                        class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                    >
                        <h3 class="font-bold text-[14px] mt-[14px]">
                            شرکت‌ های فعال در متاورس کدامند؟
                        </h3>
                        <p
                            class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                        >
                            مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                            محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                            طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                        </p>
                        <div
                            class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                        >
                            <i class="fa-regular fa-calendar-days"></i>

                            <p>16 بهمن 1401</p>
                        </div>
                    </div>
                </a>


                <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                    <div class="flex flex-col relative items-center">
                        <img
                            src="../assets/img/second-index-pic.png"
                            alt="شرکت های فعال در مناورس"
                            class="w-full lg:w-[100%] px-3"
                        />

                        <div
                            class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                        >
                            رمزارزها
                        </div>
                    </div>

                    <div
                        class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                    >
                        <h3 class="font-bold text-[14px] mt-[14px]">
                            شرکت‌ های فعال در متاورس کدامند؟
                        </h3>
                        <p
                            class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                        >
                            مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                            محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                            طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                        </p>
                        <div
                            class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                        >
                            <i class="fa-regular fa-calendar-days"></i>

                            <p>16 بهمن 1401</p>
                        </div>
                    </div>
                </a>

                <div
                    class="lg:flex lg:flex-col hidden relative text-right items-center"
                >
                    <div
                        class="instagramCard text-white p-[25px] flex flex-col items-center lg:w-[287px] lg:h-[413px] h-[25px]"
                    >
                        <img
                            src="../assets/img/instagram.png"
                            class="mt-[30px]"
                            alt="اینستاگرام کافه ارز"
                        />

                        <p class="text-[18px] font-bold mb-[9px] mt-[29px]">
                            اینستاگرام کافه ارز
                        </p>
                        <p class="text-[14px]">مطالب بروز در اینستاگرام کافه ارز</p>
                    </div>

                    <div
                        class="relative top-[-80px] w-full flex flex-row justify-center bg-white items-center mt-[21px] font-bold text-[14px]"
                    >
                        <button class="category-btn bg-white">کلیک کنید</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="newBlogPost">
    <div class="container relative lg:w-[1200px] mx-auto">
        <a href="#newBlogPost">
            <img
                src="<?php echo get_template_directory_uri(); ?>/src/assets/img/arrowButton.png"
                alt="کافه ارز"
                class="absolute hidden lg:block right-[44%] z-10 top-[45px]"
            />
        </a>

        <div class="selectBlog relative lg:pt-[120px]">
            <p
                class="text-hint absolute text-[18px] top-[-12px] lg:top-[107px] right-[140px]"
            >
                CAFEARZ BLOG
            </p>
            <div class="flex flex-row items-center justify-between px-[5px] lg:px-0">
                <div class="flex flex-row px-[5px] lg:px-0 gap-[9px] items-center">
                    <div
                        class="flex flex-row mt-[21px] text-white pt-1 justify-center items-center text-[25px] sharp-icon"
                    >
                        #
                    </div>
                    <p class="font-bold text-black text-[14px] lg:text-[18px] mt-[21px]">
                        برترین مطالب
                    </p>
                </div>

                <div
                    class="read-more-btn flex flex-row items-center mt-[21px] font-bold text-[12px] lg:text-[14px]"
                >
                    مشاهده همه
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-[20px] mt-[70px]">


            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>

            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>


            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>


            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>


            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>

            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>


            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>


            <a href="" class="flex flex-col mb-[32px] gap-[12px] items-center hover:translate-y-[-16px] transition">

                <div class="flex flex-col relative items-center">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/img/second-index-pic.png"
                        alt="شرکت های فعال در مناورس"
                        class="w-full lg:w-[100%] px-3"
                    />

                    <div
                        class="category-btn bottom-[-18px] left-[22px] bg-white flex flex-row items-center mt-[21px] font-bold text-[14px]"
                    >
                        رمزارزها
                    </div>
                </div>

                <div
                    class="flex w-[95%] gap-[12px] flex-col items-center lg:items-start"
                >
                    <h3 class="font-bold text-[14px] mt-[14px]">
                        شرکت‌ های فعال در متاورس کدامند؟
                    </h3>
                    <p
                        class="text-[14px] leading-6 text-blogDetail text-center lg:text-justify font-light w-[95%]"
                    >
                        مقایسه پنکیک سواپ و یونی سواپ: دو صرافی پنکیک سواپ و یونی سواپ، از
                        محبوبترین پلتفرم‌‌های معاملاتی غیرمتمرکز به شمار می‌روند که
                        طرفداران زیادی در حوزه پرداخت ارزی به خصوص ارزهای دیجیتال دارند.
                    </p>
                    <div
                        class="bg-dataBg px-[13px] py-[3px] gap-[6px] rounded-[25px] flex items-center"
                    >
                        <i class="fa-regular fa-calendar-days"></i>

                        <p>16 بهمن 1401</p>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>


<?php get_footer(); ?>
