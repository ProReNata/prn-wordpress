<div class="section text-center features">
	<div class="pure-g">

		<?php

// check if the repeater field has rows of data
if( have_rows('highlights') ):

 	// loop through the rows of data
    while ( have_rows('highlights') ) : the_row();

        // display a sub field value
        $icon = get_sub_field('icon');
				$label = get_sub_field('label');
				?>

				<a href="/moduler/" class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 l-box">
					<p><i class="<?php echo $icon; ?> fa-2x"></i></p>
					<p><?php echo $label; ?></p>
				</a>

				<?php

    endwhile;

else :

    echo "Du måste lägga till logotyper";

endif;

?>
		<div class="pure-u-1-1">
			<p class="text-center"><a href="/moduler/">Se fler av Prorenatas moduler -></a></p>
		</div>
	</div>
</div>
