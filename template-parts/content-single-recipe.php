<?php
/**
 * Template part for displaying single recipe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

?>
<section class="section single-recipe single-content">
   <div class="container">
      <h2 class="has-text-centered"><?php the_title(); ?></h2>
      <hr>
      <span class="has-text-centered"><?php the_date(); ?></span>
      <div class="columns is-flex is-aligncenter">
         <div class="column">
            <?php $recipe_img = get_field('recipe_img'); ?>
            <img src="<?php echo $recipe_img['url']; ?>" alt="<?php echo $recipe_img['alt']; ?>" >
         </div>
         <div class="column">
            <h4 class="title is-size-4"><?php the_field('ingredients_title'); ?></h4>
            <p><?php the_field('ingredients_text'); ?></p>  
         </div>
      </div>
      <h4 class="title is-size-4"><?php the_field('preparation_title'); ?></h4>
      <p><?php the_field('preparation_text'); ?></p>            
   </div>
</section>
