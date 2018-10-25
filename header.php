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
<html class="no-js" style="margin-top: 0px !important;" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>


	<header class="site-header" role="banner">

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a class="hide-for-small-only" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php
						// Display the Custom Logo, default logo, or the site's name
						if ( get_theme_mod( 'header_logo' ) ) { ?>
									<img class="custom-logo" src="<?php echo get_theme_mod( 'header_logo' ); ?>">
								<?php
									}
						 else { ?>
									<img alt="Granite Recovery" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/logo.png" class="custom-logo"/>
							<?php } ?>
							</a>
							<button class="responsive menu-icon" aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>"  type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/menu.svg">
							</button>
				</div>
			</div>
			<div class="top-bar-right">
				<form role="search" method="get" id="searchform" class="top-bar-right-search" action="//localhost:3000/granite/">
					<div class="input-group">
						<div class="search-icon">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/search.svg">
						</div>
						<div class="search-bar">
							<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="Search">
						</div>
						<div class="input-group-button">
							<input type="submit" id="searchsubmit" value="Search" class="button">
						</div>
					</div>
				</form>

				<div class="top-bar-right-share">
					<div class="share-social">
						<div class="share-icon">
							<img class="icons"src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/share.svg">
						</div>
						<div class="share-bar">
						<div class="text">FOLLOW</div>
						<a href="<?php echo get_theme_mod( 'facebook_link' ); ?>">
							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/facebook-square.svg">
						</a>
						<a href="<?php echo get_theme_mod( 'instagram_link' ); ?>">
							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/instagram.svg">
						</a>
						<a href="<?php echo get_theme_mod( 'youtube_link' ); ?>">
							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/youtube.svg">
						</a>
						<a href="<?php echo get_theme_mod( 'pinterest_link' ); ?>">
							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/pinterest.svg">
						</a>
					</div>
					</div>
				</div>
				<div class="top-bar-right-menu">
					<div class="top-bar-right-menu-number">
							<?php if ( get_theme_mod( 'phone_number' ) ) : ?>
						<?php echo get_theme_mod( 'phone_number' ); ?>
						<?php endif; ?>
					</div>
					<div class="top-bar-right-menu-items">
					<?php foundationpress_top_bar_r(); ?>
					</div>
				</div>

			</div>
		</nav>

	</header>
	<div class="body-content">
