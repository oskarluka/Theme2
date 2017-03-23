<?php 

/* 
Template Name: Home Page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>

		<div  class="info-box">
			<h4> Info Box title </h4>
			<p> This is a sample info box with any data input  </p>
		</div>

		<?php the_content(); ?>
	</article>
	
	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif; 

get_footer();

?>