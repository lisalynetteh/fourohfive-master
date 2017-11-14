<?php
/**
 *Template Name: About
 */

get_header(); ?>

<p>


	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'about' );


	endwhile;
	?>

<?php
get_sidebar();
get_footer();