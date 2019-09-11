<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage themename
 */
 get_header(); ?>

 <?php while(have_posts()) : the_post();

 $style = "";
 if ( has_post_thumbnail() ) {
 		$style = sprintf("background-image:url('%s'); text-shadow: 0 0 1.5rem rgba(0,0,0,0.3);", get_the_post_thumbnail_url( null, 'large' ));
 }
 ?>

 	<div class="page-header" style="<?php echo $style; ?>">
 	  <div class="page-header-content">
 			<h1><?php the_title(); ?></h1>
 			<p class="hero-leading"><?php echo $description; ?></p>
 		</div>
 	</div>

 	<article>
 		<?php the_content(); ?>
 	</article>

  <?php if ( get_field('modules') ) { ?>
    <aside class="modules-list paper paper-dark">
      <h3>Moduler i detta use case</h3>
      <?php
      $posts = get_field('modules');
      if( $posts ): ?>
        <ul>
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <li>
              <h4><?php the_title(); ?></h4>
              <div class="text-small">
                <?php the_content(); ?>
                <p class="text-right letter-spacing-normal"><a href="<?php the_field('link'); ?>">Fördjupad information -></a></p>
              </div>
          </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    </aside>
  <?php } ?>

 <?php endwhile; ?>

 <?php get_footer(); ?>
