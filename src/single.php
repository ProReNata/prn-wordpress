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
    <aside class="bg-s400">
      <div class="section">
        <h3 class="text-center">Funktioner i detta användarfall</h3>
      </div>
      <div class="module-card-wrapper">
        <?php
        $posts = get_field('modules');
        if( $posts ):
          foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="module-card">
              <i class="fad <?php the_field('icon'); ?> fa-2x"></i>
              <h4><?php the_title(); ?></h4>
              <div class="text-small"><?php the_content(); ?></div>
              <?php if (get_field('link')) { ?>
                <div class="module-card-more-info"><a href="<?php the_field('link'); ?>">Fördjupad information -></a></div>
              <?php } ?>
            </div>
          <?php endforeach;
          wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      </div>

      <div class="section pure-g">
        <div class="pure-u-1-1 text-center">
          <a href="/funktioner/" class="modules-list-read-more">See fler av Prorenata Journals funktioner -></a>
        </div>
      </div>
    </aside>
  <?php } ?>

 <?php endwhile; ?>

 <?php get_footer(); ?>
