<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zabszolut
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer">
		<div class="container top-footer">
			<div class="columns">
				<div class="column">
					<img style="max-width: 100px" src="<?php bloginfo('template_directory'); ?>/assets/images/koelln_logo.jpg" alt="koelln logo">
					<?php
						if(is_active_sidebar('footer-sidebar')){
						dynamic_sidebar('footer-sidebar');
						}
					?>
				</div>
				<div class="column is-flex">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'container_class' => '' ) );
					?>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="columns">
					<div class="column">
						<p>Copyright © Huntrade Kft. - Minden jog fenntartva.</p>
					</div>
					<div class="column is-flex is-justifyend">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu-2',
							'container_class' => '' ) );
						?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
