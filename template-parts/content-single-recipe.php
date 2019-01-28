<?php
/**
 * Template part for displaying single recipe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Zabszolut
 */

?>
<section class="section single-recipe">
   <h1 class="has-text-centered"><?php the_title(); ?></h1>
   <div class="container">
  
      <div class="single-recipe-card columns is-desktop">	
         <div class="column is-flex is-justifyend">
            <div class="single-recipe-card-img">
               <?php 
               $img=get_field('recipe_img');
               $alt= $img['alt'];
               $size = 'big-recipe';
               $thumb = $img['sizes'][ $size ];

               if( $img ): ?>
                  <img class="recipe-thumb" src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>">
               <?php endif; ?>
            </div> 
         </div>
         <div class="column is-flex is-aligncenter">
            <div class="single-recipe-card-content">
               <div>
                  <div class="is-flex is-aligncenter">            
                     <?php if( get_field('preparation_time') ): ?>
                        <div class="top-item">
                           <img src="<?php bloginfo('template_directory'); ?>/assets/images/clock-gray.svg" alt="clock">
                           <div>
                              <p>Elkészítési idő</p>
                              <span><?php the_field('preparation_time'); ?></span>
                           </div>
                        </div>
                     <?php endif; ?>
                           
                     <div class="top-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/bowl.svg" alt="clock">
                        <div>
                           <p>Mennyiség</p>
                           <span>4 adag</span>
                        </div>
                     </div>               
               
                  </div>                     
                  <div class="ingredients">
                     <h2>Hozzávalók</h2>
                     <?php the_field('ingredients_text'); ?>
                     <div class="clear-both"></div>
                  </div>
               </div>
            </div>
         </div>					
      </div>
      </div>

      <div class="preparation">
         <h2>Elkészítés</h2>
         <p><?php the_field('preparation_text'); ?></p>
      </div>
      <div class="container more-recipes">
         <h2 class="has-text-centered">További receptek</h2>
         <div class="columns is-multiline"> 
            <?php $loop = new WP_Query( array('post_type' => 'recipe', 'posts_per_page' => 3 )); ?>
               <?php if($loop->have_posts()) : ?>
               <?php while($loop->have_posts()) : $loop->the_post() ?>
                  <div class="column is-half-tablet is-one-third-desktop">
                     <div class="recipe-list-item">                   
                        <?php 
                        $img=get_field('recipe_img');
                        $alt= $img['alt'];
                        $size = 'recipe-thumb';
                        $thumb = $img['sizes'][ $size ];

                        if( $img ): ?>
                           <img class="recipe-thumb" src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>">
                        <?php endif; ?>
                        <img class="recipe-list-item-img" src="<?php echo $recipe_img['url']; ?>" alt="<?php echo $recipe_img['alt']; ?>">
                        <div class="recipe-list-item-content">
                           <div class="is-flex">
                              <?php if( get_field('preparation_time') ): ?>
                                 <div class="prep-time">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/clock.svg" alt="clock">
                                    <span><?php the_field('preparation_time'); ?></span>
                                 </div>
                              <?php endif; ?>
                              <?php if( get_field('preparation_time') ): ?>
                                 <span class="calory"><?php the_field('calory'); ?></span>
                              <?php endif; ?>

                           </div>
                           <a href="<?php echo get_permalink(); ?>">
                              <h4 class="title is-size-4"><?php the_title(); ?></h4>
                           </a>
                        </div>
                     </div>               
                  </div>
               <?php endwhile; ?>
               <?php endif; ?>
            <?php wp_reset_query(); ?>   
         </div>
         <div class="is-justifycenter is-flex">
            <a href="http://localhost/zabszolut/receptek/" class="button is-primary is-rounded">Minden recept</a>
         </div>
      </div>		
   </div>
</section>
