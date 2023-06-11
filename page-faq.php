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
        <?php

          if( have_rows('sandbox_faq') ):

              while( have_rows('sandbox_faq') ) : the_row();

                  $sbox_question = get_sub_field('faq_question');
                  $sbox_answer = get_sub_field('faq_answer');
              ?>

              <div class="sandbox-faq-card">
                <h3><?php echo $sbox_question; ?> </h3>
                <p><?php echo $sbox_answer; ?> </p>


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
