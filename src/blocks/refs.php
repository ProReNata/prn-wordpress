<div class="section">
 	<div class="refs">

    <?php

// check if the repeater field has rows of data
if( have_rows('references') ):

 	// loop through the rows of data
    while ( have_rows('references') ) : the_row();

        // display a sub field value
        $image = get_sub_field('logo');

        printf('<img src="%s" class="refs-logo" />', $image['sizes']['medium'] );

    endwhile;

else :

    echo "Du måste lägga till logotyper";

endif;

?>
 	</div>
 </div>
