<?php
/**
 * The front page template file.
 *
 */
get_header();

while(have_posts()) : the_post();
	the_content();
endwhile;

get_footer(); ?>
