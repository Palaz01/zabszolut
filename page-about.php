<?php
/* 
	Template Name: About Page

*/

get_header(); ?>
<section class="section about-page-content">
	<div class="container">
		<h1 class="has-text-centered"><?php the_title(); ?></h1>
		<hr>
		<?php 
		$wp_query = new WP_Query( array('post_type' => 'milestones'));
		if($wp_query->have_posts()) :
			while($wp_query->have_posts()) : $wp_query->the_post() ?>
				<div class="columns is-aligncenter">
					<div class="column is-half-desktop">
						<?php the_post_thumbnail(); ?> 
					</div>
					<div class="column is-half-desktop text">
						<h2><?php the_title(); ?></h2>
						<p><?php the_field('milestone_text'); ?></p>
					</div>				
				</div>				
			<?php endwhile;
		endif; ?>		
	</div>
</section>

<?php get_footer(); ?>