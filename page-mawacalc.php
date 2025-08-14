<?php
/**
 * Template Name: MAWACalc Page
 *
 * @package Sandbox
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="sandbox-container">


			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				?>

				<div class="sandbox-mawacalc-wrapper">
					<h2>Powerful Features</h2>

					<div class="sb-mawacalc-row">
						<div class="sb-mawacalc-col">
							<div class="sb-mawacalc-inner-content">
								<h3>Automated Calculations</h3>
								<p>Instant MAWA and ETWU calculations for your landscape projects.</p>
							</div>
						</div>
						<div class="sb-mawacalc-col">
							<div class="sb-mawacalc-inner-content">
								<h3>PDF Export</h3>
								<p>Export your calculations to PDF format. Include within plan sets or generate separate compliance reports.</p>
							</div>
						</div>
						<div class="sb-mawacalc-col">
							<div class="sb-mawacalc-inner-content">
								<h3>Project Storage</h3>
								<p>Save and manage multiple landscape projects.</p>
							</div>
						</div>

					</div>
				</div>

				<div class="sandbox-mawacalc-wrapper">
					<div class="sandbox-mawacalc-screenshots-wrapper">

						<h2>App Screenshots:</h2>
						<img src="/wp-content/uploads/2025/08/mawacalc-dashboard-ss.png" alt="Screenshot of MAWACalc app dashboard">

						<img src="/wp-content/uploads/2025/08/mawacalc-app-ss-1.png" alt="Screenshot of MAWACalc app">
					</div>
				</div>

				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer('landingpage');
