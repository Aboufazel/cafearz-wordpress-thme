<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="Expires" content="30"/>

    <meta name="viewport" content="width=10, initial-scale=1">
    <meta name="description" content="Put your description here." />

    <link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?v=3.91"/>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon2.ico">

    <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>


    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="./src/assets/js/tailwind.js"></script>


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        black: "#21294D",
                        date: "#898989",
                        gold: "#F0B90B",
                        hint: "#c5c5c5",
                        blogText: "#c4c4c4",
                        dataBg: "#F4F7FE",
                        blue: "#3377E8",
                        white: "#ffffff",
                        zeroBlack: "#000000",
                        blogDetail: "#6F6F6F",
                    },
                },
                fontFamily: {
                    sans: [
                        "bakh-regular",
                        "bakh-light",
                        "bakh-bold",
                        "bakh-black",
                        "bakh-extrablack",
                        "bakh-extarbold",
                    ],
                },
                fontWeight: {
                    thin: "100",
                    hairline: "100",
                    extralight: "200",
                    light: "300",
                    normal: "400",
                    medium: "500",
                    semibold: "600",
                    bold: "700",
                    extrabold: "800",
                    black: "900",
                },
            },
        };
    </script>
</head>

<body <?php body_class(); ?>
<div class="app-overlay"></div>
<script>
    window.App_URL_PANEL = "https://app.cafearz.com";
    window.SITE_URL_PANEL = "https://cafearz.com";
</script>

<header
    id="header"
    class="header-box fixed top-0 lg:right-[85px] w-full mx-auto transition-all lg:w-[1350px] z-30"
>
    <div
        class="grid lg:grid-cols-5 grid-cols-2 place-items-center px-[23px] py-[15px]"
    >
        <div class="flex flex-row justify-start items-center w-full">
            <a href="<?php echo get_template_directory_uri(); ?>">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/src/assets/img/logo.png"
                    width="124px"
                    height="54px"
                    alt="کافه-ارز"
                    class="lg:mr-[17px] mr-[12px]"
                />
            </a>
        </div>
        <div class="lg:col-span-2 flex justify-end lg:justify-start w-full">
            <div class="flex relative gap-3 flex-row items-center">
                <button
                    name="menu-btn"
                    onclick="myFunction()"
                    class="dropbtn gap-[12px] relative w-[42px] h-[42px] flex flex-row items-center justify-center bg-dataBg p-3 rounded-[13px]"
                >
                    <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7793 15H1.00153" stroke="#21294D" stroke-width="2" stroke-linecap="round"/>
                        <path opacity="0.79" d="M17.7793 8.43457H1.00153" stroke="#21294D" stroke-width="2" stroke-linecap="round"/>
                        <path opacity="0.43" d="M17.4902 1.86963L1.00174 1.86963" stroke="#21294D" stroke-width="2" stroke-linecap="round"/>
                    </svg>

                </button>
                <p class="font-semibold text-[12px] hidden lg:block">دسته بندی ها</p>

                <div
                    id="myDropdown"
                    class="dropdown-content rounded-[5px] max-w-[280px] lg:w-full shadow-md items-start bg-white top-[68px] left-0 lg:left-auto px-3 py-5 absolute"
                >
                    <?php include 'menu.php'; ?>

                    <div
                        class="flex flex-row lg:hidden items-center justify-center gap-3 w-full"
                    >
                        <button
                            class="secondary-button lg:hidden flex items-center gap-[12px] justify-start font-semibold"
                        >
                            <i class="fa-solid fa-download"></i>
                            <p class="font-semibold">اپلیکیشن</p>
                        </button>
                        <button class="primary-button w-[125px] lg:hidden font-semibold">
                            کافه ارز
                        </button>
                    </div>
                </div>

                <div class="search-box hidden relative lg:flex items-center mr-[49px]">
                    <button
                        name="search-btn bg-black"
                        class="absolute left-[21px] top-[15px]"
                    >
                        <svg class="w-[17px] h-[16px]">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/src/assets/svg/sprite.svg#search"></use>
                        </svg>
                    </button>

                    <input type="text" placeholder="جستجو"/>
                </div>
            </div>
        </div>
        <div class="lg:col-span-2 flex flex-row items-center justify-end w-full">
            <div
                class="secondary-button hidden lg:flex items-center gap-[10px] justify-center font-semibold"
            >
                <svg
                    width="28"
                    height="28"
                    viewBox="0 0 28 28"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M13.3827 17.5469C13.4643 17.6285 13.5577 17.6869 13.6627 17.7335C13.7677 17.7802 13.8843 17.8035 14.001 17.8035C14.1177 17.8035 14.2227 17.7802 14.3393 17.7335C14.4443 17.6869 14.5377 17.6285 14.6193 17.5469L18.1193 14.0469C18.4577 13.7085 18.4577 13.1486 18.1193 12.8102C17.781 12.4719 17.221 12.4719 16.8827 12.8102L14.876 14.8169V7.59521C14.876 7.11688 14.4793 6.72021 14.001 6.72021C13.5227 6.72021 13.126 7.11688 13.126 7.59521V14.8169L11.1193 12.8102C10.781 12.4719 10.221 12.4719 9.88266 12.8102C9.54432 13.1486 9.54432 13.7085 9.88266 14.0469L13.3827 17.5469Z"
                        fill="#4A517D"
                    />
                    <path
                        d="M21.8285 18.9936C21.6768 18.5386 21.1868 18.2936 20.7201 18.4453C16.3801 19.892 11.6085 19.892 7.26847 18.4453C6.81347 18.2936 6.31179 18.5386 6.16013 18.9936C6.00846 19.4486 6.25346 19.9503 6.70846 20.102C9.05346 20.8836 11.5151 21.2803 13.9885 21.2803C16.4618 21.2803 18.9235 20.8836 21.2685 20.102C21.7351 19.9386 21.9801 19.4486 21.8285 18.9936Z"
                        fill="#4A517D"
                    />
                </svg>

                <p class="font-semibold">اپلیکیشن</p>
            </div>
            <a href="https://cafearz.com/" target="_blank" class="primary-button hidden lg:block font-semibold mr-[14px]">
                ورود به کافه ارز
            </a>
        </div>
    </div>
</header>
<main>