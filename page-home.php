<?php
/* 
	Template Name: Home Page

*/

get_header(); ?>

<section class="main-slider">
	<div class="main-slider-wrap">
		<?php
		$loop = new WP_Query( array('post_type' => 'main_slider', ));
		?>
		<?php if($loop->have_posts()) : ?>
		<?php while($loop->have_posts()) : $loop->the_post() ?>
			<div class="slide">
				<img src="<?php the_field('main_slider_image'); ?>" alt="">
				<div class="overlay is-cover"></div>
				<div class="main-slider-text">
					<div class="container">
						<h1 class="script-title"><?php the_field('main_slider_title_1'); ?></h1>
						<h2 class="hero-subtitle"><?php the_field('main_slider_title_2'); ?></h2>
						<a href="<?php the_field('main_slider_link'); ?>" class="button is-primary is-rounded"><?php the_field('main_slider_button_title'); ?></a>
					</div>
				</div>
			</div>
		<?php endwhile ?>
		<?php endif ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="curly">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/curly.svg" alt="">
	</div>	
</section>

<section class="introduction section">
	<div class="container">
		<div class="card">
			<div class="columns is-marginless">
				<div class="column is-paddingless is-hidden-touch">
					<img class="introduction-image" src="<?php the_field('home_about_img'); ?>" alt="oatfield">
				</div>
				<div class="column introduction-content">
					<div>
						<h2><?php the_field('home_about_title'); ?></h2>
						<p><?php the_field('home_about_description'); ?></p>
						<a href="<?php the_field('home_about_link'); ?>" class="simple-link">
							<span><?php the_field('home_about_link_text'); ?></span>
						</a>
						<img class="top-right-img" src="<?php bloginfo('template_directory'); ?>/assets/images/oat.jpg" alt="oat">
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section class="advantages section">
	<div class="container">
		<div class="columns">
			<div class="column is-three-fifths is-offset-one-fifth">
				<h2 class="has-text-centered"><?php the_field('advantage_title_1'); ?></h2>
				<p class="has-text-centered"><?php the_field('advantage_desc_1'); ?></p>
			</div>
		</div>
		<div class="columns is-aligncenter reverse-on-small">
			<div class="column">
				<h2><?php the_field('advantage_title_2'); ?></h2>
				<p><?php the_field('advantage_desc_2'); ?></p>
			</div>
			<div class="column advantages-img wow slideInRight" data-wow-offset="500">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/advantages/heart.jpg" alt="heart">
			</div>
		</div>
		<div class="columns is-aligncenter">
			<div class="column advantages-img wow slideInLeft" data-wow-offset="500">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/advantages/muesli.jpg" alt="muesli">
			</div>
			<div class="column">
				<h2><?php the_field('advantage_title_3'); ?></h2>
				<p><?php the_field('advantage_desc_3'); ?></p>
			</div>
		</div>
		<div class="columns is-aligncenter reverse-on-small" data-wow-offset="500">
			<div class="column">
				<h2><?php the_field('advantage_title_4'); ?></h2>
				<p><?php the_field('advantage_desc_4'); ?></p>
			</div>
			<div class="column advantages-img wow slideInRight" data-wow-offset="500">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/advantages/cherry_oat.jpg" alt="cherry and oat">
			</div>
		</div>
		<div class="columns is-aligncenter">
			<div class="column advantages-img wow slideInLeft" data-wow-offset="500">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/advantages/cookies.jpg" alt="muesli">
			</div>
			<div class="column">
				<h2><?php the_field('advantage_title_5'); ?></h2>
				<p><?php the_field('advantage_desc_5'); ?></p>
			</div>
		</div>
	</div>	
</section>

<section class="testimonials section">
	<div class="overlay"></div>
	<div class="container">
		<h2 class="has-text-centered"><?php the_field('testimonials_title'); ?></h2>
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/quotations.svg" alt="">
		<div class="testimonials-slider">
			<?php
			$loop = new WP_Query( array('post_type' => 'testimonials', ));
			?>
			<?php if($loop->have_posts()) : ?>
			<?php while($loop->have_posts()) : $loop->the_post() ?>
				<div class="slide">
					<p class="has-text-centered"><?php the_field('testimonial_text'); ?> <br><span>- <?php the_field('testimonial_author'); ?></span></p>
				</div>
			<?php endwhile ?>
			<?php endif ?>
			<?php wp_reset_query(); ?>	
		</div>
	</div>
</section>

<section class="events section">
	<div class="container">
		<div class="columns">
			<div class="column is-three-fifths is-offset-one-fifth events-intro">
				<h2 class="has-text-centered"><?php the_field('main_page_events_title'); ?></h2>
				<p class="has-text-centered"><?php the_field('main_page_events_desc'); ?></p>
			</div>
		</div>
		<div class="columns is-multiline events-list">
			<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
 
 			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div class="column is-flex is-justifycenter is-full-tablet is-half-fullhd mg-small">
				<div class="event-card">
					<div class="columns">						
						<div class="column is-flex is-justifycenter">
							<div class="event-card-img">
								<img src="<?php the_post_thumbnail(); ?>
							</div> 
						</div>
						<div class="column is-flex is-aligncenter is-paddingless is-three-fifths">
							<div class="card-content">
								<div>
									<span><?php the_date(); ?></span>
									<h4 class="title is-size-4"><?php the_title(); ?></h4>
								</div>
								<p><?php echo get_excerpt(); ?></p>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<?php 
			endwhile;
			wp_reset_postdata();
			?>
		</div>
		<div class="is-full is-flex is-justifycenter">
			<a href="#" class="button is-primary is-rounded">Tovább az eseményekhez</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>