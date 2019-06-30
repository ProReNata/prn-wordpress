<?php

// Load values and assing defaults.
$suptitle = get_field('suptitle') ?: 'Suptitle goes here';
$title = get_field('title') ?: 'Title goes here';
$description = get_field('description') ?: 'Description goes here';
$image = get_field('image') ?: null;
$dir = get_field('img_side') ?: 'left';

 ?>

<div class="section">
	<div class="pure-g">
		<?php if ($dir == 'left') {
			echo '<div class="pure-u-1-1 pure-u-md-7-12 text-center">';
		} else {
			echo '<div class="pure-u-1-1 hide-md text-center">';
		} ?>
			<img src="<?php echo $image['url'] ?>" alt="" class="pure-img">
		</div>
		<div class="pure-u-1-1 pure-u-md-5-12 l-box">
			<h5><?php echo $suptitle; ?></h5>
			<h4><?php echo $title; ?></h4>
			<?php echo $description; ?>
		</div>
		<?php if ($dir == 'right') { ?>
			<div class="pure-u-md-7-12 show-md text-center">
				<img src="<?php echo $image['url'] ?>" alt="" class="pure-img">
			</div>
		<?php } ?>
	</div>
</div>
