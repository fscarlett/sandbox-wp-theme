<?php
/**
 * Template Name: Glossary Page
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

      <div class="sandbox-faqs-wrapper">
        <?php

        $sandbox_row_number = 0;

          if( have_rows('sandbox_glossary_item') ):

              while( have_rows('sandbox_glossary_item') ) : the_row();

                  $sbox_question_general = get_sub_field('glossary_word');
                  $sbox_answer_general = get_sub_field('glossary_definition');
                  $sandbox_row_number++;
              ?>

              <div class="sandbox-faq-card">
             
                <details>
                 <summary><span> <?php echo sprintf('%03d', $sandbox_row_number); ?> </span><h3><?php echo $sbox_question_general; ?> </h3></summary>
                  <p><?php echo $sbox_answer_general; ?> </p>
                </details>

              </div>

              <?php
              endwhile;

          else :
            ?>
              <h3>No items were found.</h3>
              <?php

          endif;
        ?>

      </div>       


    </div>

	</main><!-- #main -->



<?php get_footer(); ?>
