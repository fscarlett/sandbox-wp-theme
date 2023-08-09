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

      <div class="sandbox-citations-wrapper">
        <?php

          if( have_rows('sandbox_glossary_item') ):

              while( have_rows('sandbox_glossary_item') ) : the_row();

                  $sbox_question_general = get_sub_field('glossary_word');
                  $sbox_answer_general = get_sub_field('glossary_definition');
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
