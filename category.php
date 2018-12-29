<?php

get_header(); ?>
   <section class="products-page-content section">
      <div class="container">
         <div class="columns">
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
                  <div class="column is-one-third">
                     <div class="card">
                        <img class="card-img-top" src="<?php the_post_thumbnail(); ?>
                        <div class="card-content">
                           <h4 class="title is-size-4"><?php the_title(); ?></h4>
                           <p><?php echo get_excerpt(); ?></p>
                        </div>                        
                     </div>
                  </div>
               <?php endwhile; ?>
               <?php endif; ?>
            <?php wp_reset_query(); ?> 
         </div>
      </div>
   </section>
<?php get_footer(); ?>