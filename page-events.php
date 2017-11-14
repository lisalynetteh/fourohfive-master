<?php
/**
 *Template Name: Events
 */

get_header(); ?>

<p>


	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'events' );


	endwhile;
	?>

<?php
get_sidebar();
get_footer();