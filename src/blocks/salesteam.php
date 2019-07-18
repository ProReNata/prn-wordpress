<?php
	$description = get_field('description') ?: 'xxx';
 ?>

<div class="section bg-a500 text-center">
	<div class="pure-g">
		<div class="pure-u-1-1 l-box">
			<a href="javascript: showContacForm();" class="btn btn-primary">Boka en demo</a>
		</div>
		<div class="pure-u-1-1 pure-u-sm-3-4 pure-u-md-1-2"><div class="pure-g">

			<?php

	// check if the repeater field has rows of data
	if( have_rows('images') ):

	 	// loop through the rows of data
	    while ( have_rows('images') ) : the_row();

	        // display a sub field value
	        $image = get_sub_field('image');

					?>

					<div class="pure-u-1-5">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" class="img-circle img-avatar" />
					</div>

					<?php

	    endwhile;

	else :

	    echo "Du måste lägga till bilder";

	endif;

	?>
		</div></div>
		<div class="pure-u-1-1 l-box">
			<?php echo $description; ?>
		</div>
	</div>
</div>
