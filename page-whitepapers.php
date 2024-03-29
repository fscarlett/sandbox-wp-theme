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

      <div class="sandbox-citation-query-wrapper">

        <h3>Table of Contents</h3>

        <ul>
          <li><a href="#plant-based">Plant-Based Sequestration</a></li>
          <li><a href="#soil-organic-carbon">Soil Organic Carbon</a></li>
          <li><a href="#tree-sequestration">Tree Sequestration</a></li>
          <li><a href="#emerging-technologies">Emerging Technologies</a></li>
          <li><a href="#footprints-general">Emissions Carbon Footprints - General</a></li>
          <li><a href="#equipment">Equipment Emissions</a></li>
          <li><a href="#hardscape">Hardscape Emissions</a></li>
          <li><a href="#pvc">Polyvinyl Chloride (PVC) Emissions</a></li>
          <li><a href="#footprints-tree">Tree and Tree Care Carbon Footprints</a></li>
          <li><a href="#professionals">Professionals Consulted</a></li>
          <li><a href="#white-papers">White Papers</a></li>
        </ul>

      </div>

      <div class="sandbox-citation-query-wrapper" id="plant-based">
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
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div>      

      <div class="sandbox-citation-query-wrapper" id="soil-organic-carbon">
        <h3>Soil Organic Carbon (S.O.C.)</h3>
        <?php 

          $sandbox_citation_args_2 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'soil',
          );

          $the_query = new WP_Query( $sandbox_citation_args_2 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"> <?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="tree-sequestration">
        <h3>Tree Sequestration</h3>
        <?php 

          $sandbox_citation_args_3 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'tree_seq',
          );

          $the_query = new WP_Query( $sandbox_citation_args_3 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="emerging-technologies">
        <h3>Emerging Technologies</h3>
        <?php 

          $sandbox_citation_args_4 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'emerging',
          );

          $the_query = new WP_Query( $sandbox_citation_args_4 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="footprints-general">
        <h3>Emissions Carbon Footprints - General</h3>
        <?php 

          $sandbox_citation_args_5 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'footprints',
          );

          $the_query = new WP_Query( $sandbox_citation_args_5 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="equipment">
        <h3>Equipment Emissions</h3>
        <?php 

          $sandbox_citation_args_6 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'equipment',
          );

          $the_query = new WP_Query( $sandbox_citation_args_6 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="hardscape">
        <h3>Hardscape Emissions</h3>
        <?php 

          $sandbox_citation_args_7 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'hardscape',
          );

          $the_query = new WP_Query( $sandbox_citation_args_7 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="pvc">
        <h3>Polyvinyl Chloride (PVC) Emissions</h3>
        <?php 

          $sandbox_citation_args_8 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'pvc',
          );

          $the_query = new WP_Query( $sandbox_citation_args_8 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="footprints-tree">
        <h3>Tree and Tree Care Carbon Footprints</h3>
        <?php 

          $sandbox_citation_args_9 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'treefootprint',
          );

          $the_query = new WP_Query( $sandbox_citation_args_9 );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_field('citation_label'); ?></p>
                  Retrieved from: <a href="<?php the_field('citation_url'); ?>"  class="sandbox-citation-link"><?php the_field('citation_url'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div> 

      <div class="sandbox-citation-query-wrapper" id="professionals">
        <h3>Professionals Consulted</h3>
        <?php 

          $sandbox_citation_args_10 = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_citation',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            'meta_key'    =>  'citation_grouping',
            'meta_value'    =>  'professionals',
          );

          $the_query = new WP_Query( $sandbox_citation_args_10 );

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





      <h2>White Papers</h2>

      <div class="sandbox-citation-query-wrapper" id="white-papers">
        <?php 

          $sandbox_whitepapers_args = array(
            'numberposts'	=> -1,
            'post_type'		=> 'sandbox_whitepaper',
            'orderby'			=> 'date',
            'order'				=> 'ASC',
            'posts_per_page' => 200,
            
          );

          $the_query = new WP_Query( $sandbox_whitepapers_args );

        ?>

        <?php if( $the_query->have_posts() ): ?>

          <div class="sandbox-citation-cards-wrapper">


            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="sandbox-citation-card">
                
                  <p class="sandbox-citation-label"><?php the_title(); ?></p>
                  <a href="<?php the_field('sandbox_whitelabel_file'); ?>" target="_blank" class="sandbox-citation-link"><?php the_field('sandbox_whitelabel_file'); ?></a>

              </div>


          <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

      </div>





    </div>

	</main><!-- #main -->



<?php get_footer(); ?>
