<?php
/**
 * Template Name: Contact Page
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

				

			endwhile; // End of the loop.
			?>

<?php get_template_part( 'template-parts/sandbox-newsletter-signup-section' ); ?> 


		<h3>Follow Bond</h3>
			<a href="https://www.instagram.com/sandboxc6/" class="sandbox-product-social-link" target="_blank" rel="nofollow"><img src="/wp-content/uploads/2023/07/instagram-color-icon.svg" height="40" width="40"></a>
			<a href="https://www.facebook.com/sandboxc6" class="sandbox-product-social-link" target="_blank" rel="nofollow"><svg viewBox="0 0 36 36" class="x1lliihq x1k90msu x2h7rmj x1qfuztq" fill="url(#:Rq9lad5qq75b5klba:)" height="40" width="40"><defs><linearGradient x1="50%" x2="50%" y1="97.0782153%" y2="0%" id=":Rq9lad5qq75b5klba:"><stop offset="0%" stop-color="#0062E0"></stop><stop offset="100%" stop-color="#19AFFF"></stop></linearGradient></defs><path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path><path class="xe3v8dz" d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path></svg></a>

			<a href="https://www.linkedin.com/company/elder-creek-landscapes/"  class="sandbox-product-social-link" target="_blank" rel="nofollow">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="#0B65C2" class="mercado-match" width="47" height="47" focusable="false">
      <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
			</svg>
			</a>

		</div>


		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
