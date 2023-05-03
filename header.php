
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Expires" content="30" />

    <meta name="viewport" content="width=10, initial-scale=1">

    <link rel="stylesheet" media="all"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?v=3.91"  />
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon2.ico">

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>


    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Light.woff" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Light.woff2" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Regular.woff" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Regular.woff2" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Medium.woff2" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Medium.woff" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Bold.woff" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Bold.woff2" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Black.woff" crossorigin>
    <link rel="preload" as="font" href="https://cafearz.s3.ir-thr-at1.arvanstorage.com/IRANSansX-Black.woff2" crossorigin>
</head>

<body <?php body_class(); ?>
<div class="app-overlay"></div>
<script>
    window.App_URL_PANEL="https://app.cafearz.com";
    window.SITE_URL_PANEL="https://cafearz.com";
</script>

<header id="app-header" class=" app-header new-header">
    <div class="app-cont  d-flex justify-content-between align-items-center " >
        <div class="d-flex align-items-center">

            <div class=box-fast-access>

                <div class="box">
                    <svg class="menu" onclick="toggleSidebarMenu()">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#menu"></use>
                    </svg>

                    <svg class="fastmenu" width="21" height="21" viewBox="0 0 21 21" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.8" y="0.8" width="6.97143" height="6.97143" rx="2.2" stroke-width="1.6"/>
                        <rect x="0.8" y="12.3723" width="6.97143" height="6.97143" rx="2.2" stroke-width="1.6"/>
                        <rect x="12.3703" y="0.8" width="6.97143" height="6.97143" rx="2.2" stroke-width="1.6"/>
                        <rect x="12.3703" y="12.3723" width="6.97143" height="6.97143" rx="2.2" stroke-width="1.6"/>
                    </svg>

                </div>
                <div class="dropDown d-none d-md-block">
                    <div class="dropDownTitle">
                        منو دسترسی سریع
                    </div>
                    <div class="content">
                        <div class="d-flex align-items-center justify-content-between">

                            <a href="https://cafearz.com" class="fastAccessItem">
                                <div class="fastAccessItem__icon">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#home-2"></use>
                                    </svg>
                                </div>
                                <span>صفحه اصلی</span>

                            </a>

                            <a  href="https://cafearz.com/blog"  class="fastAccessItem">
                                <div class="fastAccessItem__icon">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#document-text"></use>
                                    </svg>
                                </div>
                                <span>اخبار مقالات </span>

                            </a>

                            <a  href="https://cafearz.com/terms"  class="fastAccessItem">
                                <div class="fastAccessItem__icon">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#message-text"></use>
                                    </svg>
                                </div>
                                <span>شریط و قوانین</span>

                            </a>


                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a  href="https://cafearz.com/faq"  class="fastAccessItem">
                                <div class="fastAccessItem__icon">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#message-question"></use>
                                    </svg>
                                </div>
                                <span>سوالات متداول</span>

                            </a>
                            <a  href="https://cafearz.com/about"  class="fastAccessItem">
                                <div class="fastAccessItem__icon">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#info-circle"></use>
                                    </svg>
                                </div>
                                <span>درباره ما</span>
                            </a>

                            <a  href="https://cafearz.com/contact"  class="fastAccessItem">
                                <div class="fastAccessItem__icon">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#call-calling"></use>
                                    </svg>
                                </div>
                                <span>ارتباط با ما</span>
                            </a>
                        </div>
                    </div>

                    <div class=footer>
                        <div class="content">
                            <div class="d-flex align-items-center justify-content-between">
                                <a  href="https://cafearz.com/prices/"  class="fastAccessItem">
                                    <span class="live"></span>
                                    <div class="fastAccessItem__icon">
                                        <svg>
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#bitcoin"></use>
                                        </svg>
                                    </div>
                                    <span>قیمت لحظه ای  </span>

                                </a>

                                <a href="https://cafearz.com/%D8%AE%D8%B1%DB%8C%D8%AF-%D9%88-%D9%81%D8%B1%D9%88%D8%B4-%D8%A7%D8%B1%D8%B2-%D8%AF%DB%8C%D8%AC%DB%8C%D8%AA%D8%A7%D9%84" class="fastAccessItem">
                                    <div class="fastAccessItem__icon">
                                        <svg>
                                            <use
                                                    xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#calculator"></use>
                                        </svg>
                                    </div>
                                    <span>ماشین حساب   </span>

                                </a>

                                <a href="https://cafearz.com/mobile-application" class="fastAccessItem">
                                    <div class="fastAccessItem__icon">
                                        <svg>
                                            <use
                                                    xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Import-Linear"></use>
                                        </svg>
                                    </div>
                                    <span> اپلیکیشن</span>

                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <a  href="https://cafearz.com">

                <img alt="کاقه ارز" class="site_logo" height="60"
                     src="<?php echo get_template_directory_uri(); ?>/images/2022/logo/logo.png"/>


                <img alt="کاقه ارز" class="arm_logo" height="40"
                     src="<?php echo get_template_directory_uri(); ?>/images/2022/logo/arm.png"/>
            </a>



            <div class="app-header-sidebar">
                <ul class="app-header-sidebar--menu">


                    <li class="d-block d-lg-none head">
                        <div class="d-flex align-items-center justify-content-between">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2022/logo/logo.png" height="50" alt="کافه ارز">

                            <div class="close " onclick="toggleSidebarMenu()">
                                <svg class="moon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#cancel"></use>
                                </svg>
                            </div>
                        </div>
                    </li>
                    <li class="d-block d-lg-none divider">

                    </li>
                    <li class="d-block d-lg-none">
                        <span class="headline">دسترسی سریع</span>
                    </li>
                    <li class="d-block d-lg-none">
                        <a href="/prices">
                            <svg class="svg">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#home-2"></use>
                            </svg>
                            قیمت لحظه ای ارزهای دیجیتال
                        </a>
                    </li>
                    <li class="d-block d-lg-none">
                        <a class="txt"
                           href="https://cafearz.com/%D8%AE%D8%B1%DB%8C%D8%AF-%D9%88-%D9%81%D8%B1%D9%88%D8%B4-%D8%A7%D8%B1%D8%B2-%D8%AF%DB%8C%D8%AC%DB%8C%D8%AA%D8%A7%D9%84">
                            <svg class="svg">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#calculator"></use>
                            </svg>
                            ماشین حساب ارز دیجیتال
                        </a>
                    </li>
                    <li class="d-block d-lg-none">
                        <a href="https://cafearz.com/blog">
                            <svg class="svg">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#document-text"></use>
                            </svg>
                            اخبار و مقالات
                        </a>
                    </li>
                    <li class="d-block d-lg-none divider">

                    </li>
                    <li class="d-block d-lg-none">
                        <span class="headline">خدمات کافه ارز</span>
                    </li>
                    <li class="">
                        <a class="ch-1">
                            <div>
                                <svg class="svg">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#bitcoin"></use>
                                </svg>
                                ارز دیجیتال
                                <span class="headerMenuLiDesc">crypto curreny</span>
                            </div>
                            <svg class="icon caret">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                            </svg>
                        </a>

                        <div class="submenu submneu-digital">
                            <div class="box box-with-cat">
                                <div class="cats">
                                    <div data-cat="cat" data-target="#hot" class="items cat active d-flex align-items-center">
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Flash"></use>
                                        </svg>
                                        <strong>محبوب ترین ها</strong>
                                    </div>
                                    <div data-cat="cat" data-target="#metaverse" class="items cat d-flex align-items-center"
                                    >
                                        <svg class="logo ns" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.0401 0.37105C12.5125 0.37105 11.3314 1.478 10.2299 2.88503C8.92403 1.14792 7.52119 0.39439 6.17723 0.374385H6.01443C3.12561 0.457741 0.635131 3.99866 0.666305 8.19641C0.86028 13.5111 5.94169 13.8645 8.63307 8.32645L10.0186 5.9925C11.5219 8.38645 13.7699 12.7409 16.1184 12.2941C22.3082 11.8374 18.4079 -0.432493 14.0401 0.37105ZM7.13325 7.44622C5.55375 9.81683 5.00647 10.3436 4.12666 10.3436C1.08197 10.1036 3.19143 1.45801 6.6206 2.38492C7.31337 2.6083 8.10312 3.32183 9.04527 4.55882V4.57882C7.85025 6.3326 7.13325 7.44622 7.13325 7.44622ZM16.1392 10.3436C15.2351 10.3436 14.8091 9.7635 13.1014 7.12615C12.8174 6.6727 12.4086 6.00585 12.0068 5.38903L11.6189 4.79222C11.4457 4.53215 11.2898 4.29543 11.1547 4.12538C14.0643 -0.675862 17.5385 3.23182 17.5281 8.26979C17.5212 9.57679 17.0709 10.3437 16.1322 10.3437L16.1392 10.3436Z" />
                                        </svg>

                                        <span>متاورس</span>
                                    </div>
                                    <div data-cat="cat" data-target="#defi" class="items cat d-flex align-items-center" >
                                        <svg class="logo ns" width="19" height="9" viewBox="0 0 19 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.957031 1.22119H3.11002C5.07903 1.22119 5.88102 2.33936 5.88102 4.84591C5.88102 7.51918 5.08766 8.76095 3.04678 8.76095H0.957031V1.22119ZM2.69609 7.45881H3.01803C3.82576 7.45881 4.06147 6.88392 4.06147 4.83154C4.06147 3.10685 3.84876 2.56357 3.02953 2.56357H2.69609V7.45881Z" />
                                            <path d="M8.32208 6.23611C8.32208 7.00072 8.39682 7.58711 8.9286 7.58711C9.40576 7.58711 9.47475 7.19331 9.5035 6.92598H11.1362C11.0931 7.31979 10.9206 8.872 8.9056 8.872C6.95383 8.872 6.63477 7.38015 6.63477 5.78481C6.63477 3.8043 7.42812 2.79248 8.93435 2.79248C10.659 2.79248 11.1678 3.96814 11.1678 5.59222V6.23323L8.32208 6.23611ZM9.47188 5.1553C9.47188 4.58041 9.44601 4.05438 8.91423 4.05438C8.38245 4.05438 8.33933 4.62927 8.33933 5.1553H9.47188Z" />
                                            <path d="M11.8944 1.22119H15.9762V2.63544H13.6134V4.25952H15.8296V5.66226H13.6134V8.76383H11.8887L11.8944 1.22119Z" />
                                            <path d="M16.6211 2.88958H18.3285V8.76501H16.6211V2.88958ZM16.6211 0.877441H18.3285V2.24857H16.6268L16.6211 0.877441Z" />
                                        </svg>

                                        <span>
                                          دیفای
                                      </span>
                                    </div>
                                    <div data-cat="cat" data-target="#stable" class="items cat d-flex align-items-center"
                                    >
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Tether"></use>
                                        </svg>
                                        <span>استیبل کوین ها</span>

                                    </div>
                                    <div data-cat="cat" data-target="#nft" class="items cat d-flex align-items-center">
                                        <svg class="logo ns" width="35" height="14" viewBox="0 0 35 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.40198 1.57246L8.43621 9.18361V1.50179C8.40528 1.1004 8.51906 0.701196 8.75696 0.376426C8.86426 0.25233 8.99825 0.154123 9.14889 0.0891595C9.29953 0.0241962 9.46291 -0.00583825 9.62681 0.00130611C9.79401 -0.0067757 9.96089 0.0227263 10.1152 0.0876435C10.2695 0.152561 10.4073 0.251241 10.5184 0.376426C10.7591 0.700023 10.8749 1.09963 10.8446 1.50179V11.6681C10.8446 12.8025 10.3752 13.3697 9.43653 13.3697C9.22012 13.3724 9.00491 13.3374 8.80045 13.2664C8.60008 13.1959 8.4154 13.087 8.2568 12.9457C8.08607 12.7908 7.93292 12.6176 7.80013 12.4292L7.37608 11.8258L2.4832 4.29616V11.8693C2.50399 12.2756 2.37213 12.6751 2.11352 12.9892C2.0038 13.1052 1.8723 13.1985 1.72652 13.2637C1.58075 13.3289 1.42356 13.3648 1.26392 13.3693C1.10429 13.3737 0.945339 13.3467 0.796148 13.2897C0.646956 13.2328 0.510445 13.147 0.394409 13.0373C0.376127 13.02 0.358395 13.0021 0.341212 12.9837C0.095561 12.6664 -0.0244471 12.2696 0.00414732 11.8693V1.89865C-0.00864476 1.56124 0.03923 1.22427 0.145496 0.90377C0.257099 0.638092 0.446661 0.412512 0.689149 0.256822C0.949173 0.0824908 1.25692 -0.00679118 1.56987 0.00130611C1.76397 -0.00604909 1.95742 0.0279545 2.13738 0.101063C2.31734 0.174172 2.4797 0.284715 2.61368 0.425355C2.7586 0.578874 2.8879 0.746417 2.99967 0.925515L3.40198 1.57246Z" />
                                            <path d="M21.4351 2.24194H16.2541V5.54735H20.6033C20.9251 5.52113 21.245 5.61615 21.5003 5.81374C21.5983 5.90496 21.6753 6.01637 21.726 6.14028C21.7767 6.26419 21.7999 6.39762 21.7939 6.53136C21.7999 6.6648 21.7762 6.79791 21.7245 6.92106C21.6727 7.04422 21.5943 7.15437 21.4949 7.24355C21.2403 7.43845 20.9231 7.53323 20.6033 7.50994H16.2541V11.7667C16.2891 12.1989 16.159 12.6283 15.8898 12.9682C15.6411 13.2169 15.3038 13.3566 14.952 13.3566C14.6003 13.3566 14.263 13.2169 14.0142 12.9682V12.9682C13.7456 12.628 13.6155 12.1988 13.65 11.7667V1.82876C13.6389 1.51391 13.6965 1.20043 13.8185 0.909992C13.9235 0.665889 14.1181 0.471321 14.3622 0.366338C14.6516 0.247879 14.9629 0.192286 15.2755 0.203243H21.4351C21.7687 0.176588 22.1002 0.275466 22.3647 0.480505C22.4653 0.572612 22.5445 0.685469 22.5971 0.811259C22.6497 0.937048 22.6743 1.07276 22.6692 1.209C22.6751 1.34695 22.651 1.48454 22.5984 1.61222C22.5458 1.7399 22.4661 1.8546 22.3647 1.94837C22.1026 2.15923 21.7708 2.264 21.4351 2.24194Z" />
                                            <path d="M33.003 2.38464H30.1489V11.7735C30.1838 12.2048 30.0558 12.6335 29.79 12.975C29.6717 13.1039 29.5268 13.2056 29.3654 13.2731C29.204 13.3407 29.0298 13.3725 28.855 13.3664C28.678 13.3723 28.5019 13.3399 28.3386 13.2714C28.1753 13.2029 28.0288 13.1 27.909 12.9696C27.6404 12.6294 27.5102 12.2002 27.5448 11.7681V2.38464H24.6797C24.3232 2.41318 23.9687 2.30859 23.6848 2.09107C23.5764 1.99244 23.491 1.8712 23.4346 1.73592C23.3783 1.60064 23.3523 1.45462 23.3586 1.30821C23.3513 1.15904 23.3778 1.01015 23.4361 0.872689C23.4945 0.735226 23.5832 0.61276 23.6957 0.514473C23.9777 0.301335 24.3271 0.197094 24.6797 0.2209H33.003C33.3655 0.191354 33.7261 0.297959 34.0142 0.519909C34.123 0.618499 34.209 0.739599 34.2663 0.874792C34.3236 1.00998 34.3507 1.15603 34.3459 1.30277C34.3516 1.45013 34.3243 1.5969 34.2659 1.73235C34.2076 1.86781 34.1198 1.98851 34.0088 2.08563C33.7211 2.30444 33.3635 2.41075 33.003 2.38464V2.38464Z" />
                                        </svg>

                                        <span>ان اف تی</span>

                                    </div>
                                </div>
                                <div class="contents">
                                    <div id="hot" class="content show">
                                        <div class="row ">
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/btc">
                                                    <i>خرید و فروش </i><span>بیت کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/eth">
                                                    <i>خرید و فروش </i><span>اتریوم</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/usdt">
                                                    <i>خرید و فروش </i><span>تتر</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/bnb">
                                                    <i>خرید و فروش </i><span>بایننس کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/iota">
                                                    <i>خرید و فروش </i><span>آیوتا</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ada">
                                                    <i>خرید و فروش </i><span>کاردانو</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/xrp">
                                                    <i>خرید و فروش </i><span>ریپل</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/doge">
                                                    <i>خرید و فروش </i><span>دوج کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/dot">
                                                    <i>خرید و فروش </i><span>پولکادات</span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class=" " href="https://cafearz.com/coin/avax">
                                                    <i>خرید و فروش </i><span>اولنج</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/trx">
                                                    <i>خرید و فروش </i><span>ترون</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/matic">
                                                    <i>خرید و فروش </i><span>پالیگان</span>
                                                </a>
                                                <a class=" " href="https://cafearz.com/coin/shib">
                                                    <i>خرید و فروش </i><span>شیبا</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/dai">
                                                    <i>خرید و فروش </i><span>دای</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/link">
                                                    <i>خرید و فروش </i><span>چین لینک</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/atom">
                                                    <i>خرید و فروش </i><span>کازموس</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/algo">
                                                    <i>خرید و فروش </i><span>الگورند</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/ltc">
                                                    <i>خرید و فروش </i><span>لایت کوین</span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/zec">
                                                    <i>خرید و فروش </i><span>زی کش</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/coin/theta">
                                                    <i>خرید و فروش </i><span>تتا</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/btc">
                                                    <i>خرید و فروش </i><span>مونرو</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/coin/usdc">
                                                    <i>خرید و فروش </i><span>یو اس دی کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/egld">
                                                    <i>خرید و فروش </i><span>الروند</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ftm">
                                                    <i>خرید و فروش </i><span>فانتوم</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/busd">
                                                    <i>خرید و فروش </i><span>بایننس یو اس دی</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/btc">
                                                    <i>خرید و فروش </i><span>آمپ</span>
                                                </a>

                                                <a class=" all" href="https://cafearz.com/prices">مشاهده همه </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="metaverse" class=" content">
                                        <div class="row ">
                                            <div class="col-lg-4 col-md-12">
                                                <a class=" " href="https://cafearz.com/coin/mana">
                                                    <i>خرید و فروش </i><span>دیسنترال لند</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/sand">
                                                    <i>خرید و فروش </i><span>سندباکس</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/axs">
                                                    <i>خرید و فروش </i><span>اکس اینفینیتی</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/theta">
                                                    <i>خرید و فروش </i><span>تتا</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/enj">
                                                    <i>خرید و فروش </i><span>انجین کوین</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/waxp">
                                                    <i>خرید و فروش </i><span>وکس</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/sushi">
                                                    <i>خرید و فروش </i><span>سوشی سواپ</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/ont">
                                                    <i>خرید و فروش </i><span>اونتولوژی</span>
                                                </a>
                                                <a class=" " href="https://cafearz.com/coin/ilv">
                                                    <i>خرید و فروش </i><span>ایلوویوم</span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">

                                                <a class=" " href="https://cafearz.com/coin/chr">
                                                    <i>خرید و فروش </i><span>کرومیا</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/pyr">
                                                    <i>خرید و فروش </i><span>ولکان فورجد</span>
                                                </a>
                                                <a class=" " href="https://cafearz.com/coin/pla">
                                                    <i>خرید و فروش </i><span>پلی دپ</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/ygg">
                                                    <i>خرید و فروش </i><span>یلد گیلد گیمز</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/uos">
                                                    <i>خرید و فروش </i><span>اولترا</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/alice">
                                                    <i>خرید و فروش </i><span>مای نیبر الیس</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/mbox">
                                                    <i>خرید و فروش </i><span>مو باکس</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/blok">
                                                    <i>خرید و فروش </i><span>بلاک تو پیا</span>
                                                </a>
                                                <a class=" " href="https://cafearz.com/coin/rmrk">
                                                    <i>خرید و فروش </i><span>آر ام آر کی</span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class=" " href="https://cafearz.com/coin/ghst">
                                                    <i>خرید و فروش </i><span>آوه گوچی</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/tlm">
                                                    <i>خرید و فروش </i><span>الین ورلدز</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/vra">
                                                    <i>خرید و فروش </i><span>وراسیتی</span>
                                                </a>
                                                <a class=" " href="https://cafearz.com/coin/tvk">
                                                    <i>خرید و فروش </i><span>ترا ویرچوا کانکت</span>
                                                </a>
                                                <a class=" " href="https://cafearz.com/coin/aury">
                                                    <i>خرید و فروش </i><span>بیت کوین</span>
                                                </a>
                                                <a class=" " href="https://cafearz.com/coin/ern">
                                                    <i>خرید و فروش </i><span>اترنیتی چین</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/high">
                                                    <i>خرید و فروش </i><span>های استریت</span>
                                                </a>

                                                <a class=" " href="https://cafearz.com/coin/trias">
                                                    <i>خرید و فروش </i><span>تریاس</span>
                                                </a>

                                                <a class="  all" href="https://cafearz.com/prices">مشاهده همه</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="defi" class=" content">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/luna">
                                                    <i>خرید و فروش </i><span>لونا</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/avax">
                                                    <i>خرید و فروش </i><span>بیت کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/dai">
                                                    <i>خرید و فروش </i><span>دای</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/link">
                                                    <i>خرید و فروش </i><span>چین لینک</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/uni">
                                                    <i>خرید و فروش </i><span>یونی سواپ</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ftm">
                                                    <i>خرید و فروش </i><span>فانتوم</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/xtz">
                                                    <i>خرید و فروش </i><span>تزوس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/aave">
                                                    <i>خرید و فروش </i><span>آوه</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/mkr">
                                                    <i>خرید و فروش </i><span>میکر</span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/cake">
                                                    <i>خرید و فروش </i><span>پنکیک سواپ</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/coin/grt">
                                                    <i>خرید و فروش </i><span>گراف</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/rune">
                                                    <i>خرید و فروش </i><span>ثور چین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/crv">
                                                    <i>خرید و فروش </i><span>کرو دائو توکن</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/bat">
                                                    <i>خرید و فروش </i><span>بت</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/cvx">
                                                    <i>خرید و فروش </i><span>کانوکس فایننس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/lrc">
                                                    <i>خرید و فروش </i><span>بیت کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/rose">
                                                    <i>خرید و فروش </i><span>آسیس نتورک</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/comp">
                                                    <i>خرید و فروش </i><span>کامپاوند</span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/yfi">
                                                    <i>خرید و فروش </i><span>یورن فایننس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/1inch">
                                                    <i>خرید و فروش </i><span>وان اینچ</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/coin/ankr">
                                                    <i>خرید و فروش </i><span>آنکر</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/snx">
                                                    <i>خرید و فروش </i><span>سینتیکس نتورک توکن</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/bnt">
                                                    <i>خرید و فروش </i><span>بنکور</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/gno">
                                                    <i>خرید و فروش </i><span>جنوسیس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/jst">
                                                    <i>خرید و فروش </i><span>جاست</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/zrx">
                                                    <i>خرید و فروش </i><span>زیرو ایکس</span>
                                                </a>

                                                <a class=" all" href="https://cafearz.com/prices">مشاهده همه</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="stable" class=" content">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/usdt">
                                                    <i>خرید و فروش </i><span>تتر</span>

                                                </a>

                                                <a class="" href="https://cafearz.com/coin/btc">
                                                    <i>خرید و فروش </i><span>یو اس دی کوین</span>

                                                </a>

                                                <a class="" href="https://cafearz.com/coin/busd">
                                                    <i>خرید و فروش </i><span>بایننس یو اس دی</span>

                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ust">
                                                    <i>خرید و فروش </i><span>ترا یو اس دی</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/dai">
                                                    <i>خرید و فروش </i><span>دای</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/tribe">
                                                    <i>خرید و فروش </i><span>ترایب</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/rsr">
                                                    <i>خرید و فروش </i><span>رزرو رایتس</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nft" class=" content">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/mana">
                                                    <i>خرید و فروش </i><span>دیسنترال لند</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/sand">
                                                    <i>خرید و فروش </i><span>سندباکس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/axs">
                                                    <i>خرید و فروش </i><span>اکسی اینفیتیتی</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/theta">
                                                    <i>خرید و فروش </i><span>تتا</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/xtz">
                                                    <i>خرید و فروش </i><span>تزوس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/gala">
                                                    <i>خرید و فروش </i><span>گالا</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/flow">
                                                    <i>خرید و فروش </i><span>فلو</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/enj">
                                                    <i>خرید و فروش </i><span>انجین کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/chz">
                                                    <i>خرید و فروش </i><span>چیلیز</span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/rose">
                                                    <i>خرید و فروش </i><span>آسیس نتورک</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/coin/waxp">
                                                    <i>خرید و فروش </i><span>وکس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/imx">
                                                    <i>خرید و فروش </i><span>ایمیو تیبل اکس</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/sushi">
                                                    <i>خرید و فروش </i><span>سوشی سواپ</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/sys">
                                                    <i>خرید و فروش </i><span>سیس کوین</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ckb">
                                                    <i>خرید و فروش </i><span>نروس نتورک</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ilv">
                                                    <i>خرید و فروش </i><span>ایلوویوم</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/chr">
                                                    <i>خرید و فروش </i><span>کرومیا</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/dgb">
                                                    <i>خرید و فروش </i><span> دیجی بایت </span>
                                                </a>


                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class="" href="https://cafearz.com/coin/pyr">
                                                    <i>خرید و فروش </i><span> ولکان فورجد </span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ygg">
                                                    <i>خرید و فروش </i><span> یلد گیلد گیمز </span>
                                                </a>
                                                <a class="" href="https://cafearz.com/coin/uos">
                                                    <i>خرید و فروش </i><span> اولترا </span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/super">
                                                    <i>خرید و فروش </i><span> سوپر فارم </span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/alice">
                                                    <i>خرید و فروش </i><span> مای نیبر آلیس </span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/fet">
                                                    <i>خرید و فروش </i><span> فچ ای آی </span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/ern">
                                                    <i>خرید و فروش </i><span> اترنیتی چین </span>
                                                </a>

                                                <a class="" href="https://cafearz.com/coin/mbox">
                                                    <i>خرید و فروش </i><span> موباکس </span>
                                                </a>

                                                <a class="all" href="https://cafearz.com/prices">مشاهده همه</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="the-mega-menu">
                        <a class="ch-1">

                            <div>
                                <svg class="svg">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#ShoppingCart"></use>
                                </svg>

                                پرداخت بین المللی
                                <span class="headerMenuLiDesc">international payment</span>
                            </div>

                            <svg class="icon caret">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                            </svg>

                        </a>
                        <div class="submenu submneu-payment ">
                            <div class="box box-with-cat payment">
                                <div class="cats ">
                                    <div data-cat="cat" data-target="#hosting" class="items cat active d-flex align-items-center">
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#cloud"></use>
                                        </svg>
                                        <strong> هاستینگ و دامنه</strong>
                                    </div>

                                    <div data-cat="cat" data-target="#azmon" class="items cat d-flex align-items-center"
                                    >
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Teacher"></use>
                                        </svg>
                                        <span>آزمون بین المللی</span>
                                    </div>
                                    <div data-cat="cat" data-target="#sefarat" class="items cat d-flex align-items-center">
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Courthouse-Linear"></use>
                                        </svg>
                                        <span>           سفارت و ویزا</span>



                                    </div>
                                    <div data-cat="cat" data-target="#buy-site" class="items cat d-flex align-items-center ">
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#ShoppingCart"></use>
                                        </svg>
                                        <span>خرید از سایت</span>


                                    </div>
                                    <div data-cat="cat" data-target="#charge-account" class="items cat d-flex align-items-center">
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Global"></use>
                                        </svg>
                                        <span>شارژ اکانت سایت ها</span>

                                    </div>
                                </div>
                                <div class="contents">
                                    <div id="hosting" class="content show">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a class="" href="https://cafearz.com/buy-hetzner-host">
                                                    <span>سایت Hetzner</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/buy-inmotion-host/">
                                                    <span>سایت InMotion</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/buy-godaddy-host">
                                                    <span>سایت GoDaDDy</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="" href="https://cafearz.com/buy-bluehost-host">
                                                    <span>سایت BlueHost</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/buy-name-com-host">
                                                    <span>سایت Name.com</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/buy-namecheap-domain">
                                                    <span>سایت NameCheap</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="" href="https://cafearz.com/buy-domain-com">
                                                    <span>سایت Domin.com</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/buy-host-onlinenic">
                                                    <span>سایت OnliNIC</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/buy-hostgator-host">
                                                    <span>سایت HostGator</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="azmon" class=" content">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a class="" href="https://cafearz.com/ilets-exam-payment">
                                                    <span>آزمون Ilets</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/toffel-exam-payment">
                                                    <span>آزمون Toffel</span>
                                                </a>

                                                <a class="" href="https://cafearz.com/pte-exam-payment">
                                                    <span>آزمون PTE</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="" href="https://cafearz.com/gre-exam-payment">
                                                    <span>آزمون GRE</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/magoosh-website">
                                                    <span>سایت Magoosh</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/wes-payments">
                                                    <span>ارزیابی مدارک سایت WES</span>
                                                </a>

                                            </div>
                                            <div class="col-lg-4">
                                                <a class="" href="https://cafearz.com/duolingo-exam">
                                                    <span>سایت Dolingo</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sefarat" class=" content">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a class="" href="https://cafearz.com/sevisfee-payments">
                                                    <span>سویس فی آمریکا</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>لاج استرالیا</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="" href="#">
                                                    <span>هزینه سفارت آمریکا</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>هزینه سفارت انگلیس</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="buy-site" class=" content">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a class="" href="#">
                                                    <span>سایت Amazon</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>سایت Terendiol</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>سایت Bershka</span>
                                                </a>

                                            </div>
                                            <div class="col-lg-4">


                                                <a class="" href="#">
                                                    <span>سایت Zara</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>سایت Ebay</span>
                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                    <div id="charge-account" class=" content">
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <a class="" href="https://cafearz.com/buy-spotify-account">
                                                    <span> خرید اکانت spotify</span>
                                                </a>
                                                <a class="" href="https://cafearz.com/soundcloud-premium">
                                                    <span> خرید اکانت SoundCloud</span>
                                                </a>
                                                <a class="" href="#">
                                                    <span>سایت FreePik</span>
                                                </a>

                                            </div>
                                            <div class="col-lg-4">
                                                <a class="" href="#">
                                                    <span>سایت Adobe Stock</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>سایت moz pro</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>سایت Code canyon</span>
                                                </a>

                                            </div>
                                            <div class="col-lg-4">
                                                <a class="" href="#">
                                                    <span>سایت theme forest</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>سایت Shuter Stock</span>
                                                </a>

                                                <a class="" href="#">
                                                    <span>سایت Graphic River</span>
                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="the-mega-menu arz-electronic">
                        <a class="ch-1">
                            <div>
                                <svg class="svg">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#paypal"></use>
                                </svg>
                                ارزهای الکترونیک
                                <span class="headerMenuLiDesc">digital currencies</span>
                            </div>

                            <svg class="icon caret">
                                <use
                                        xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"
                                ></use>
                            </svg>

                        </a>
                        <div class="submenu submneu-electronic ">
                            <div class="box box-with-cat electronic aside">
                                <div class="cats">
                                    <div data-cat="cat" data-target="#paypal" class="items cat active d-flex align-items-center">

                                        <svg class="logo nf" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7913 7.29183C19.7913 7.50016 19.7913 7.60433 19.7913 7.81266C19.6872 9.37516 18.958 10.7293 18.0205 11.6668C16.8747 12.8127 15.3122 13.5418 13.5413 13.5418H10.3122C9.79133 13.5418 9.37467 13.9585 9.2705 14.4793L8.43717 20.0002C8.333 20.4168 8.12467 20.7293 7.708 20.8335C7.60383 20.8335 7.49967 20.8335 7.3955 20.8335H5.41633C4.79133 20.8335 4.2705 20.3127 4.37467 19.5835L6.87467 4.68766C7.083 3.22933 8.43717 2.0835 9.8955 2.0835H14.583C17.4997 2.0835 19.7913 4.37516 19.7913 7.29183Z"  stroke-width="1.5" stroke-miterlimit="10"/>
                                            <path d="M21.8747 11.4583C21.8747 12.9167 21.2497 14.1667 20.3122 15.1042C19.3747 16.0417 18.1247 16.6667 16.6663 16.6667H14.4788C13.958 16.6667 13.5413 16.9792 13.4372 17.5L12.708 21.9792C12.6038 22.5 12.1872 22.8125 11.6663 22.8125H8.54133C7.91633 22.8125 7.3955 22.1875 7.49967 21.5625L7.708 20.8333C8.12467 20.7292 8.43717 20.4167 8.43717 20L9.2705 14.4792C9.37467 13.9583 9.79133 13.5417 10.3122 13.5417H13.5413C15.3122 13.5417 16.8747 12.8125 17.9163 11.6667C18.958 10.625 19.583 9.27083 19.6872 7.8125C21.0413 8.54167 21.8747 9.89583 21.8747 11.4583Z"  stroke-width="1.5" stroke-miterlimit="10"/>
                                        </svg>

                                        <strong> پی پال</strong>
                                    </div>
                                    <div data-cat="cat" data-target="#perfectmoney" class="items cat d-flex align-items-center">
                                        <svg class="logo ns" width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.61 2.12C5.61 2.47333 5.52667 2.80667 5.36 3.12C5.19333 3.43333 4.92667 3.69 4.56 3.89C4.19333 4.08333 3.72333 4.18 3.15 4.18H1.89V7H0.75V0.0499995H3.15C3.68333 0.0499995 4.13333 0.143333 4.5 0.329999C4.87333 0.51 5.15 0.756666 5.33 1.07C5.51667 1.38333 5.61 1.73333 5.61 2.12ZM3.15 3.25C3.58333 3.25 3.90667 3.15333 4.12 2.96C4.33333 2.76 4.44 2.48 4.44 2.12C4.44 1.36 4.01 0.979999 3.15 0.979999H1.89V3.25H3.15ZM14.0173 0.0499995V7H12.8773V2.24L10.7573 7H9.96727L7.83727 2.24V7H6.69727V0.0499995H7.92727L10.3673 5.5L12.7973 0.0499995H14.0173Z"/>
                                        </svg>

                                        <span>پرفکت مانی</span>

                                    </div>
                                    <div data-cat="cat" data-target="#payyer" class="items cat d-flex align-items-center">
                                        <svg class="logo ns"  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 35V8H17.7228C26.1386 8 29 10.9635 29 15.2439C29 22.8171 21.4258 23.8048 16.2079 24.1341V35H12ZM24.6238 15.2439C24.6238 12.9391 23.109 11.2927 16.2079 11.4573V20.5121C25.1287 20.8415 24.6238 16.2317 24.6238 15.2439Z" />
                                        </svg>


                                        <span>پایر</span>
                                    </div>
                                    <div data-cat="cat" data-target="#visamaster" class="items cat d-flex align-items-center">
                                        <svg  class="logo ns" width="16" height="5" viewBox="0 0 16 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.93283 4.92802H5.63672L6.4474 0.0878906H7.74344L6.93283 4.92802Z" />
                                            <path d="M11.6321 0.206064C11.3765 0.10813 10.971 0 10.4696 0C9.18966 0 8.28833 0.659048 8.2828 1.60129C8.27217 2.29647 8.92813 2.68259 9.41873 2.91439C9.92018 3.15125 10.0906 3.30585 10.0906 3.51697C10.0855 3.84123 9.68544 3.99069 9.31227 3.99069C8.79481 3.99069 8.51754 3.91363 8.09618 3.73323L7.92551 3.6559L7.74414 4.74241C8.04813 4.87613 8.60819 4.9948 9.18966 5C10.5496 5 11.435 4.35115 11.4455 3.34704C11.4507 2.79606 11.1043 2.37387 10.3576 2.02888C9.90423 1.80742 9.62661 1.65809 9.62661 1.4315C9.63193 1.2255 9.86142 1.01451 10.3731 1.01451C10.7945 1.00417 11.1041 1.10197 11.3386 1.19984L11.4559 1.25123L11.6321 0.206064V0.206064Z" />
                                            <path d="M13.3549 3.21334C13.4616 2.93528 13.8724 1.85911 13.8724 1.85911C13.867 1.86944 13.9789 1.57591 14.0429 1.39572L14.1335 1.81277C14.1335 1.81277 14.3789 2.97134 14.4322 3.21334C14.2297 3.21334 13.6109 3.21334 13.3549 3.21334ZM14.9548 0.0878906H13.9523C13.6431 0.0878906 13.4082 0.175353 13.2748 0.489478L11.3496 4.92795H12.7096C12.7096 4.92795 12.9335 4.33057 12.9816 4.20191C13.1308 4.20191 14.4538 4.20191 14.6457 4.20191C14.6829 4.37184 14.8004 4.92795 14.8004 4.92795H16.0004L14.9548 0.0878906V0.0878906Z" />
                                            <path d="M4.55546 0.0878906L3.28614 3.3884L3.14743 2.71902C2.91276 1.94664 2.17678 1.10746 1.35547 0.690204L2.51812 4.92289H3.88872L5.92599 0.0878906H4.55546V0.0878906Z" />
                                            <path d="M2.10665 0.0878906H0.0213336L0 0.185687C1.62668 0.587343 2.704 1.55552 3.14662 2.71922L2.69329 0.494748C2.61866 0.185619 2.38931 0.0980877 2.10665 0.0878906Z" />
                                        </svg>
                                        <span>ویزا مستر</span>
                                    </div>
                                    <div data-cat="cat" data-target="#webmoney" class="items cat d-flex align-items-center">
                                        <svg class="logo ns" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.96194 0C9.21021 0 10.3978 0.290404 11.4636 0.809885C11.6307 0.886455 11.7989 0.978097 11.9655 1.06982L11.2348 1.72712L10.1393 0.58089L8.2516 2.26183L7.13999 1.05435L3.66883 4.1874L5.89118 6.64791L5.0236 7.41185L7.21618 9.87237L6.34852 10.636L9.48485 14.1358L11.3411 12.424L12.9556 14.2584C12.6356 14.503 12.2855 14.748 11.9054 14.9616C10.7481 15.6187 9.40819 16 7.97732 16C3.57716 16 5.04247e-05 12.4094 5.04247e-05 7.99313C-0.0154883 3.60674 3.56226 0 7.96194 0ZM6.50019 7.50374L8.40327 5.79201L10.1087 7.70226L8.20526 9.41382L6.50019 7.50374ZM7.85551 10.8048L9.74311 9.07796L11.4636 10.9881L9.56042 12.6999L7.85551 10.8048ZM5.14605 4.24873L7.04857 2.537L8.75364 4.44725L6.85049 6.1589L5.14605 4.24873ZM8.63167 3.33149L10.0476 2.04784L11.3268 3.46916L9.91079 4.76798L8.63167 3.33149ZM11.1591 9.21522L12.5746 7.93149L13.8537 9.36765L12.4377 10.6522L11.1591 9.21522ZM12.4073 12.1039L13.8234 10.8199L15.1014 12.2412L13.6859 13.5398L12.4073 12.1039ZM12.986 5.5016L13.9297 4.6457L14.782 5.59356L13.8384 6.44915L12.986 5.5016ZM11.768 2.67435L12.7118 1.80344L13.5647 2.76607L12.6202 3.6219L11.768 2.67435ZM14.1885 8.32909L15.1323 7.47327L16 8.42081L15.0412 9.2764L14.1885 8.32909ZM9.94111 6.20477L11.3571 4.92103L12.6357 6.34204L11.2202 7.62601L9.94111 6.20477Z" />
                                        </svg>

                                        <span>وب مانی</span>
                                    </div>

                                </div>
                                <div class="contents">
                                    <div id="paypal" class="content show">
                                        <a href="https://cafearz.com/sell-buy-create-paypal">
                                            <span>  پی پال </span>
                                        </a>
                                        <a class="" href="https://cafearz.com/open-paypal-account">
                                            <span>افتتاح حساب پی پال</span>
                                        </a>
                                        <a class="" href="https://cafearz.com/charge-paypal-account">
                                            <span>شارژ حساب پی پال</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/buy-with-paypal">
                                            <span>خرید با پی پال</span>
                                        </a>
                                        <a class="" href="https://cafearz.com/visacard-for-paypal">
                                            <span>ویزا کارت مجازی برای پی پال</span>
                                        </a>
                                        <a class="" href="https://cafearz.com/paypal-exchange">
                                            <span>نقد کردن پی پال</span>
                                        </a>
                                    </div>
                                    <div id="perfectmoney" class=" content">
                                        <a class="" href="https://cafearz.com/buy-sell-perfectmoney-vouchers">
                                            <span>پرفکت مانی</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/open-perfectmoney-account">
                                            <span>افتتاح حساب پرفکت مانی</span>
                                        </a>
                                        <a class="" href="https://cafearz.com/charge-perfectmoney-account">
                                            <span>شارژ حساب پرفکت مانی</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/buy-with-perfectmoney">
                                            <span>خرید با پرفکت مانی</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/perfectmoney-voucher">
                                            <span>ووچر پرفکت مانی</span>
                                        </a>
                                    </div>
                                    <div id="webmoney" class=" content">
                                        <a class="" href="https://cafearz.com/sell-buy-webmoney">
                                            <span>وب مانی</span>
                                        </a>
                                        <a class="" href="https://cafearz.com/open-webmoney-account">
                                            <span>افتتاح حساب وب مانی</span>
                                        </a>
                                        <a class="" href="https://cafearz.com/charge-webmoney-account">
                                            <span>شارژ حساب وب مانی</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/buy-with-webmoney">
                                            <span>خرید با وب مانی</span>
                                        </a>
                                        <a class="" href=" https://cafearz.com/webmoney-exchange">
                                            <span>نقد کردن وب مانی</span>
                                        </a>

                                    </div>
                                    <div id="payyer" class=" content">
                                        <a class="" href="https://cafearz.com/payeer">
                                            <span>خرید با پایر | شارژ حساب پایر</span>
                                        </a>
                                    </div>
                                    <div id="visamaster" class=" content">
                                        <a class="" href="https://cafearz.com/visa-master-cart">
                                            <span>خرید با ویزا مستر کارت</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/visa-and-master-gift-cards">
                                            <span>گیفت کارت ویزا مستر</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/visa-and-master-virtual-card">
                                            <span>صدور ویزا مستر کارت مجازی</span>
                                        </a>

                                        <a class="" href="https://cafearz.com/american-express-giftcard">
                                            <span>گیفت کارت American Express</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="the-mega-menu gift-card-menu">
                        <a href="#" class="ch-1">
                            <div>
                                <svg class="svg">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Gift"></use>
                                </svg>
                                گیفت کارت
                                <span class="headerMenuLiDesc">giftcards</span>
                            </div>

                            <svg class="icon caret">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                            </svg>
                        </a>
                        <div class="submenu submneu-gift">
                            <div class="box box-with-cat gift">
                                <div class="cats">
                                    <div data-cat="cat" data-target="#gift-game"
                                         class="items cat active d-flex align-items-center">
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Gift"></use>
                                        </svg>

                                        <strong> گیفت کارت بازی</strong>
                                    </div>
                                    <div data-cat="cat" data-target="#playstation" class="items cat d-flex align-items-center">
                                        <svg class="logo">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#Game"></use>
                                        </svg>
                                        <span>گیفت کارت اپلیکیشن</span>
                                    </div>
                                    <div data-cat="cat" data-target="#visamaster_gift" class="items cat d-flex align-items-center">
                                        <svg  class="logo ns" width="16" height="5" viewBox="0 0 16 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.93283 4.92802H5.63672L6.4474 0.0878906H7.74344L6.93283 4.92802Z" />
                                            <path d="M11.6321 0.206064C11.3765 0.10813 10.971 0 10.4696 0C9.18966 0 8.28833 0.659048 8.2828 1.60129C8.27217 2.29647 8.92813 2.68259 9.41873 2.91439C9.92018 3.15125 10.0906 3.30585 10.0906 3.51697C10.0855 3.84123 9.68544 3.99069 9.31227 3.99069C8.79481 3.99069 8.51754 3.91363 8.09618 3.73323L7.92551 3.6559L7.74414 4.74241C8.04813 4.87613 8.60819 4.9948 9.18966 5C10.5496 5 11.435 4.35115 11.4455 3.34704C11.4507 2.79606 11.1043 2.37387 10.3576 2.02888C9.90423 1.80742 9.62661 1.65809 9.62661 1.4315C9.63193 1.2255 9.86142 1.01451 10.3731 1.01451C10.7945 1.00417 11.1041 1.10197 11.3386 1.19984L11.4559 1.25123L11.6321 0.206064V0.206064Z" />
                                            <path d="M13.3549 3.21334C13.4616 2.93528 13.8724 1.85911 13.8724 1.85911C13.867 1.86944 13.9789 1.57591 14.0429 1.39572L14.1335 1.81277C14.1335 1.81277 14.3789 2.97134 14.4322 3.21334C14.2297 3.21334 13.6109 3.21334 13.3549 3.21334ZM14.9548 0.0878906H13.9523C13.6431 0.0878906 13.4082 0.175353 13.2748 0.489478L11.3496 4.92795H12.7096C12.7096 4.92795 12.9335 4.33057 12.9816 4.20191C13.1308 4.20191 14.4538 4.20191 14.6457 4.20191C14.6829 4.37184 14.8004 4.92795 14.8004 4.92795H16.0004L14.9548 0.0878906V0.0878906Z" />
                                            <path d="M4.55546 0.0878906L3.28614 3.3884L3.14743 2.71902C2.91276 1.94664 2.17678 1.10746 1.35547 0.690204L2.51812 4.92289H3.88872L5.92599 0.0878906H4.55546V0.0878906Z" />
                                            <path d="M2.10665 0.0878906H0.0213336L0 0.185687C1.62668 0.587343 2.704 1.55552 3.14662 2.71922L2.69329 0.494748C2.61866 0.185619 2.38931 0.0980877 2.10665 0.0878906Z" />
                                        </svg>
                                        <span>
                                         کارت های ویزا مستر
                        </span>
                                    </div>
                                </div>
                                <div class="contents">
                                    <div id="gift-game" class="content show">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/22/steam-giftcard">
                                                    <span> گیفت کارت استیم</span>
                                                </a>
                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/40/razor-giftcard">
                                                    <span> گیفت کارت ریزرگلد</span>
                                                </a>
                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/269/nintendo">
                                                    <span> گیفت کارت نینتندو</span>

                                                </a>
                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/137/free-fire">
                                                    <span> گیفت کارت الماس فری فایر</span>

                                                </a>
                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/23/ituns-giftcard">
                                                    <span> گیفت کارت آیتونز </span>
                                                </a>


                                            </div>
                                            <div class="col-lg-6">
                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/42/gift-uc-pubg">
                                                    <span> گیفت کارت پابجی</span>
                                                </a>

                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/294/riot-access">
                                                    <span> گیفت کارت ریوت اکسس</span>
                                                </a>
                                                <a class=" menu-info-txt"
                                                   href="https://cafearz.com/giftcard/293/league-of-legends">
                                                    <span> گیفت کارت لیگ آف لجندز</span>
                                                </a>
                                                <a class="menu-info-txt"
                                                   href="https://cafearz.com/giftcard/21/playstation-gitcard">
                                                    <span> گیفت کارت پلی استیشن</span>
                                                </a>
                                                <a class="menu-info-txt"
                                                   href="https://cafearz.com/giftcard/25/xbox-giftcard">
                                                    <span>گیفت کارت اکس باکس</span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="playstation" class=" content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a class=""
                                                   href="https://cafearz.com/giftcard/23/ituns-giftcard">
                                                    <span> گیفت کارت آی تونز</span>

                                                </a>


                                                <a class=""
                                                   href="https://cafearz.com/giftcard/20/amazoon-giftcard">
                                                    <span> گیفت کارت آمازون </span>
                                                </a>

                                                <a class=""
                                                   href="https://cafearz.com/giftcard/26/spotify-giftcards">
                                                    <span> گیفت کارت اسپاتیفای</span>
                                                </a>

                                                <a class=""
                                                   href="https://cafearz.com/giftcard/24/google-play-giftcadr">
                                                    <span> گیفت کارت گوگل پلی</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a class=""
                                                   href="https://cafearz.com/giftcard/292/skype-giftcard">
                                                    <span> گیفت کارت اسکایپ</span>

                                                </a>

                                                <a class=""
                                                   href="https://cafearz.com/giftcard/322/netflix">
                                                    <span> گیفت کارت نتفلیکس</span>

                                                </a>

                                                <a class=""
                                                   href="https://cafearz.com/giftcard/320/ebay-gift">
                                                    <span> گیفت کارت ای بی </span>

                                                </a>

                                            </div>


                                        </div>
                                    </div>
                                    <div id="visamaster_gift" class=" content">
                                        <a class="" href="https://app.cafearz.com/orders/s/new/138">
                                            <span> گیفت کارت ویزا مستر </span>
                                        </a>

                                        <a class="" href="https://app.cafearz.com/orders/s/new/242">
                                            <span>صدور ویزا مستر مجازی</span>
                                        </a>

                                        <a class="" href="https://app.cafearz.com/orders/s/new/241">
                                            <span> گیفت کارت American Express </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <svg class="svg">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#dollar"></use>
                                </svg>
                                نقد درآمد ارزی
                                <span class="headerMenuLiDesc">income cash</span>
                            </div>
                            <svg class="icon caret">
                                <use
                                        xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"
                                ></use>
                            </svg>
                        </a>
                        <div class="submenu">
                            <div class="box withoutcat ">
                                <a href="https://cafearz.com/sell-buy-create-paypal">
                    <span class="items d-flex align-items-center" style="">
                      <span class="icon">
                        <svg class="icon nf" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7913 7.29183C19.7913 7.50016 19.7913 7.60433 19.7913 7.81266C19.6872 9.37516 18.958 10.7293 18.0205 11.6668C16.8747 12.8127 15.3122 13.5418 13.5413 13.5418H10.3122C9.79133 13.5418 9.37467 13.9585 9.2705 14.4793L8.43717 20.0002C8.333 20.4168 8.12467 20.7293 7.708 20.8335C7.60383 20.8335 7.49967 20.8335 7.3955 20.8335H5.41633C4.79133 20.8335 4.2705 20.3127 4.37467 19.5835L6.87467 4.68766C7.083 3.22933 8.43717 2.0835 9.8955 2.0835H14.583C17.4997 2.0835 19.7913 4.37516 19.7913 7.29183Z"  stroke-width="1.5" stroke-miterlimit="10"/>
                            <path d="M21.8747 11.4583C21.8747 12.9167 21.2497 14.1667 20.3122 15.1042C19.3747 16.0417 18.1247 16.6667 16.6663 16.6667H14.4788C13.958 16.6667 13.5413 16.9792 13.4372 17.5L12.708 21.9792C12.6038 22.5 12.1872 22.8125 11.6663 22.8125H8.54133C7.91633 22.8125 7.3955 22.1875 7.49967 21.5625L7.708 20.8333C8.12467 20.7292 8.43717 20.4167 8.43717 20L9.2705 14.4792C9.37467 13.9583 9.79133 13.5417 10.3122 13.5417H13.5413C15.3122 13.5417 16.8747 12.8125 17.9163 11.6667C18.958 10.625 19.583 9.27083 19.6872 7.8125C21.0413 8.54167 21.8747 9.89583 21.8747 11.4583Z"  stroke-width="1.5" stroke-miterlimit="10"/>
                        </svg>
                      </span>

                      <span>
                        <div>نقد درآمد از پی پال</div>
                      </span>
                      <span class="arrow-left">
                        <svg class="icon">
                          <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                        </svg>
                      </span>
                    </span>
                                </a>
                                <a href="https://cafearz.com/buy-sell-perfectmoney-vouchers">
                    <span class="items d-flex align-items-center" style="">
                      <span class="icon">
                            <svg class="ns" width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.61 2.12C5.61 2.47333 5.52667 2.80667 5.36 3.12C5.19333 3.43333 4.92667 3.69 4.56 3.89C4.19333 4.08333 3.72333 4.18 3.15 4.18H1.89V7H0.75V0.0499995H3.15C3.68333 0.0499995 4.13333 0.143333 4.5 0.329999C4.87333 0.51 5.15 0.756666 5.33 1.07C5.51667 1.38333 5.61 1.73333 5.61 2.12ZM3.15 3.25C3.58333 3.25 3.90667 3.15333 4.12 2.96C4.33333 2.76 4.44 2.48 4.44 2.12C4.44 1.36 4.01 0.979999 3.15 0.979999H1.89V3.25H3.15ZM14.0173 0.0499995V7H12.8773V2.24L10.7573 7H9.96727L7.83727 2.24V7H6.69727V0.0499995H7.92727L10.3673 5.5L12.7973 0.0499995H14.0173Z"/>
                        </svg>
                      </span>
                      <span>
                        <div>فروش پرفکت مانی</div>
                      </span>
                      <span class="arrow-left">
                        <svg class="icon">
                          <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                        </svg>
                      </span>
                    </span>
                                </a>
                                <a href="https://cafearz.com/sell-buy-webmoney">
                    <span class="items d-flex align-items-center" style="">
                      <span class="icon">
                               <svg class="ns" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.96194 0C9.21021 0 10.3978 0.290404 11.4636 0.809885C11.6307 0.886455 11.7989 0.978097 11.9655 1.06982L11.2348 1.72712L10.1393 0.58089L8.2516 2.26183L7.13999 1.05435L3.66883 4.1874L5.89118 6.64791L5.0236 7.41185L7.21618 9.87237L6.34852 10.636L9.48485 14.1358L11.3411 12.424L12.9556 14.2584C12.6356 14.503 12.2855 14.748 11.9054 14.9616C10.7481 15.6187 9.40819 16 7.97732 16C3.57716 16 5.04247e-05 12.4094 5.04247e-05 7.99313C-0.0154883 3.60674 3.56226 0 7.96194 0ZM6.50019 7.50374L8.40327 5.79201L10.1087 7.70226L8.20526 9.41382L6.50019 7.50374ZM7.85551 10.8048L9.74311 9.07796L11.4636 10.9881L9.56042 12.6999L7.85551 10.8048ZM5.14605 4.24873L7.04857 2.537L8.75364 4.44725L6.85049 6.1589L5.14605 4.24873ZM8.63167 3.33149L10.0476 2.04784L11.3268 3.46916L9.91079 4.76798L8.63167 3.33149ZM11.1591 9.21522L12.5746 7.93149L13.8537 9.36765L12.4377 10.6522L11.1591 9.21522ZM12.4073 12.1039L13.8234 10.8199L15.1014 12.2412L13.6859 13.5398L12.4073 12.1039ZM12.986 5.5016L13.9297 4.6457L14.782 5.59356L13.8384 6.44915L12.986 5.5016ZM11.768 2.67435L12.7118 1.80344L13.5647 2.76607L12.6202 3.6219L11.768 2.67435ZM14.1885 8.32909L15.1323 7.47327L16 8.42081L15.0412 9.2764L14.1885 8.32909ZM9.94111 6.20477L11.3571 4.92103L12.6357 6.34204L11.2202 7.62601L9.94111 6.20477Z" />
                        </svg>
                      </span>
                      <span>
                        <div>فروش وب مانی</div>
                      </span>
                      <span class="arrow-left">
                        <svg class="icon">
                          <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                        </svg>
                      </span>
                    </span>
                                </a>
                                <a href="https://cafearz.com/payeer">
                    <span class="items d-flex align-items-center" style="">
                      <span class="icon">
                        <svg class="ns"  width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 35V8H17.7228C26.1386 8 29 10.9635 29 15.2439C29 22.8171 21.4258 23.8048 16.2079 24.1341V35H12ZM24.6238 15.2439C24.6238 12.9391 23.109 11.2927 16.2079 11.4573V20.5121C25.1287 20.8415 24.6238 16.2317 24.6238 15.2439Z" />
                        </svg>
                      </span>
                      <span>
                        <div>فروش پایر</div>
                      </span>
                      <span class="arrow-left">
                        <svg class="icon">
                          <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                        </svg>
                      </span>
                    </span>
                                </a>
                                <a href="https://cafearz.com/%D8%AE%D8%B1%DB%8C%D8%AF-%D9%88-%D9%81%D8%B1%D9%88%D8%B4-%D8%A7%D8%B1%D8%B2-%D8%AF%DB%8C%D8%AC%DB%8C%D8%AA%D8%A7%D9%84">
                    <span class="items d-flex align-items-center" style="">
                      <span class="icon">
 <svg >
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#bitcoin"></use>
                        </svg>                      </span>
                      <span>
                        <div>فروش ارز دیجیتال</div>
                      </span>
                      <span class="arrow-left">
                        <svg class="icon">
                          <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#caret-down"></use>
                        </svg>
                      </span>
                    </span>
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
        
        <div class="buttons">
            <a href="https://trc.metrix.ir/aa4jup/" class="download">
                <svg  width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.47141 10.04C6.54141 10.11 6.6214 10.16 6.7114 10.2C6.8014 10.24 6.90141 10.26 7.00141 10.26C7.1014 10.26 7.19141 10.24 7.29141 10.2C7.38141 10.16 7.4614 10.11 7.5314 10.04L10.5314 7.04001C10.8214 6.75001 10.8214 6.27001 10.5314 5.98001C10.2414 5.69001 9.76141 5.69001 9.47141 5.98001L7.75141 7.7V1.51001C7.75141 1.10001 7.41141 0.76001 7.00141 0.76001C6.5914 0.76001 6.25141 1.10001 6.25141 1.51001V7.7L4.5314 5.98001C4.2414 5.69001 3.76141 5.69001 3.47141 5.98001C3.18141 6.27001 3.18141 6.75001 3.47141 7.04001L6.47141 10.04Z" />
                    <path d="M13.7107 11.28C13.5807 10.89 13.1607 10.68 12.7607 10.81C9.04067 12.05 4.95067 12.05 1.23067 10.81C0.840672 10.68 0.410668 10.89 0.280668 11.28C0.150668 11.67 0.360669 12.1 0.750669 12.23C2.76067 12.9 4.87067 13.24 6.99067 13.24C9.11067 13.24 11.2207 12.9 13.2307 12.23C13.6307 12.09 13.8407 11.67 13.7107 11.28Z" />
                </svg>
                <span class="text">                     دریافت اپلیکیشن</span>
            </a>

            <a href="https://app.cafearz.com" class="auth">
                <svg >
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/2022/sprite.svg?v=1#user"></use>
                </svg>
            </a>
        </div>
    </div>
</header>
