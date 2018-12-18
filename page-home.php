<?php
/* 
	Template Name: Home Page

*/

get_header(); ?>

<section class="main-slider">
	<div class="main-slider-wrap">
		<div class="slide">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/slider.jpg" alt="">
			<div class="main-slider-text">
				<div class="container">
					<h1>Zabszolút Egészséges</h1>
					<h2>Lorem ipsum dolor sit amet.</h2>
					<button class="button is-primary is-rounded">termékek</button>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/slider.jpg" alt="">
			<div class="main-slider-text">
				<div class="container">
					<h1>Csupa egészség!</h1>
					<h2>Lorem ipsum dolor sit amet.</h2>
					<button class="button is-primary is-rounded">termékek</button>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/slider.jpg" alt="">
			<div class="main-slider-text">
				<div class="container">
					<h1>Az igazi zabszakértő</h1>
					<h2>Lorem ipsum dolor sit amet.</h2>
					<button class="button is-primary is-rounded">termékek</button>
				</div>
			</div>
		</div>
	</div>
	<div class="curly">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/curly.svg" alt="">
	</div>	
</section>

<?php get_footer(); ?>