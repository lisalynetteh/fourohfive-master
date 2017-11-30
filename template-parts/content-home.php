<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>


		<?php //the_title( '<h1>', '</h1>' ); ?>
	
	<div class="bg-red">
		<?php the_content();?>
                </div>


<div class="home_alert backgroundd">
        <h2> 
        	<?php the_field('title'); ?> </h2>
        <br>
        	
                <div class="">
        	<a class="button__home" href="<?php echo get_site_url();?>/newsletter/">Sign up!</a>
                </div>
</div>
        	

<h2 class="home__titles"> 
        	<?php the_field('galleryhourstitle'); ?>
        
        </h2>

        <p class="home__titless"> <?php the_field('galleryhours'); ?> </p>

      <div id="map"></div>
    


       

