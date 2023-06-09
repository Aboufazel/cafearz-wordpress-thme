<?php get_header('blog'); ?>
<?php if (have_posts()) : ?>
<?php
$GLOBALS['singleVarables'] = [
    'finishContent' => true,
    'changeHeader' => true,
];
?>
<?php while (have_posts()) :
the_post(); ?>
<?php setPostViews($post->ID); ?>


    <div class="hidden lg:flex lg:flex-row lg:gap-4 lg:justify-center">
        <div class="flex-1 lg:justify-end relative">
            <div id="shareSocial"
                 class="hidden lg:flex lg:flex-col transition duration-500 items-end gap-[20px] sticky top-[300px] left-0">

                <a title="instagram" href="https://www.instagram.com/cafearz_com" target="_blank"
                   class="hover:scale-105 transition-all">

                    <svg class="fill-[#b0bed6] hover:fill-[#FF7E0D]" id="instadetailSocial" width="35"
                         height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.5026 10.0237C13.3643 10.0237 10.0263 13.3617 10.0263 17.5C10.0263 21.6383 13.3643 24.9763 17.5026 24.9763C21.6409 24.9763 24.9789 21.6383 24.9789 17.5C24.9789 13.3617 21.6409 10.0237 17.5026 10.0237ZM17.5026 22.3606C14.8283 22.3606 12.642 20.1808 12.642 17.5C12.642 14.8192 14.8218 12.6394 17.5026 12.6394C20.1834 12.6394 22.3632 14.8192 22.3632 17.5C22.3632 20.1808 20.1769 22.3606 17.5026 22.3606ZM27.0285 9.71789C27.0285 10.6874 26.2477 11.4617 25.2847 11.4617C24.3152 11.4617 23.5409 10.6809 23.5409 9.71789C23.5409 8.75488 24.3217 7.97407 25.2847 7.97407C26.2477 7.97407 27.0285 8.75488 27.0285 9.71789ZM31.9802 11.4877C31.8696 9.1518 31.336 7.08264 29.6247 5.37786C27.92 3.67308 25.8508 3.13953 23.5149 3.0224C21.1074 2.88576 13.8913 2.88576 11.4838 3.0224C9.1544 3.13302 7.08524 3.66658 5.37395 5.37135C3.66267 7.07613 3.13562 9.14529 3.0185 11.4812C2.88185 13.8887 2.88185 21.1048 3.0185 23.5123C3.12911 25.8482 3.66267 27.9174 5.37395 29.6221C7.08524 31.3269 9.14789 31.8605 11.4838 31.9776C13.8913 32.1142 21.1074 32.1142 23.5149 31.9776C25.8508 31.867 27.92 31.3334 29.6247 29.6221C31.3295 27.9174 31.8631 25.8482 31.9802 23.5123C32.1168 21.1048 32.1168 13.8952 31.9802 11.4877ZM28.87 26.0955C28.3624 27.3708 27.3799 28.3533 26.0981 28.8674C24.1786 29.6287 19.6238 29.453 17.5026 29.453C15.3814 29.453 10.8201 29.6221 8.90714 28.8674C7.63181 28.3598 6.64928 27.3773 6.13525 26.0955C5.37395 24.176 5.54964 19.6212 5.54964 17.5C5.54964 15.3788 5.38046 10.8175 6.13525 8.90454C6.64278 7.62921 7.6253 6.64668 8.90714 6.13265C10.8266 5.37135 15.3814 5.54704 17.5026 5.54704C19.6238 5.54704 24.1851 5.37786 26.0981 6.13265C27.3734 6.64018 28.3559 7.6227 28.87 8.90454C29.6313 10.824 29.4556 15.3788 29.4556 17.5C29.4556 19.6212 29.6313 24.1825 28.87 26.0955Z"/>
                    </svg>

                </a>

                <a title="whatsApp" href="whatsapp://send?text=<?php the_permalink(); ?>" target="_blank"
                   class="hover:scale-105 transition-all">

                    <svg class="fill-[#b0bed6] hover:fill-[#4ade80]" id="whatsdetailSocial" width="35"
                         height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.7142 7.15479C24.9863 4.42041 21.3535 2.9165 17.4928 2.9165C9.52409 2.9165 3.03971 9.40088 3.03971 17.3696C3.03971 19.9152 3.70378 22.4022 4.9668 24.5962L2.91602 32.0832L10.5788 30.0715C12.6882 31.2238 15.0645 31.8293 17.4863 31.8293H17.4928C25.4551 31.8293 32.0827 25.3449 32.0827 17.3761C32.0827 13.5155 30.4421 9.88916 27.7142 7.15479ZM17.4928 29.3944C15.3314 29.3944 13.2155 28.8149 11.373 27.7212L10.9368 27.4608L6.39258 28.6522L7.60352 24.2186L7.31706 23.7629C6.11263 21.8488 5.48112 19.6418 5.48112 17.3696C5.48112 10.7485 10.8717 5.35791 17.4993 5.35791C20.709 5.35791 23.7233 6.60791 25.9889 8.88005C28.2546 11.1522 29.6478 14.1665 29.6413 17.3761C29.6413 24.0037 24.1139 29.3944 17.4928 29.3944ZM24.0814 20.397C23.7233 20.2147 21.946 19.3423 21.6139 19.2251C21.2819 19.1014 21.041 19.0428 20.8001 19.4074C20.5592 19.772 19.8691 20.5793 19.6543 20.8267C19.446 21.0675 19.2311 21.1001 18.873 20.9178C16.7507 19.8566 15.3574 19.0233 13.9577 16.6209C13.5866 15.9829 14.3288 16.0285 15.0189 14.6483C15.1361 14.4074 15.0775 14.1991 14.9863 14.0168C14.8952 13.8345 14.1725 12.0571 13.873 11.3345C13.5801 10.6313 13.2806 10.729 13.0592 10.716C12.8509 10.703 12.61 10.703 12.3691 10.703C12.1283 10.703 11.7376 10.7941 11.4056 11.1522C11.0736 11.5168 10.1426 12.3892 10.1426 14.1665C10.1426 15.9438 11.4382 17.6626 11.6139 17.9035C11.7962 18.1444 14.1595 21.7902 17.7858 23.3592C20.0775 24.3488 20.9759 24.4334 22.1217 24.2642C22.8184 24.16 24.2572 23.3918 24.5566 22.5454C24.8561 21.6991 24.8561 20.9764 24.765 20.8267C24.6803 20.6639 24.4395 20.5728 24.0814 20.397Z"/>
                    </svg>
                </a>

                <a title="telegram" href="https://t.me/share/url?url=<?php the_permalink(); ?>" target="_blank"
                   class="hover:scale-105 transition-all">

                    <svg class="fill-[#b0bed6] hover:fill-[#3b82f6]" width="30" height="26" viewBox="0 0 30 26"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.9145 2.29042L25.3873 23.6405C25.0458 25.1474 24.1551 25.5224 22.8893 24.8125L15.9914 19.7295L12.663 22.9307C12.2946 23.299 11.9866 23.6071 11.2767 23.6071L11.7723 16.5819L24.5569 5.02951C25.1128 4.53393 24.4363 4.25935 23.693 4.75493L7.888 14.7067L1.08382 12.5771C-0.396218 12.115 -0.423006 11.097 1.39189 10.3871L28.0059 0.133981C29.2381 -0.328114 30.3163 0.408558 29.9145 2.29042Z"/>
                    </svg>

                </a>

                <a title="twitter" href="http://www.twitter.com/share?url=<?php the_permalink(); ?>"
                   target="_blank"
                   class="hover:scale-105 transition-all">

                    <svg class="fill-[#b0bed6] hover:fill-[#3b82f6]" width="35" height="36" viewBox="0 0 35 36"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.0847 11.7186C29.1032 11.9777 29.1032 12.2368 29.1032 12.4959C29.1032 20.3983 23.0885 29.5037 12.0954 29.5037C8.70864 29.5037 5.5625 28.5228 2.91602 26.8202C3.39721 26.8757 3.85983 26.8942 4.35954 26.8942C7.15403 26.8942 9.72652 25.9504 11.7808 24.3403C9.15281 24.2847 6.95049 22.5636 6.1917 20.1947C6.56186 20.2502 6.93197 20.2872 7.32066 20.2872C7.85734 20.2872 8.39407 20.2132 8.89373 20.0837C6.15472 19.5285 4.1004 17.1226 4.1004 14.217V14.143C4.89617 14.5872 5.82159 14.8648 6.80238 14.9018C5.19228 13.8283 4.13743 11.9962 4.13743 9.92341C4.13743 8.81302 4.43349 7.79515 4.95171 6.90682C7.89431 10.5341 12.3175 12.903 17.2772 13.1621C17.1847 12.718 17.1292 12.2553 17.1292 11.7927C17.1292 8.4984 19.7942 5.81494 23.1069 5.81494C24.828 5.81494 26.3826 6.53671 27.4745 7.70264C28.8255 7.44355 30.1209 6.94384 31.2684 6.25911C30.8242 7.64715 29.8804 8.81308 28.6404 9.5533C29.8434 9.42382 31.0093 9.09062 32.0827 8.628C31.2685 9.81238 30.2506 10.8672 29.0847 11.7186Z"/>
                    </svg>

                </a>

                <a title="linkedIn"
                   href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"
                   target="_blank"
                   class="hover:scale-105 transition-all">

                    <svg class="fill-[#b0bed6] hover:fill-[#3b82f6]" width="35" height="36" viewBox="0 0 35 36"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.9994 3.07568H4.99284C3.84701 3.07568 2.91602 4.01969 2.91602 5.17855V30.1395C2.91602 31.2983 3.84701 32.2424 4.99284 32.2424H29.9994C31.1452 32.2424 32.0827 31.2983 32.0827 30.1395V5.17855C32.0827 4.01969 31.1452 3.07568 29.9994 3.07568ZM11.7311 28.0757H7.4082V14.1564H11.7376V28.0757H11.7311ZM9.56966 12.2554C8.18294 12.2554 7.06315 11.1291 7.06315 9.74886C7.06315 8.36865 8.18294 7.24235 9.56966 7.24235C10.9499 7.24235 12.0762 8.36865 12.0762 9.74886C12.0762 11.1356 10.9564 12.2554 9.56966 12.2554ZM27.9355 28.0757H23.6126V21.3049C23.6126 19.6903 23.5801 17.6134 21.3665 17.6134C19.1139 17.6134 18.7689 19.3713 18.7689 21.1877V28.0757H14.446V14.1564H18.5931V16.0575H18.6517C19.2311 14.9637 20.6439 13.8114 22.7467 13.8114C27.1217 13.8114 27.9355 16.6955 27.9355 20.4455V28.0757Z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex-1">
            <div id="content" class="container lg:w-[800px] mt-[15px] px-3 lg:mt-[40px] mx-auto">

                <div class="flex flex-row gap-[5px] items-center mb-[20px]">
                    <a href="<?php echo site_url(); ?>" class="text-blue lg:text-[14px] text-[12px] font-bold">وبلاگ</a>
                    <p>/</p>
                    <div class="text-blue lg:text-[14px] text-[12px] font-bold"><?php get_category_post(); ?></div>
                    <p>/</p>
                    <div
                        class="text-hint font-normal  lg:text-[14px] text-[12px] overflow-hidden max-w-[100px] lg:max-w-[250px] whitespace-nowrap text-ellipsis"
                    ><?php the_title(); ?></div>
                </div>

                <div id="blog-detail-text" class="relative">

                    <div class="container flex flex-col w-full lg:w-[750px] mx-auto">
                        <h1 class="font-bold text-black mt-3 lg:mt-0 mb-3 lg:mb-[30px] lg:text-[25px]">
                            <?php the_title(); ?>
                        </h1>
                        <div class="flex w-full items-center justify-center relative">
                            <div class="single-lazy-box">
                                <a href="<?php echo custom_permalink($post->ID); ?>"
                                   title="<?php the_title(); ?>"
                                   class="w-full"
                                   target="<?php echo custom_permalink_target($post->ID); ?>">
                                    <img class="rounded-[15px] w-full md:w-[750px] lg:w-[750px] shadow-xl"
                                         data-src="<?php the_post_thumbnail_url('large'); ?>"
                                         alt="<?php the_title(); ?>"/>

                                </a>
                            </div>
                        </div>

                        <div class="flex-col w-full">

                            <div class="flex flex-row items-center  mt-5 mb-3 justify-between w-full">
                                <div
                                    class="flex justify-center gap-[5px] items-center px-[18px] py-[8px] rounded-[25px] bg-dataBg w-auto"
                                >
                                    <svg class="w-[18px] h-[18px]">
                                        <use
                                            xlink:href="<?php echo get_template_directory_uri(); ?>/src/assets/svg/sprite.svg#calendar"></use>
                                    </svg>
                                    <p class="text-[12px] lg:text-[14px]">
                                        <?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?>
                                    </p>
                                </div>
                                <div
                                    class="bg-black font-bold text-[10px] text-white px-[30px] text-center lg:mt-0 py-[5px] w-auto rounded-[25px]"
                                >
                                    <?php get_category_post(); ?>
                                </div>
                            </div>



                            <div
                                class="display_post w-full detail-post text-justify text-[16px] mb-[32px]">
                                <?php the_content(); ?>
                            </div>

                            <div id="finish-content"></div>


                            <div class="bg-dataBg mt-[22px] mb-[32px] w-full h-[2px]"></div>

                            <div class="flex lg:flex-row flex-col gap-[20px] mb-[85px]">
                                <div class="flex flex-col lg:w-2/5">
                                    <p class="text-[14px] text-black font-semibold">نویسنده</p>

                                    <div
                                        class="bg-dataBg flex w-full items-center rounded-[10px] gap-[10px] flex-row px-[13px] mt-[20px] py-[17px]"
                                    >
                                        <b class="flex items-center justify-center rounded-[50%] w-[55px] h-[55px]">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                                        </b>
                                        <h3 class="flex flex-col gap-1 font-semibold text-[14px]">
                                            <?php the_author(); ?>
                                            <span class="font-normal text-[12px]"> نویسنده </span>
                                        </h3>
                                    </div>
                                </div>


                                <div class="lg:hidden flex flex-col items-center gap-[10px] justify-center lg:w-3/5">
                                    <p class="font-semibold text-[14px]">مطلب را به اشتراک بگذارید</p>
                                    <div class="flex flex-row w-full items-center gap-[10px] justify-center">
                                        <a title="instagram" href="https://www.instagram.com/cafearz_com" target="_blank"
                                           class="hover:scale-105 transition-all">

                                            <svg class="fill-[#989898] hover:fill-[#FF7E0D]" id="instadetailSocial" width="35"
                                                 height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.5026 10.0237C13.3643 10.0237 10.0263 13.3617 10.0263 17.5C10.0263 21.6383 13.3643 24.9763 17.5026 24.9763C21.6409 24.9763 24.9789 21.6383 24.9789 17.5C24.9789 13.3617 21.6409 10.0237 17.5026 10.0237ZM17.5026 22.3606C14.8283 22.3606 12.642 20.1808 12.642 17.5C12.642 14.8192 14.8218 12.6394 17.5026 12.6394C20.1834 12.6394 22.3632 14.8192 22.3632 17.5C22.3632 20.1808 20.1769 22.3606 17.5026 22.3606ZM27.0285 9.71789C27.0285 10.6874 26.2477 11.4617 25.2847 11.4617C24.3152 11.4617 23.5409 10.6809 23.5409 9.71789C23.5409 8.75488 24.3217 7.97407 25.2847 7.97407C26.2477 7.97407 27.0285 8.75488 27.0285 9.71789ZM31.9802 11.4877C31.8696 9.1518 31.336 7.08264 29.6247 5.37786C27.92 3.67308 25.8508 3.13953 23.5149 3.0224C21.1074 2.88576 13.8913 2.88576 11.4838 3.0224C9.1544 3.13302 7.08524 3.66658 5.37395 5.37135C3.66267 7.07613 3.13562 9.14529 3.0185 11.4812C2.88185 13.8887 2.88185 21.1048 3.0185 23.5123C3.12911 25.8482 3.66267 27.9174 5.37395 29.6221C7.08524 31.3269 9.14789 31.8605 11.4838 31.9776C13.8913 32.1142 21.1074 32.1142 23.5149 31.9776C25.8508 31.867 27.92 31.3334 29.6247 29.6221C31.3295 27.9174 31.8631 25.8482 31.9802 23.5123C32.1168 21.1048 32.1168 13.8952 31.9802 11.4877ZM28.87 26.0955C28.3624 27.3708 27.3799 28.3533 26.0981 28.8674C24.1786 29.6287 19.6238 29.453 17.5026 29.453C15.3814 29.453 10.8201 29.6221 8.90714 28.8674C7.63181 28.3598 6.64928 27.3773 6.13525 26.0955C5.37395 24.176 5.54964 19.6212 5.54964 17.5C5.54964 15.3788 5.38046 10.8175 6.13525 8.90454C6.64278 7.62921 7.6253 6.64668 8.90714 6.13265C10.8266 5.37135 15.3814 5.54704 17.5026 5.54704C19.6238 5.54704 24.1851 5.37786 26.0981 6.13265C27.3734 6.64018 28.3559 7.6227 28.87 8.90454C29.6313 10.824 29.4556 15.3788 29.4556 17.5C29.4556 19.6212 29.6313 24.1825 28.87 26.0955Z"/>
                                            </svg>

                                        </a>

                                        <a title="whatsApp" href="https://www.instagram.com/cafearz_com" target="_blank"
                                           class="hover:scale-105 transition-all">

                                            <svg class="fill-[#989898] hover:fill-[#4ade80]" id="whatsdetailSocial" width="35"
                                                 height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.7142 7.15479C24.9863 4.42041 21.3535 2.9165 17.4928 2.9165C9.52409 2.9165 3.03971 9.40088 3.03971 17.3696C3.03971 19.9152 3.70378 22.4022 4.9668 24.5962L2.91602 32.0832L10.5788 30.0715C12.6882 31.2238 15.0645 31.8293 17.4863 31.8293H17.4928C25.4551 31.8293 32.0827 25.3449 32.0827 17.3761C32.0827 13.5155 30.4421 9.88916 27.7142 7.15479ZM17.4928 29.3944C15.3314 29.3944 13.2155 28.8149 11.373 27.7212L10.9368 27.4608L6.39258 28.6522L7.60352 24.2186L7.31706 23.7629C6.11263 21.8488 5.48112 19.6418 5.48112 17.3696C5.48112 10.7485 10.8717 5.35791 17.4993 5.35791C20.709 5.35791 23.7233 6.60791 25.9889 8.88005C28.2546 11.1522 29.6478 14.1665 29.6413 17.3761C29.6413 24.0037 24.1139 29.3944 17.4928 29.3944ZM24.0814 20.397C23.7233 20.2147 21.946 19.3423 21.6139 19.2251C21.2819 19.1014 21.041 19.0428 20.8001 19.4074C20.5592 19.772 19.8691 20.5793 19.6543 20.8267C19.446 21.0675 19.2311 21.1001 18.873 20.9178C16.7507 19.8566 15.3574 19.0233 13.9577 16.6209C13.5866 15.9829 14.3288 16.0285 15.0189 14.6483C15.1361 14.4074 15.0775 14.1991 14.9863 14.0168C14.8952 13.8345 14.1725 12.0571 13.873 11.3345C13.5801 10.6313 13.2806 10.729 13.0592 10.716C12.8509 10.703 12.61 10.703 12.3691 10.703C12.1283 10.703 11.7376 10.7941 11.4056 11.1522C11.0736 11.5168 10.1426 12.3892 10.1426 14.1665C10.1426 15.9438 11.4382 17.6626 11.6139 17.9035C11.7962 18.1444 14.1595 21.7902 17.7858 23.3592C20.0775 24.3488 20.9759 24.4334 22.1217 24.2642C22.8184 24.16 24.2572 23.3918 24.5566 22.5454C24.8561 21.6991 24.8561 20.9764 24.765 20.8267C24.6803 20.6639 24.4395 20.5728 24.0814 20.397Z"/>
                                            </svg>
                                        </a>

                                        <a title="telegram" href="https://t.me/cafearzz" target="_blank"
                                           class="hover:scale-105 transition-all">

                                            <svg class="fill-[#989898] hover:fill-[#3b82f6]" width="30" height="26"
                                                 viewBox="0 0 30 26"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M29.9145 2.29042L25.3873 23.6405C25.0458 25.1474 24.1551 25.5224 22.8893 24.8125L15.9914 19.7295L12.663 22.9307C12.2946 23.299 11.9866 23.6071 11.2767 23.6071L11.7723 16.5819L24.5569 5.02951C25.1128 4.53393 24.4363 4.25935 23.693 4.75493L7.888 14.7067L1.08382 12.5771C-0.396218 12.115 -0.423006 11.097 1.39189 10.3871L28.0059 0.133981C29.2381 -0.328114 30.3163 0.408558 29.9145 2.29042Z"/>
                                            </svg>

                                        </a>

                                        <a title="twitter" href="http://www.twitter.com/share?url=<?php the_permalink(); ?>"
                                           target="_blank"
                                           class="hover:scale-105 transition-all">

                                            <svg class="fill-[#989898] hover:fill-[#3b82f6]" width="35" height="36"
                                                 viewBox="0 0 35 36"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M29.0847 11.7186C29.1032 11.9777 29.1032 12.2368 29.1032 12.4959C29.1032 20.3983 23.0885 29.5037 12.0954 29.5037C8.70864 29.5037 5.5625 28.5228 2.91602 26.8202C3.39721 26.8757 3.85983 26.8942 4.35954 26.8942C7.15403 26.8942 9.72652 25.9504 11.7808 24.3403C9.15281 24.2847 6.95049 22.5636 6.1917 20.1947C6.56186 20.2502 6.93197 20.2872 7.32066 20.2872C7.85734 20.2872 8.39407 20.2132 8.89373 20.0837C6.15472 19.5285 4.1004 17.1226 4.1004 14.217V14.143C4.89617 14.5872 5.82159 14.8648 6.80238 14.9018C5.19228 13.8283 4.13743 11.9962 4.13743 9.92341C4.13743 8.81302 4.43349 7.79515 4.95171 6.90682C7.89431 10.5341 12.3175 12.903 17.2772 13.1621C17.1847 12.718 17.1292 12.2553 17.1292 11.7927C17.1292 8.4984 19.7942 5.81494 23.1069 5.81494C24.828 5.81494 26.3826 6.53671 27.4745 7.70264C28.8255 7.44355 30.1209 6.94384 31.2684 6.25911C30.8242 7.64715 29.8804 8.81308 28.6404 9.5533C29.8434 9.42382 31.0093 9.09062 32.0827 8.628C31.2685 9.81238 30.2506 10.8672 29.0847 11.7186Z"/>
                                            </svg>

                                        </a>

                                        <a title="linkedIn"
                                           href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"
                                           target="_blank"
                                           class="hover:scale-105 transition-all">

                                            <svg class="fill-[#989898] hover:fill-[#3b82f6]" width="35" height="36"
                                                 viewBox="0 0 35 36"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M29.9994 3.07568H4.99284C3.84701 3.07568 2.91602 4.01969 2.91602 5.17855V30.1395C2.91602 31.2983 3.84701 32.2424 4.99284 32.2424H29.9994C31.1452 32.2424 32.0827 31.2983 32.0827 30.1395V5.17855C32.0827 4.01969 31.1452 3.07568 29.9994 3.07568ZM11.7311 28.0757H7.4082V14.1564H11.7376V28.0757H11.7311ZM9.56966 12.2554C8.18294 12.2554 7.06315 11.1291 7.06315 9.74886C7.06315 8.36865 8.18294 7.24235 9.56966 7.24235C10.9499 7.24235 12.0762 8.36865 12.0762 9.74886C12.0762 11.1356 10.9564 12.2554 9.56966 12.2554ZM27.9355 28.0757H23.6126V21.3049C23.6126 19.6903 23.5801 17.6134 21.3665 17.6134C19.1139 17.6134 18.7689 19.3713 18.7689 21.1877V28.0757H14.446V14.1564H18.5931V16.0575H18.6517C19.2311 14.9637 20.6439 13.8114 22.7467 13.8114C27.1217 13.8114 27.9355 16.6955 27.9355 20.4455V28.0757Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1"></div>
    </div>


    <div id="mobileContent" class="container lg:hidden mt-[15px] px-3 mx-auto">

        <div class="flex flex-row gap-[5px] items-center mb-3">
            <a href="<?php echo site_url(); ?>" class="text-blue lg:text-[14px] text-[12px] font-bold">وبلاگ</a>
            <p>/</p>
            <div class="text-blue lg:text-[14px] text-[12px] font-bold"><?php get_category_post(); ?></div>
            <p>/</p>
            <div
                class="text-hint font-normal  lg:text-[14px] text-[12px] overflow-hidden max-w-[100px] lg:max-w-[250px] whitespace-nowrap text-ellipsis"
            ><?php the_title(); ?></div>
        </div>

        <div id="blog-detail-text" class="relative">

            <div class="container flex flex-col w-full lg:w-[750px] mx-auto">
                <h1 class="font-bold text-black mt-3 text-[18px] lg:mt-0 mb-3 lg:mb-[30px] lg:text-[25px]">
                    <?php the_title(); ?>
                </h1>
                <div class="flex w-full items-center justify-center relative">
                    <div class="single-lazy-box">
                        <a href="<?php echo custom_permalink($post->ID); ?>"
                           title="<?php the_title(); ?>"
                           class="w-full"
                           target="<?php echo custom_permalink_target($post->ID); ?>">
                            <img class="rounded-[15px] w-full md:w-[750px] lg:w-[750px] shadow-xl"
                                 data-src="<?php the_post_thumbnail_url('large'); ?>"
                                 alt="<?php the_title(); ?>"/>

                        </a>
                    </div>
                </div>

                <div class="flex-col w-full">

                    <div class="flex flex-row items-center  mt-5 mb-3 justify-between w-full">
                        <div
                            class="flex justify-center gap-[5px] items-center px-[18px] py-[8px] rounded-[25px] bg-dataBg w-auto"
                        >
                            <svg class="w-[18px] h-[18px]">
                                <use
                                    xlink:href="<?php echo get_template_directory_uri(); ?>/src/assets/svg/sprite.svg#calendar"></use>
                            </svg>
                            <p class="text-[12px] lg:text-[14px]">
                                <?php shamsiDate(get_the_date('Y-m-d', $post->ID)); ?>
                            </p>
                        </div>
                        <div
                            class="bg-black font-bold text-[10px] text-white px-[30px] text-center lg:mt-0 py-[5px] w-auto rounded-[25px]"
                        >
                            <?php get_category_post(); ?>
                        </div>
                    </div>



                    <div
                        class="display_post w-full detail-post text-justify text-[16px] mb-[32px]">
                        <?php the_content(); ?>
                    </div>

                    <div id="finish-content"></div>


                    <div class="bg-dataBg mt-[22px] mb-[32px] w-full h-[2px]"></div>

                    <div class="flex lg:flex-row flex-col gap-[20px] mb-[85px]">
                        <div class="flex flex-col lg:w-2/5">
                            <p class="text-[14px] text-black font-semibold">نویسنده</p>

                            <div
                                class="bg-dataBg flex w-full items-center rounded-[10px] gap-[10px] flex-row px-[13px] mt-[20px] py-[17px]"
                            >
                                <b class="flex items-center justify-center rounded-[50%] w-[55px] h-[55px]">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                                </b>
                                <h3 class="flex flex-col gap-1 font-semibold text-[14px]">
                                    <?php the_author(); ?>
                                    <span class="font-normal text-[12px]"> نویسنده </span>
                                </h3>
                            </div>
                        </div>


                        <div class="lg:hidden flex flex-col items-center gap-[10px] justify-center lg:w-3/5">
                            <p class="font-semibold text-[14px]">مطلب را به اشتراک بگذارید</p>
                            <div class="flex flex-row w-full items-center gap-[10px] justify-center">
                                <a title="instagram" href="https://www.instagram.com/cafearz_com" target="_blank"
                                   class="hover:scale-105 transition-all">

                                    <svg class="fill-[#989898] hover:fill-[#FF7E0D]" id="instadetailSocial" width="35"
                                         height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5026 10.0237C13.3643 10.0237 10.0263 13.3617 10.0263 17.5C10.0263 21.6383 13.3643 24.9763 17.5026 24.9763C21.6409 24.9763 24.9789 21.6383 24.9789 17.5C24.9789 13.3617 21.6409 10.0237 17.5026 10.0237ZM17.5026 22.3606C14.8283 22.3606 12.642 20.1808 12.642 17.5C12.642 14.8192 14.8218 12.6394 17.5026 12.6394C20.1834 12.6394 22.3632 14.8192 22.3632 17.5C22.3632 20.1808 20.1769 22.3606 17.5026 22.3606ZM27.0285 9.71789C27.0285 10.6874 26.2477 11.4617 25.2847 11.4617C24.3152 11.4617 23.5409 10.6809 23.5409 9.71789C23.5409 8.75488 24.3217 7.97407 25.2847 7.97407C26.2477 7.97407 27.0285 8.75488 27.0285 9.71789ZM31.9802 11.4877C31.8696 9.1518 31.336 7.08264 29.6247 5.37786C27.92 3.67308 25.8508 3.13953 23.5149 3.0224C21.1074 2.88576 13.8913 2.88576 11.4838 3.0224C9.1544 3.13302 7.08524 3.66658 5.37395 5.37135C3.66267 7.07613 3.13562 9.14529 3.0185 11.4812C2.88185 13.8887 2.88185 21.1048 3.0185 23.5123C3.12911 25.8482 3.66267 27.9174 5.37395 29.6221C7.08524 31.3269 9.14789 31.8605 11.4838 31.9776C13.8913 32.1142 21.1074 32.1142 23.5149 31.9776C25.8508 31.867 27.92 31.3334 29.6247 29.6221C31.3295 27.9174 31.8631 25.8482 31.9802 23.5123C32.1168 21.1048 32.1168 13.8952 31.9802 11.4877ZM28.87 26.0955C28.3624 27.3708 27.3799 28.3533 26.0981 28.8674C24.1786 29.6287 19.6238 29.453 17.5026 29.453C15.3814 29.453 10.8201 29.6221 8.90714 28.8674C7.63181 28.3598 6.64928 27.3773 6.13525 26.0955C5.37395 24.176 5.54964 19.6212 5.54964 17.5C5.54964 15.3788 5.38046 10.8175 6.13525 8.90454C6.64278 7.62921 7.6253 6.64668 8.90714 6.13265C10.8266 5.37135 15.3814 5.54704 17.5026 5.54704C19.6238 5.54704 24.1851 5.37786 26.0981 6.13265C27.3734 6.64018 28.3559 7.6227 28.87 8.90454C29.6313 10.824 29.4556 15.3788 29.4556 17.5C29.4556 19.6212 29.6313 24.1825 28.87 26.0955Z"/>
                                    </svg>

                                </a>

                                <a title="whatsApp" href="https://www.instagram.com/cafearz_com" target="_blank"
                                   class="hover:scale-105 transition-all">

                                    <svg class="fill-[#989898] hover:fill-[#4ade80]" id="whatsdetailSocial" width="35"
                                         height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.7142 7.15479C24.9863 4.42041 21.3535 2.9165 17.4928 2.9165C9.52409 2.9165 3.03971 9.40088 3.03971 17.3696C3.03971 19.9152 3.70378 22.4022 4.9668 24.5962L2.91602 32.0832L10.5788 30.0715C12.6882 31.2238 15.0645 31.8293 17.4863 31.8293H17.4928C25.4551 31.8293 32.0827 25.3449 32.0827 17.3761C32.0827 13.5155 30.4421 9.88916 27.7142 7.15479ZM17.4928 29.3944C15.3314 29.3944 13.2155 28.8149 11.373 27.7212L10.9368 27.4608L6.39258 28.6522L7.60352 24.2186L7.31706 23.7629C6.11263 21.8488 5.48112 19.6418 5.48112 17.3696C5.48112 10.7485 10.8717 5.35791 17.4993 5.35791C20.709 5.35791 23.7233 6.60791 25.9889 8.88005C28.2546 11.1522 29.6478 14.1665 29.6413 17.3761C29.6413 24.0037 24.1139 29.3944 17.4928 29.3944ZM24.0814 20.397C23.7233 20.2147 21.946 19.3423 21.6139 19.2251C21.2819 19.1014 21.041 19.0428 20.8001 19.4074C20.5592 19.772 19.8691 20.5793 19.6543 20.8267C19.446 21.0675 19.2311 21.1001 18.873 20.9178C16.7507 19.8566 15.3574 19.0233 13.9577 16.6209C13.5866 15.9829 14.3288 16.0285 15.0189 14.6483C15.1361 14.4074 15.0775 14.1991 14.9863 14.0168C14.8952 13.8345 14.1725 12.0571 13.873 11.3345C13.5801 10.6313 13.2806 10.729 13.0592 10.716C12.8509 10.703 12.61 10.703 12.3691 10.703C12.1283 10.703 11.7376 10.7941 11.4056 11.1522C11.0736 11.5168 10.1426 12.3892 10.1426 14.1665C10.1426 15.9438 11.4382 17.6626 11.6139 17.9035C11.7962 18.1444 14.1595 21.7902 17.7858 23.3592C20.0775 24.3488 20.9759 24.4334 22.1217 24.2642C22.8184 24.16 24.2572 23.3918 24.5566 22.5454C24.8561 21.6991 24.8561 20.9764 24.765 20.8267C24.6803 20.6639 24.4395 20.5728 24.0814 20.397Z"/>
                                    </svg>
                                </a>

                                <a title="telegram" href="https://t.me/cafearzz" target="_blank"
                                   class="hover:scale-105 transition-all">

                                    <svg class="fill-[#989898] hover:fill-[#3b82f6]" width="30" height="26"
                                         viewBox="0 0 30 26"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.9145 2.29042L25.3873 23.6405C25.0458 25.1474 24.1551 25.5224 22.8893 24.8125L15.9914 19.7295L12.663 22.9307C12.2946 23.299 11.9866 23.6071 11.2767 23.6071L11.7723 16.5819L24.5569 5.02951C25.1128 4.53393 24.4363 4.25935 23.693 4.75493L7.888 14.7067L1.08382 12.5771C-0.396218 12.115 -0.423006 11.097 1.39189 10.3871L28.0059 0.133981C29.2381 -0.328114 30.3163 0.408558 29.9145 2.29042Z"/>
                                    </svg>

                                </a>

                                <a title="twitter" href="http://www.twitter.com/share?url=<?php the_permalink(); ?>"
                                   target="_blank"
                                   class="hover:scale-105 transition-all">

                                    <svg class="fill-[#989898] hover:fill-[#3b82f6]" width="35" height="36"
                                         viewBox="0 0 35 36"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.0847 11.7186C29.1032 11.9777 29.1032 12.2368 29.1032 12.4959C29.1032 20.3983 23.0885 29.5037 12.0954 29.5037C8.70864 29.5037 5.5625 28.5228 2.91602 26.8202C3.39721 26.8757 3.85983 26.8942 4.35954 26.8942C7.15403 26.8942 9.72652 25.9504 11.7808 24.3403C9.15281 24.2847 6.95049 22.5636 6.1917 20.1947C6.56186 20.2502 6.93197 20.2872 7.32066 20.2872C7.85734 20.2872 8.39407 20.2132 8.89373 20.0837C6.15472 19.5285 4.1004 17.1226 4.1004 14.217V14.143C4.89617 14.5872 5.82159 14.8648 6.80238 14.9018C5.19228 13.8283 4.13743 11.9962 4.13743 9.92341C4.13743 8.81302 4.43349 7.79515 4.95171 6.90682C7.89431 10.5341 12.3175 12.903 17.2772 13.1621C17.1847 12.718 17.1292 12.2553 17.1292 11.7927C17.1292 8.4984 19.7942 5.81494 23.1069 5.81494C24.828 5.81494 26.3826 6.53671 27.4745 7.70264C28.8255 7.44355 30.1209 6.94384 31.2684 6.25911C30.8242 7.64715 29.8804 8.81308 28.6404 9.5533C29.8434 9.42382 31.0093 9.09062 32.0827 8.628C31.2685 9.81238 30.2506 10.8672 29.0847 11.7186Z"/>
                                    </svg>

                                </a>

                                <a title="linkedIn"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"
                                   target="_blank"
                                   class="hover:scale-105 transition-all">

                                    <svg class="fill-[#989898] hover:fill-[#3b82f6]" width="35" height="36"
                                         viewBox="0 0 35 36"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M29.9994 3.07568H4.99284C3.84701 3.07568 2.91602 4.01969 2.91602 5.17855V30.1395C2.91602 31.2983 3.84701 32.2424 4.99284 32.2424H29.9994C31.1452 32.2424 32.0827 31.2983 32.0827 30.1395V5.17855C32.0827 4.01969 31.1452 3.07568 29.9994 3.07568ZM11.7311 28.0757H7.4082V14.1564H11.7376V28.0757H11.7311ZM9.56966 12.2554C8.18294 12.2554 7.06315 11.1291 7.06315 9.74886C7.06315 8.36865 8.18294 7.24235 9.56966 7.24235C10.9499 7.24235 12.0762 8.36865 12.0762 9.74886C12.0762 11.1356 10.9564 12.2554 9.56966 12.2554ZM27.9355 28.0757H23.6126V21.3049C23.6126 19.6903 23.5801 17.6134 21.3665 17.6134C19.1139 17.6134 18.7689 19.3713 18.7689 21.1877V28.0757H14.446V14.1564H18.5931V16.0575H18.6517C19.2311 14.9637 20.6439 13.8114 22.7467 13.8114C27.1217 13.8114 27.9355 16.6955 27.9355 20.4455V28.0757Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div id="other-blog">

    <div class="container lg:w-[950px] px-3 mx-auto">

        <div class="selectBlog relative lg:pt-[120px]">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-row px-[5px] lg:px-0 gap-[9px] items-center">
                    <div
                        class="flex flex-row mt-[21px] text-white pt-1 justify-center items-center text-[25px] sharp-icon"
                    >
                        #
                    </div>
                    <p class="font-bold text-black text-[14px] lg:text-[18px] mt-[21px]">
                        مطالب مرتبط
                    </p>
                </div>
            </div>
        </div>


        <div class="grid lg:grid-cols-3 grid-cols-1 gap-2 lg:gap-5 mt-3">

            <?php
            $categories = get_the_category($post->ID);
            $args = null;
            if ($categories) {
                $category_ids = array();
                foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args = array(
                    'category__in' => $category_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page' => 3, // Number of related posts that will be shown.
                    'ignore_sticky_posts' => 3
                );
            }

            if ($args) {

                $rel_posts = new WP_Query($args);
                if ($rel_posts->have_posts()) {
                    ?>

                    <?php while ($rel_posts->have_posts()) : $rel_posts->the_post(); ?>


                        <div class="lg:hidden">
                            <?php include "newLoop.php" ?>
                        </div>

                        <div class="hidden lg:block">
                            <?php include "Loop.php" ?>
                        </div>


                    <?php
                    endwhile;
                    ?>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>

</div>


<section id="comment-block">

    <div class="new-comment-block  mx-auto relative p-3 lg:p-0">
        <?php
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    </div>

</section>


<?php get_footer('blog'); ?>

