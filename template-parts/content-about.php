<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>
	
	
		<?php the_content();?>

		<div class= "event___title backgrounddd">
		<h2> About the Litz Gallery </h2>

	</div>

<div class="event___title">
        <p> <?php the_field('textfield'); ?></p> 
    </div>

       
 <div class="event__image">
<?php 

$image = get_field('image');

if( !empty($image) ): ?>

	<img class="about_image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />



<?php endif; ?>
</div>

