<?php
/**
 * Template Name: White Papers Page
 *
 * @package Sandbox
 *
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="sandbox-main-container">

      <h1><?php the_title(); ?></h1>

      <div><?php the_content(); ?>  </div>

      <h2>Citations</h2>

      <div class="sandbox-citation-query-wrapper">

        <h3>References: Sequestration and Plant-Based Sequestration</h3>

        <?php 

          $sandbox_citation_args_1 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'plant_based_seq',
          );

          $the_query = new WP_Query( $sandbox_citation_args_1 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

      </div>      


    </div>

	</main><!-- #main -->



<?php get_footer(); ?>
