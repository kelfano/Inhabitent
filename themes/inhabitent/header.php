<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<!--<div class ="header-logo">-->
					<a href="<?php echo site_url();?>">
					<?php if (is_page('home') || is_page('about')){ ?>
						<img src="<?php echo get_template_directory_uri()?>/project-04/images/logos/inhabitent-logo-tent-white.svg"></a>
					<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri()?>/project-04/images/logos/inhabitent-logo-tent.svg"></a>
					<?php } ?>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					
					<div class="search">
						<i class="fa fa-search"></i>
					</div>
				<!--<div>-->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
