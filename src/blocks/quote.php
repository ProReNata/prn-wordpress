<?php

// Load values and assing defaults.
$quote = get_field('quote') ?: 'xxx';
$quotee_line_1 = get_field('quotee_line_1') ?: 'xxx';
$quotee_line_2 = get_field('quotee_line_2') ?: 'xxx';
$image = get_field('avatar') ?: null;
$bgcolor = get_field('background') ?: 's400';
?>
<div class="section bg-<?php echo $bgcolor; ?>">
	<div class="pure-g">
		<div class="pure-u-1-1">
			<blockquote><?php echo $quote; ?></blockquote>
			<div class="quotee">
				<?php printf('<img src="%s" class="quotee-img" alt="%s" />', $image['sizes']['thumbnail'], $image['alt']); ?>
				<div class="quotee-line-1"><?php echo $quotee_line_1; ?></div>
				<div class="quotee-line-2"><?php echo $quotee_line_2; ?></div>
			</div>
		</div>
	</div>
</div>
