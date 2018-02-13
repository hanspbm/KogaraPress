<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<style>
			<?php $theme_url = content_url() . "/themes/KogaraPress/"; ?>

			@font-face {
				font-family: 'DistInking';
				src: url('<?php echo $theme_url; ?>src/assets/fonts/distinking-regular-webfont.ttf') format('truetype'),
					 url('<?php echo $theme_url; ?>src/assets/fonts/distinking-regular-webfont.woff2') format('woff2'),
					 url('<?php echo $theme_url; ?>src/assets/fonts/distinking-regular-webfont.woff') format('woff');
				font-weight: normal;
				font-style: normal;
			}

			@font-face {
				font-family: 'DistInking';
				src: url('<?php echo $theme_url; ?>src/assets/fonts/distinking-bold-webfont.ttf') format('truetype'),
					 url('<?php echo $theme_url; ?>src/assets/fonts/distinking-bold-webfont.woff2') format('woff2'),
					 url('<?php echo $theme_url; ?>src/assets/fonts/distinking-bold-webfont.woff') format('woff');
				font-weight: bold;
			}
		</style>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="header-info">
			<div class="main-container">
				<a class="date show-for-small-only">April 21 • 10AM - 6PM</a>
				<a class="date show-for-medium">April 21, 2018 • 10AM - 6PM</a>
				<a class="address" href="https://www.google.com/maps/place/Middlesex+County+College/@40.5048319,-74.3689419,17z/data=!3m1!4b1!4m5!3m4!1s0x89c3c84ebc6cddfd:0x9cd927edaafc1357!8m2!3d40.5048319!4d-74.3667479" target="_blank">
					<span class="hide-for-medium">MAP<i class="fa fa-map-marker" aria-hidden="true"></i></span>
					<span class="show-for-medium">2600 Woodbridge Ave, Edison, NJ 08837</span>
				</a>

			</div>
		</div>

		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div style="width: 20px;"></div>

			<span class="site-mobile-title title-bar-title">
				<a href='<?php echo esc_url( home_url() ); ?>' style='background: url(<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2017/10/kogaracon-logo-revised.png) no-repeat; background-size: 100%;'></a>
			</span>

			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<!-- <div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>
				</div>
			</div> -->
			<div class="top-bar-middle">
				<?php foundationpress_top_bar_m(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>				
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>
			</div>
		</nav>

		<script>
			// Insert logo in middle of main menu
			var middleLIpos = Math.ceil($("#menu-main-menu > *").length / 2);	// Grab position of middle li tag
			// console.log(middleLIpos)
			$("#menu-main-menu li:nth-child(" + middleLIpos + ")").after("<li class='menu-item logo'><a href='<?php echo esc_url( home_url() ); ?>' style='background: url(<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2017/10/kogaracon-logo-revised.png) no-repeat; background-size: 100%;'></li>");
		</script>

	</header>
