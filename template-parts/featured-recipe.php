<?php
/**
 * Template part for displaying featured post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Zabszolut
 */
?>

<div class="container">
   <div class="column">
      <div class="featured-card columns is-flex is-alignend">	
         <div class="column is-flex is-justifyend">
            <div class="featured-card-img">
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
            <div class="featured-card-content">
               <div>
                  <?php if( get_field('preparation_time') ): ?>
                     <div class="prep-time">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/clock-dark.svg" alt="clock">
                        <span><?php the_field('preparation_time'); ?></span>
                     </div>
                  <?php endif; ?>
                  <h2><?php the_title(); ?></h2>
                  <a class="simple-link" href="<?php echo get_permalink(); ?>">Részletek</a>
               </div>
            </div>
         </div>					
      </div>
   </div>		
</div>
