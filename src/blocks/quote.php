<?php


// Load values and assing defaults.
$quote = get_field('quote') ?: 'xxx';
$quotee_line_1 = get_field('quotee_line_1') ?: 'xxx';
$quotee_line_2 = get_field('quotee_line_2') ?: 'xxx';
$image = get_field('avatar') ?: null;
?>
<div class="section bg-a500">
	<div class="pure-g">
		<div class="pure-u-1-1">
			<blockquote><?php echo $quote; ?></blockquote>
			<div class="quotee">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/jens.jpg" class="quotee-img" />
				<div class="quotee-line-1">Jens Alm, Grundare och VD</div>
				<div class="quotee-line-2">Läs hela brevet från Jens -></div>
			</div>
		</div>
	</div>
</div>
