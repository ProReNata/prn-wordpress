<?php
/**
 * The Template for displaying all modules.
 *
 */
 get_header(); ?>

  	<div class="page-header">
  	  <div class="page-header-content">
        <h1 class="text-center">Moduler i Prorenata Journal</h1>
      </div>
    </div>

 <div class="module-card-wrapper">
 <?php while(have_posts()) : the_post();?>
   <div class="module-card">
     <div class="paper">
       <h4><?php the_title(); ?></h4>
       <div class="text-small"><?php the_content(); ?></div>
       <p><a href="<?php the_field('link'); ?>">Läs mer -></a></p>
     </div>
   </div>
 <?php endwhile; ?>
</div>

 <?php get_footer(); ?>
