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

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css2/smlp.css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/sass/pages/smlp.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">

	<?php wp_head(); ?>
	<style>
		.animUp01 {
			opacity: 0;
			transform: translateY(80px);
			transition: opacity 2s ease, transform 2s ease;
		}

		.animUp01.is-visible {
			opacity: 1;
			transform: translateY(0);
		}

		.animUp02 {
			opacity: 0;
			transform: translateY(100px);
			transition: opacity 2s ease, transform 2s ease;
		}

		.animUp02.is-visible {
			opacity: 1;
			transform: translateY(0);
		}
	</style>
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
				<figure class="logo lp-logosize">
					<img src="<?php echo get_template_directory_uri() ?>/images/common/logo.svg" width="216" height="46" alt="株式会社一向社のロゴsince1922" class="logo01 lp-logosize">
				</figure>
			</h1>

			<nav class="header-navi">
				<ul class="navi-menu lp-navi-menu-ul p15">
					<!-- navi -->
					<li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#solution">サービス紹介</a></li>
					<li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#case">お悩み解決事例</a></li>
					<li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#support">プラスαでおたすけ</a></li>
					<li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#flow">制作の流れ</a></li>
					<li><a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#faq">よくあるご質問</a></li>
					<li class="btn-contact" data-color="white">
						<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#contact">
							<p>お見積り・制作について</p>
							<p>無料相談する</p>
						</a>
					</li>
				</ul>
			</nav>
			<!-- sp menu -->
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
		<ul class="navi-menu">
			<ul>
				<li>
					<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#solution">サービス紹介</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#case">お悩み解決事例</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#support">プラスαでおたすけ</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#flow">制作の流れ</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#faq">よくあるご質問</a>
				</li>
				<!-- <li class="navi-contact">
					<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#contact">
						<p>お見積り・制作について</p>
						<p>無料相談する</p>
					</a>
				</li> -->
			</ul>
			<ul style="padding-right: 4rem;width: 100%;padding-top: 36px!important;">
				<li style="width: 80%; max-width: 460px; background-color: #bc0101; color: white; margin: 0 auto; height: 83px; display: flex; justify-content: center; align-items: center;">
					<a href="<?php echo esc_url(home_url('/service')); ?>/manual/lp1#contact" style="color: white!important; font-size: 14px;">お見積もり・制作について<br><span style="font-size:28px;">無料相談する</span></a>
				</li>
			</ul>
		</ul>
	</div>



	<main class="site-container">