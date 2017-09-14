<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lego
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">






			<?php
			echo do_shortcode('[smartslider3 slider=2]');
			get_sidebar('news');
			get_sidebar('foryou');
			get_sidebar('video');
			get_sidebar('shop');
			/*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			*/
			?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
