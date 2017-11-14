<?php
/**
 *Template Name: Exhibits
 */

get_header(); ?>

<p>


	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'exhibits' );


	endwhile;
	?>

<?php
get_sidebar();
get_footer();