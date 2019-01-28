<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zabszolut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="has-navbar-fixed-top" <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div>
			<nav class="navbar has-shadow is-fixed-top" role="navigation" aria-label="main navigation">
				<div class="container">
					<div class="navbar-brand">
							<a class="navbar-item" href="http://zabszolutegeszseges.hu">
								<img class="brand-image" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png"/>
							</a>

							<button class="navbar-burger burger" data-target="primary-menu">
								<span></span>
								<span></span>
								<span></span>
							</button>
					</div>
					<div class="navbar-menu">
						<?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => false,
							'items_wrap'     => '<div id="%1$s" class="%2$s">%3$s</div>',
							'menu_class'        => 'navbar-end',
							'after'             => "</div>",
							'walker'            => new Navwalker())
						);
						?>
					</div>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
