<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>


		<?php the_title( '<h1>', '</h1>' ); ?>
	
	
		<?php the_content();?>

	<?php

// check if the repeater field has rows of data
if( have_rows('exhibit') ):

 	// loop through the rows of data
    while ( have_rows('exhibit') ) : the_row();

        // display a sub field value
        the_sub_field('title');

        ?>

        <?php 

$image = get_sub_field('image');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

<?php


    endwhile;

else :

    // no rows found

endif;

?>