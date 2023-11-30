
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


					<?php get_template_part( 'template-parts/sandbox-latest-posts-section' ); ?> 

					<?php get_template_part( 'template-parts/sandbox-partners-section' ); ?> 

					<section style="background-image: url(/wp-content/uploads/2023/02/agave-web.png);" class="sandbox-home-bottom-image-section">
					</section>

					<?php get_template_part( 'template-parts/sandbox-testimonials-section' ); ?> 
					
					<?php get_template_part( 'template-parts/sandbox-insta-section' ); ?>  


				<?php

			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
