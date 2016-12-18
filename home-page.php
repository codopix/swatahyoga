<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Swatahyoga
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="full-width" role="main">
		    <?php if( function_exists('cyclone_slider') ) cyclone_slider('home-slider'); ?>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'components/page/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main>
	</div>
<?php
get_footer();