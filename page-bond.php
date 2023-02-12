<?php
/**
 * Template Name: Bond Page
 *
 * @package Sandbox
 *
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="sandbox-container">


			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

			<?php get_template_part( 'template-parts/sandbox-bond-pricing-section' ); ?> 

			<h3>Follow Bond</h3>
			<a href="https://www.instagram.com/sandboxc6/" class="sandbox-product-social-link">instagram</a>
			<a href="https://www.facebook.com/sandboxc6" class="sandbox-product-social-link">facebook</a>

		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
