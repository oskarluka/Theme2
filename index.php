<?php 

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<?php get_template_part('content'); ?>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif; 

get_footer();

?>
