<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>

<div class= "event___title backgrounddd">
		<h2> EXHIBITS </h2>

	</div>
	
	
		<?php the_content();?>

		<?php


// check if the repeater field has rows of data
if( have_rows('event') ):

 	// loop through the rows of data
    while ( have_rows('event') ) : the_row(); 

    	if(get_sub_field('event_rsvp_link_or_email') == 'Link')
    	{
    		$rsvp_link = get_sub_field('event_rsvp_link');
    	} else {
    		$rsvp_link = 'mailto:' .get_sub_field('event_rsvp_email');
    	}


    	?>

		    	<article class="event">

		    		<div class="event__image">

		<?php 

		$image = get_sub_field('event_image');


		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>

	</div>

	<div class="event__content">

		    <h2 class="event__title">

		    <?php  the_sub_field('event_title'); ?>
		    </h2>

		    <p class="event__time"> 
		    	  <?php  
		    	  if (the_sub_field('event_date'))
		    	  {
		    	  	echo ' at ' ; 
		    	  	the_sub_field('event_date');
		    	  	 }
		    	  	
		    	  ?> 



		    	    <?php 
		    	  if (get_sub_field('event_date_end'))
		    	  {
		    	  	echo ' to ';
		    	  	the_sub_field('event_date_end');
		    	  }

		    	  ?>




		    	  <?php 
		    	  if (get_sub_field('event_start_time'))
		    	  {
		    	  	echo ' at ';
		    	  	the_sub_field('event_start_time');
		    	  }

		    	  ?>





		    	  <?php 
		    	  if (get_sub_field('event_end_time'))
		    	  {
		    	  	echo ' until ';
		    	  	the_sub_field('event_end_time');
		    	  }

		    	  ?>

		    	  <?php 

$link = get_sub_field('link');

if( $link ): ?>
	
	<a class="button event__link" href="<?php echo $link; ?>">Click here</a>

<?php endif; ?>
		    	  

		    	</p>

		    	<p>

		    	<?php the_sub_field('event_description'); ?>
		    	
		    	</p>

		    	<p>
		    		<a class="event__link" href="<?php echo $rsvp_link; ?>"></a>
		    	</p>

		    </div>

		    </article>

        <?php 

    endwhile;

else :

echo '<p>There are currently no events planned.</p>';
endif;

?>