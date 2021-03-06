<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zabszolut
 */

get_header();
?>
<section class="section events">
	<h1 class="has-text-centered main-title">Események</h1>
	<div class="featured-event">
		<?php
		if ( have_posts() ) :
			query_posts($query_string."&featured=yes");
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				get_template_part( 'template-parts/featured-content', get_post_type() );

			endwhile;
			wp_reset_query();

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>

	<div class="container">
		<div class="columns events-list post-list is-multiline">				
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;
				wp_reset_query();

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
		<div class="is-flex is-justifycenter">
			<?php load_more_button(); ?>
		</div>
	</div>
</section>
<?php
get_footer();
