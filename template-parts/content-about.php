<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>
	
	
		<?php the_content();?>

		<div class= "event___title backgrounddd">
		<h2> About the Litz Gallery </h2>

	</div>

        <p class="text__about"> <?php the_field('textfield'); ?></p>

        <article class="event__imagee">

<?php 

$image = get_field('image');

if( !empty($image) ): ?>

	<img class="about__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

</article>