<?php
/**
 * Template part for displaying single recipe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

?>
<section class="section single-product">
   <h1 class="script-title has-text-centered">Zabszolut Egészséges</h1>
   <h2 class="has-text-centered"><?php the_title(); ?></h2>
   <div class="container">      
      <div class="columns is-multiline">
         <div class="column is-one-third-widescreen is-one-third-fullhd is-one-third-desktop is-full-tablet">
            <img src="<?php the_post_thumbnail(); ?>
         </div>
         <div class="column">
            <div class="single-product-content">
               <p><?php the_content(); ?></p> 
               <h4 class="title is-size-4"><?php the_field('preparation_title'); ?></h4>
            </div>            
         </div>         
      </div>                
   </div>
</section> 