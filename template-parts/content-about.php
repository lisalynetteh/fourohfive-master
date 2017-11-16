<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>
	
	
		<?php the_content();?>

		 <h2 class="event__title"> 
        	<?php the_field('title'); ?>
        </h2>

        <p><?php the_field('textfield'); ?></p>

<?php 

$image = get_field('image');

if( !empty($image) ): ?>

	<img class="about__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>