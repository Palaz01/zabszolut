<?php

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

            <?php $current_category = single_cat_title("", false); ?>
            <?php
               $args = array(
               'post_type' => 'products', 
               'category_name'  => $current_category
               ); 
            ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php if($loop->have_posts()) : ?>
            <?php while($loop->have_posts()) : $loop->the_post() ?> 
               <div class="columns product-item is-multiline is-three-quarters is-flex">
                  <div class="column is-full-mobile product-item-img"> 
                     <?php the_post_thumbnail('product-thumb'); ?>
                  </div>
                  <div class="column is-full-mobile card">
                     <h4 class="title is-size-4"><?php the_title(); ?></h4>
                     <p><?php echo get_excerpt(); ?></p>
                  </div>
               </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?> 

      </div>
   </section>
<?php get_footer(); ?>