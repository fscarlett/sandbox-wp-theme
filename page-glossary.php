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

          if( have_rows('sandbox_glossary') ):

              while( have_rows('sandbox_glossary') ) : the_row();

                  $sbox_question_general = get_sub_field('faq_question_general');
                  $sbox_answer_general = get_sub_field('faq_answer_general');
              ?>

              <div class="sandbox-faq-card">
                <h3><?php echo $sbox_question_general; ?> </h3>
                <p><?php echo $sbox_answer_general; ?> </p>


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
