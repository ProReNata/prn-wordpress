<?php
/**
 * The Template for displaying a 404-page.
 *
 * @package WordPress
 * @subpackage themename
 */
 get_header(); ?>

 	<div class="page-header">
 	  <div class="page-header-content">
      <img src="<?php echo get_template_directory_uri()?>/assets/404.svg">
 		</div>
 	</div>

 	<article class="text-center">
    <h3>Sidan kunde inte hittas</h3>
 		<p class="">Kontrollera URL:en och <a href="mailto:info@prorenata.se">kontakta oss</a> om felet kvarstår.</p>
 	</article>

 <?php get_footer(); ?>
