<?php
/**
 * The Template for displaying all use case.
 *
 */
 get_header(); ?>

  	<div class="page-header bg-a500">
  	  <div class="page-header-content">
        <h1 class="text-center">Så används Prorenata</h1>
      </div>
    </div>

 <div class="module-card-wrapper">
 <?php while(have_posts()) : the_post();?>
   <div class="module-card">
     <div class="paper">
       <?php the_post_thumbnail( null, 'medium' ); ?>
       <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
       <div class="text-small"><?php the_field('summary'); ?></div>
       <p><a href="<?php the_permalink( ); ?>">Läs mer -></a></p>
     </div>
   </div>
 <?php endwhile; ?>
</div>

 <?php get_footer(); ?>
