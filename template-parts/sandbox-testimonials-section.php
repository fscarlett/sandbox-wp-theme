<section id="sandbox-testimonials-section" class="sandbox-testimonials-section">

	<h2>Testimonials</h2>


	<div class="sandbox-testimonialss-query-wrapper">

			<?php 

				$sandbox_testimonial_args = array(
					'numberposts'	=> -1,
					'post_type'		=> 'sandbox_testimonial',
					'orderby'			=> 'date',
					'order'				=> 'ASC',
					'posts_per_page' => 50,

				);

				$the_query = new WP_Query( $sandbox_testimonial_args );

			 ?>

			 <?php if( $the_query->have_posts() ): ?>

				<div class="sandbox-testimonials-query-row">


				 	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>


				 		<div class="sandbox-testimonials-card">
				 			
				 				<?php the_content(); ?>
				 			


				 			<div class="sandbox-testimonials-card-title-wrapper">
				 			
					 			<h3><?php the_title(); ?></h3>
					 			<?php the_excerpt(); ?>

					 		</div>

				 		</div>

				 	<?php endwhile; ?>

				</div>

			<?php endif; ?>
			
			<?php wp_reset_postdata(); ?>

		</div>



</section>