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

          $sandbox_row_number = 0;

          if( have_rows('sandbox_faq_general') ):

              while( have_rows('sandbox_faq_general') ) : the_row();

                  $sbox_question_general = get_sub_field('faq_question_general');
                  $sbox_answer_general = get_sub_field('faq_answer_general');
                  $sandbox_row_number++;
              ?>

              <div class="sandbox-faq-card">
              <details>
                 <summary><span> <?php echo sprintf('%03d', $sandbox_row_number); ?> </span>
                <h3><?php echo $sbox_question_general; ?> </h3></summary>
                <p><?php echo $sbox_answer_general; ?> </p>
              </details>

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
        $sandbox_row_number = 0;

          if( have_rows('sandbox_faq_data') ):

              while( have_rows('sandbox_faq_data') ) : the_row();

                  $sbox_question_data = get_sub_field('faq_question_data');
                  $sbox_answer_data = get_sub_field('faq_answer_data');
                  $sandbox_row_number++;
              ?>

              <div class="sandbox-faq-card">
              <details>
                 <summary><span> <?php echo sprintf('%03d', $sandbox_row_number); ?> </span>
                <h3><?php echo $sbox_question_data; ?> </h3></summary>
                <p><?php echo $sbox_answer_data; ?> </p>
              </details>


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
        <h2>Summary Page Questions</h2>
        <?php
        $sandbox_row_number = 0;

          if( have_rows('sandbox_faq_summary') ):

              while( have_rows('sandbox_faq_summary') ) : the_row();

                  $sbox_question_summary = get_sub_field('faq_question_summary');
                  $sbox_answer_summary = get_sub_field('faq_answer_summary');
                  $sandbox_row_number++;
              ?>

              <div class="sandbox-faq-card">
              <details>
                 <summary><span> <?php echo sprintf('%03d', $sandbox_row_number); ?> </span>
                <h3><?php echo $sbox_question_summary; ?> </h3></summary>
                <p><?php echo $sbox_answer_summary; ?> </p>
              </details>

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
        <h2>Reports Page Questions</h2>
        <?php
        $sandbox_row_number = 0;

          if( have_rows('sandbox_faq_reports') ):

              while( have_rows('sandbox_faq_reports') ) : the_row();

                  $sbox_question_reports = get_sub_field('faq_question_reports');
                  $sbox_answer_reports = get_sub_field('faq_answer_reports');
                  $sandbox_row_number++;
              ?>

              <div class="sandbox-faq-card">
              <details>
                 <summary><span> <?php echo sprintf('%03d', $sandbox_row_number); ?> </span>
                <h3><?php echo $sbox_question_reports; ?> </h3></summary>
                <p><?php echo $sbox_answer_reports; ?> </p>
              </details>

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
        <h2>Inputs Page Questions</h2>
        <?php
        $sandbox_row_number = 0;

          if( have_rows('sandbox_faq_inputs') ):

              while( have_rows('sandbox_faq_inputs') ) : the_row();

                  $sbox_question_inputs = get_sub_field('faq_question_inputs');
                  $sbox_answer_inputs = get_sub_field('faq_answer_inputs');
                  $sandbox_row_number++;
              ?>

              <div class="sandbox-faq-card">
              <details>
                 <summary><span> <?php echo sprintf('%03d', $sandbox_row_number); ?> </span>
                <h3><?php echo $sbox_question_inputs; ?> </h3></summary>
                <div class="sandbox-faq-card-wysiwyg"><?php echo $sbox_answer_inputs; ?> </div>
              </details>

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
