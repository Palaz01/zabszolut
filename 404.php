<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Zabszolut
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"> 
			<section class="not-found hero is-large is-primary">	
				<div class="container hero-body">
					<h1 class="has-text-centered">404!</h1>
					<h2 class="has-text-centered">Az oldal nem található</h2>
					<div class="is-flex is-justifycenter">
						<a class="is-bold" href="http://zabszolutegeszseges.hu">Ugrás a főoldalra!</a>
					</div>
				</div>		
			</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
