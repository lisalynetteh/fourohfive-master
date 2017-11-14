<?php
/**
 *Template Name: Exhibit
 */

get_header(); ?>

<p>


	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'exhibit' );


	endwhile;
	?>

<?php
get_sidebar();
get_footer();