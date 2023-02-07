

<?php
/**
 * Template Name: Home Page
 *
 * @package Sandbox
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="sandbox-full-container">



			<?php
			while ( have_posts() ) :
				the_post();

				?>

				<section class="sandbox-main-heading-wrapper">
					<h1 class="sandbox-home-heading-1">Sandbox</h1>
				</section>


				

				



					
					<?php  the_content(); ?>

					<section  class="sandbox-latest-posts-section">
						<h2>Latest Blog Posts</h2>
					</section>


					<?php get_template_part( 'template-parts/sandbox-partners-section' ); ?>



				<?php

			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
