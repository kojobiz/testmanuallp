<?php

/**
 * The header for our theme servicemanuallp
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikkosha_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- <style>
        :root {
            --base-font-color: #333;
            --bg-color: #fff;
            --main-width: 120.0rem;
            --primary-color: #f0353c;
            --swiper-pagination-bullet-height: 1.2rem;
            --swiper-pagination-bullet-horizontal-gap: .6rem;
            --swiper-pagination-bullet-width: 1.2rem;
            --swiper-pagination-color: #f0353c;
            --swiper-theme-color: #f0353c;
        }

        [data-color="black"] {
            --txt-color: #000;
        }

        [data-color="red"] {
            --txt-color: #d6000f;
        }

        [data-color="white"] {
            --txt-color: #fff;
        }
    </style> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <!-- icon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
    <!-- style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/sass/pages/smlp.css">
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <!-- heroimage -->
    <link rel="preload" as="image" href="https://ikkosha.co.jp/cms/wp-content/themes/ikkosha_theme/images/service/manual/lp/img_hero_bg01.png">
    <link rel="preload" as="image" href="https://ikkosha.co.jp/cms/wp-content/themes/ikkosha_theme/images/service/manual/lp/img_hero_bg03.png">
    <!-- script -->
    <script src="https://ikkosha.co.jp/cms/wp-content/themes/ikkosha_theme/assets/js/manuallp.js"></script>


    <?php wp_head(); ?>
</head>

<?php
if (is_home() && is_front_page()) {
    $custom_body_class = 'home';
} else {
    $custom_body_class = 'lower';
}
?>

<body <?php body_class($custom_body_class); ?>>

    <?php wp_body_open(); ?>

    <header id="header" class="site-header wh">
        <div class="header-inner">
            <h1 class="header-title">
                <a href="">
                    <figure class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/logo.svg" width="216" height="46" alt="株式会社一向社" class="logo01">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/logo_100th.svg" width="90" height="62" alt="100th ANNIVERSARY" class="logo02">
                    </figure>
                </a>
            </h1>

            <nav class="header-navi">
                <div class="navi-phone">
                    <!-- <a href="tel:0120150585" class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></a>
                    <span class="label">受付時間 / 平日 9:00～18:00</span> -->
                </div>
                <ul class="navi-menu txt-serif">
                    <li><a href="#solution">サービス紹介</a></li>
                    <li><a href="#case">お悩み解決事例</a></li>
                    <li><a href="#support">プラスαでおたすけ</a></li>
                    <li><a href="#flow">制作の流れ</a></li>
                    <li><a href="#faq">よくあるご質問</a></li>
                    <li class="navi-contact">
                        <a href="#contact" class="btn">お問い合わせ</a>
                    </li>
                </ul>
            </nav>

            <div id="hamburgerMenu" class="hamburger-menu">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <div id="spNavi" class="tabOnly">
        <ul class="navi-menu txt-serif">
            <li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp3#solution">サービス紹介</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp3#case">お悩み解決事例</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp3#support">プラスαでおたすけ</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp3#flow">制作の流れ</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp3#faq">よくあるご質問</a></li>
            <li class="navi-contact">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn">お問い合わせ</a>
            </li>
        </ul>
    </div>


    <main class="site-container">