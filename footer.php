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
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-gray.png" alt="koelln logo">
					<h4>Hun Trade Kft</h4>
					<p>1139 Budapest, Váci út 85.</p>
					<p>+36 1 353 19 52.</p>
					<p>info@zabszolutegeszseges.hu</p>
				</div>
				<div class="column is-flex">
					<ul class="is-flex">
						<li>
							<a href="" target="_blank">Bemutatkozás</a>
						</li>
						<li>
							<a href="" target="_blank">Termékek</a>
						</li>
						<li>
							<a href="" target="_blank">Események</a>
						</li>
						<li>
							<a href="" target="_blank">Receptek</a>
						</li>
						<li>
							<a href="" target="_blank">Kapcsolat</a>
						</li>
					</ul>
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
						<ul>
							<li>
								<a href="#">Impresszum</a> 
							</li>
							<li>
								<a href="#">jogi nyilatkozat</a>
							</li>
							<li>
								<a href="#">Adatvédelmi szabályzat</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
