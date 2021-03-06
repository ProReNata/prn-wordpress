<?php

/**
 * Hero Block Template.
 *
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero hero-fullscreen';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$title = get_field('title') ?: 'Title goes here';
$description = get_field('description') ?: 'Description goes here';
$image = get_field('background_img') ?: null;

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-image:url(<?php echo $image['sizes']['xlarge']; ?>);">
  <div class="hero-content">
		<h1><?php echo $title; ?></h1>
		<p class="hero-leading"><?php echo $description; ?></p>
		<p><a href="javascript: showContacForm();" class="btn btn-primary">Kontakta oss</a></p>
	</div>
</div>
