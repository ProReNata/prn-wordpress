<?php

// Load values and assing defaults.
$text = get_field('text') ?: 'Text goes here';
?>

<div class="section">
	<div class="pure-g">
		<div class="pure-u-1-1 l-box leading">
			<?php echo $text; ?>
		</div>
	</div>
</div>
