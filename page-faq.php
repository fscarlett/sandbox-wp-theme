<?php
/**
 * Template Name: FAQ Page
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
        <h2>General Questions</h2>
        <?php

          if( have_rows('sandbox_faq_general') ):

              while( have_rows('sandbox_faq_general') ) : the_row();

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
              <h3>No FAQs were found.</h3>
              <?php

          endif;
        ?>

      </div>       

      <div class="sandbox-faqs-wrapper">
        <h2>Data Questions</h2>
        <?php

          if( have_rows('sandbox_faq_data') ):

              while( have_rows('sandbox_faq_data') ) : the_row();

                  $sbox_question_data = get_sub_field('faq_question_data');
                  $sbox_answer_data = get_sub_field('faq_answer_data');
              ?>

              <div class="sandbox-faq-card">
                <h3><?php echo $sbox_question_data; ?> </h3>
                <p><?php echo $sbox_answer_data; ?> </p>


              </div>

              <?php
              endwhile;

          else :
            ?>
              <h3>No FAQs were found.</h3>
              <?php

          endif;
        ?>

      </div>   

    </div>

	</main><!-- #main -->



<?php get_footer(); ?>
