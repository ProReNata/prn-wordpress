<?php
/**
 * The Template for displaying all modules.
 *
 */
 get_header(); ?>

  	<div class="page-header bg-s700">
  	  <div class="page-header-content">
        <h1 class="text-center">Moduler i Prorenata Journal</h1>
      </div>
    </div>

    <article>
    <p class="leading text-center">Här är ett urval av alla de funktioner som Prorenata Journal har att erbjuda.</p>
  </article>

 <div class="module-card-wrapper">
 <?php while(have_posts()) : the_post();?>
   <div class="module-card">

       <i class="fad <?php the_field('icon'); ?> fa-2x"></i>
       <h4><?php the_title(); ?></h4>
       <div class="text-small"><?php the_content(); ?></div>
       <div class="module-card-more-info"><a href="<?php the_field('link'); ?>">Fördjupad information -></a></div>

   </div>
 <?php endwhile; ?>
</div>

 <?php get_footer(); ?>
