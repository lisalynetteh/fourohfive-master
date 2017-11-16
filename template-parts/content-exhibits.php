<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>


		<?php the_title( '<h1>', '</h1>' ); ?>
	
	
		<?php the_content();?>

	


<?php if( have_rows('exhibit') ): ?>

   <?php while ( have_rows('exhibit') ) : the_row(); ?>


<h2 class="event__title">
       <?php the_sub_field('title'); ?> 

   </h2>

       <div class="event__image">

        <?php 

$image = get_sub_field('image');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" onclick="window.location.href='http://art-gallery.dev/gallery-2/current-exhibit//'" />

<?php endif; ?>

</div>

<p class="event__title">
       <?php the_sub_field('description'); ?> 

   </p>

<?php


    endwhile;

else :

    // no rows found

endif;

?>