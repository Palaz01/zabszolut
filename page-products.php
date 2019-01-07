<?php
/* 
	Template Name: Products Page
*/

get_header(); ?>
   <div class="products-page-hero hero is-large">
      <div class="hero-body">
         <div class="container">
            <h1 class="hero-title has-text-centered">
            Zabszolút egészséges
            </h1>
            <h2 class="hero-subtitle has-text-centered">
            Termékek
            </h2>
         </div>
      </div>
   </div>
   <section class="products-page-content section">
      <div class="container post-list">
         <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         $loop = new WP_Query( array('post_type' => 'products',  'paged' => $paged, 'posts_per_page'=> 6 ));
         if($loop->have_posts()) :
            while($loop->have_posts()) : $loop->the_post() ?> 
               <div class="columns product-item is-multiline is-three-quarters is-flex">
                  <div class="column is-full-mobile product-item-img">
                     <img src="<?php the_post_thumbnail(); ?>
                  </div>
                  <div class="column is-full-mobile card">
                     <h4 class="title is-size-4"><?php the_title(); ?></h4>
                     <p><?php echo get_excerpt(); ?></p>
                  </div>
               </div>
            <?php endwhile;
         endif; ?> 
      </div>
      <div class="is-flex is-justifycenter">
         <?php load_more_button(); ?>
         <?php wp_reset_query(); ?> 
      </div>
   </section>
<?php get_footer(); ?>