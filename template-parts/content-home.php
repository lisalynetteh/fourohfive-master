<?php 	
		the_post_thumbnail('full', ['class' => 'img-fluid']);?>


		<?php //the_title( '<h1>', '</h1>' ); ?>
	
	
		<?php the_content();?>



        <h2 class="container home__title"> 
        	<?php the_field('title'); ?>
        </h2>

        <form class="container button__home">
<input type="button" value="SIGN UP" onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />
</form>

