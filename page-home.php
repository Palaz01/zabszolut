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

<section class="introduction">
	<div class="container">
		<div class="card">
			<div class="columns is-marginless">
				<div class="column is-paddingless">
					<img class="introduction-image" src="<?php bloginfo('template_directory'); ?>/assets/images/oatfield.jpg" alt="oatfield">
				</div>
				<div class="column introduction-content">
					<div>
						<h2>A Kölln történet</h2>
						<p>A Kölln cég történetének kezdete 200 évvel ezelőttre tehető, amikor is Elmshorban, Hans-Hinrich Kölln lefektette a Kölln cég alapköveit, mely mára az egyik legsikeresebb német élelmiszer márkává nőtte ki magát. Ez a Németországban középméretűnek számító cég a piacon elérhető legjobb minőségű zabból készült pelyheket és más zab alapú reggeliző termékeket állít elő a német és a nemzetközi piacok számára.</p>
						<a href="#" class="simple-link">
							<span>Tovább a bemutatkozáshoz</span>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/next.svg" alt="">
						</a>
						<img class="top-right-img" src="<?php bloginfo('template_directory'); ?>/assets/images/oat.jpg" alt="oat">
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<?php get_footer(); ?>