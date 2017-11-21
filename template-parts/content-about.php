<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>
	
	
		<?php the_content();?>

		<div class= "event___title backgrounddd">
		<h2> ABOUT US </h2>

	</div>



<div class="container">
	<section class="media">
    <div class="media__image">
    	<img class="img-fluid "


<?php 

$image = get_field('image');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />


<?php endif; ?>
</img>

 </div>
    <div class="media__content">



        <p> <?php the_field('textfield'); ?></p>

        </div>
  </section>

