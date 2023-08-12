<section id="sandbox-partners-section" class="sandbox-partners-section">

	<h2>Our Partners</h2>


	<div class="sandbox-partners-query-wrapper">

			<?php 

				$sandbox_partner_args = array(
					'numberposts'	=> -1,
					'post_type'		=> 'sandbox_partner',
					'orderby'			=> 'date',
					'order'				=> 'ASC',
					'posts_per_page' => 50,

				);

				$the_query = new WP_Query( $sandbox_partner_args );

			 ?>

			 <?php if( $the_query->have_posts() ): ?>

				<div class="sandbox-partner-query-row">


				 	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>


				 		<div class="sandbox-partner-card">


				 			<div class="sandbox-partner-card-img-wrapper">
				 				<!-- <a href="<?php the_permalink(); ?>"> -->
				 					<?php the_post_thumbnail('medium'); ?>
						 		<!-- </a> -->
						 	</div>

				 			<div class="sandbox-partner-card-title-wrapper">
				 			
					 			<!-- <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->

					 		</div>

				 		</div>

				 	<?php endwhile; ?>

				</div>

			<?php endif; ?>
			
			<?php wp_reset_postdata(); ?>

		</div>



	</section>
