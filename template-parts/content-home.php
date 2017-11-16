<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>


		<?php //the_title( '<h1>', '</h1>' ); ?>
	
	
		<?php the_content();?>


<div>
        <h2 class="home_alert backgroundd"> 
        	<?php the_field('title'); ?>
        	<br>
        	<a class="button__home" href="http://art-gallery.dev/newsletter/">Sign up!</a>
</h2>
        	<div>

        

<h2 class="home__titles"> 
        	<?php the_field('galleryhourstitle'); ?>
        
        </h2>

        <p class="home__titless"> <?php the_field('galleryhours'); ?> </p>

       

