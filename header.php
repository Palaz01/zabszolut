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

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div>
			<nav class="navbar container" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
						<a class="navbar-item" href="https://github.com/Poruno/Bulma-Navwalker">
							<img class="brand-image" src=""/>
						</a>

						<button class="button navbar-burger" data-target="primary-menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
				</div>
				<?php
				wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => false,
						// 'items_wrap'     => 'div',
						'menu_class'        => 'navbar-menu',
						'menu_id'           => 'primary-menu',
						'after'             => "</div>",
						'walker'            => new Navwalker())
				);
				?>

			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
