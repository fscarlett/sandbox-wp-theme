<section id="sandbox-latest-posts-section" class="sandbox-latest-posts-section">

	<h2>Latest Blog Posts</h2>

	<div class="sandbox-blog-preview-wrapper">

		<?php

				$sandbox_blog_args = array(
								'numberposts'			=> 4,
								'post_type'   		=> 'post',
								'orderby'					=> 'date',
				        'order'           => 'DESC',
				        // 'posts_per_page'  => '4'
				        );

				$the_query = new WP_Query( $sandbox_blog_args );

		?>

		<?php if( $the_query->have_posts() ): ?>

		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php $sandbox_blog_feat_img_url = get_the_post_thumbnail_url(); ?>

			<div class="sandbox-blog-preview-card" style="background-image: url(<?php echo $sandbox_blog_feat_img_url; ?>);">

				<div class="sandbox-blog-preview-card-title-wrapper">
				 			
						<h3><?php the_title(); ?></h3>
						<?php // the_excerpt(); ?>

				</div>



			</div>

			<?php endwhile; ?>
	</div>

	<?php endif; ?>
			
			<?php wp_reset_postdata(); ?>


</section>