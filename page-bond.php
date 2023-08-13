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
			<a href="https://www.instagram.com/sandboxc6/" class="sandbox-product-social-link" target="_blank" rel="nofollow"><img src="/wp-content/uploads/2023/07/instagram-color-icon.svg" height="40" width="40"></a>
			<a href="https://www.facebook.com/sandboxc6" class="sandbox-product-social-link" target="_blank" rel="nofollow"><svg viewBox="0 0 36 36" class="x1lliihq x1k90msu x2h7rmj x1qfuztq" fill="url(#:Rq9lad5qq75b5klba:)" height="40" width="40"><defs><linearGradient x1="50%" x2="50%" y1="97.0782153%" y2="0%" id=":Rq9lad5qq75b5klba:"><stop offset="0%" stop-color="#0062E0"></stop><stop offset="100%" stop-color="#19AFFF"></stop></linearGradient></defs><path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path><path class="xe3v8dz" d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path></svg></a>

		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
