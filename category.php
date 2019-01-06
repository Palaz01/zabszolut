<?php

get_header(); ?>
 
   <div class="products-page-hero hero is-medium">
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
         <img src="<?php bloginfo('template_directory'); ?>/assets/images/curly.svg" alt="">
      </div>
   </div>
   <section class="products-page-content section">
      <div class="container">
         <div class="columns is-multiline is-justifycenter">
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
               <div class="columns product-item is-three-quarters is-flex">
                  <div class="column is-half product-item-img">
                     <img src="<?php the_post_thumbnail(); ?>
                  </div>
                  <div class="column is-half card">
                     <h4 class="title is-size-4"><?php the_title(); ?></h4>
                     <p><?php echo get_excerpt(); ?></p>
                  </div>
               </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?> 
         </div>
      </div>
   </section>
<?php get_footer(); ?>