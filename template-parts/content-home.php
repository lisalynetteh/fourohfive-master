<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>


		<?php //the_title( '<h1>', '</h1>' ); ?>
	
	<div class="bg-red">
		<?php the_content();?>
                </div>


<div class="home_alert backgroundd">
        <h1> 
        	<?php the_field('title'); ?> </h1>
        <br>
        	
                <div class="">
        	<a class="button__home" href="http://art-gallery.dev/newsletter/">Sign up!</a>
                </div>
</div>
        	

        

<h1 class="home__titles"> 
        	<?php the_field('galleryhourstitle'); ?>
        
        </h1>

        <p class="home__titless"> <?php the_field('galleryhours'); ?> </p>

      <div id="map"></div>
    


       

