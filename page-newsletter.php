<?php
/**
 *Template Name: Newsletter
 */

get_header(); ?>


<p class= "news__letter">


	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'newsletter' );


	endwhile;
	?>

</p>

<?php
get_sidebar();
get_footer();