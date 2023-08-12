<section id="sandbox-team-section" class="sandbox-team-section">

	<h2>Our Team</h2>


	<div class="sandbox-team-query-wrapper">

			<?php 

				$sandbox_team_args = array(
					'numberposts'	=> -1,
					'post_type'		=> 'sandbox_team',
					'orderby'			=> 'date',
					'order'				=> 'ASC',
					'posts_per_page' => 50,

				);

				$the_query = new WP_Query( $sandbox_team_args );

			 ?>

			 <?php if( $the_query->have_posts() ): ?>

				<div class="sandbox-team-query-row">


				 	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

				 		<?php $sandbox_team_img_url = get_the_post_thumbnail_url(); ?>

							<div class="sandbox-team-card" style="background-image: url(<?php echo $sandbox_team_img_url; ?>);">
								
									<?php //the_content(); ?> 
								


								<div class="sandbox-team-card-title-wrapper">
								
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