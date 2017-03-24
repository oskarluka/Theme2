<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8" />
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div class="container">

		<!-- site header-->
		<header class="site-header">

		<div class="header-search">

		<?php get_search_form(); ?>

		</div>

			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?>

			<?php if (is_page('about-us')) { ?>

			 - Thank you for viewing our page

			<?php }?></h5>

			<nav class="site-nav">
				<?php 
				$args = array(
					'theme_location' => 'primary'
				);
				?>


				<?php wp_nav_menu( $args ); ?>
			</nav>


		</header><!-- /Site header-->
