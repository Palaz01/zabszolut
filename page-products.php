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
      <div class="curly">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 90"><style type="text/css">  
            .st0{fill:#FFFFFF;}
         </style><path class="st0" d="M500.5 46C288.5 46 102.7 37.2 0 24.1V90h1000V24.2C897.1 37.3 711.9 46 500.5 46z"/></svg>
	   </div> 
   </div>
   <section class="products-page-content section">
      <div class="container post-list">
         <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         $wp_query = new WP_Query( array('post_type' => 'products',  'paged' => $paged, 'posts_per_page'=> 6 ));
         if($wp_query->have_posts()) :
            while($wp_query->have_posts()) : $wp_query->the_post() ?> 
               <div class="columns product-item is-multiline is-three-quarters is-flex">
                  <div class="column is-full-mobile product-item-img wow" data-wow-offset="500">
                     <?php the_post_thumbnail('product-thumb'); ?>
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
         <?php if ( $wp_query->max_num_pages > 1 ) :
            load_more_button();
         endif;
         wp_reset_query(); ?> 
      </div>
   </section>
<?php get_footer(); ?>