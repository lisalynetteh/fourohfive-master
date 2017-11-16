<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>


		<?php //the_title( '<h1>', '</h1>' ); ?>
	
	
		<?php the_content();?>



        <h2 class="home__title backgroundd"> 
        	<?php the_field('title'); ?>

        	<br>

        	<form class="button__home">
<input type="button" value="SIGN UP" onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />
</form>
        </h2>

        

<h2 class="home__titles"> 
        	<?php the_field('galleryhourstitle'); ?>
        </h2>

        <h2 class="home__titles"> 
        	<?php the_field('galleryhours'); ?>
        </h2>

