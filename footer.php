<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sandbox
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="sandbox-footer-container">
			<div class="footer-cols-wrapper">
				<div class="sandbox-footer-col sandbox-footer-col-1">
					<div>
						<img src="/wp-content/uploads/2023/02/sandbox-logo-mark-color-tm-large.png" width="200px" height="150px">
					</div>
				</div>
				<div class="sandbox-footer-col sandbox-footer-col-2">
					<div class="footer-nav">
				
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-footer',
								'menu_id'        => 'footer-menu',
							)
						);
						?>

					</div>

				</div>
				<div class="sandbox-footer-col sandbox-footer-col-3">
					
					
					<p></p>
					<p class="sandbox-footer-spaced"> Follow us on Instagram</p>
					<p class="sandbox-footer-spaced">
						<a href="https://www.instagram.com/sandboxc6/" target="_blank" rel="nofollow">
							<img src="/wp-content/uploads/2023/07/instagram-color-icon.png" alt="instagram icon" height="48" width="48">
						</a>
					</p>


					
					<p><a href="tel:9253593229"></a></p>


					<p class="sandbox-footer-spaced"><a href="tel:9255773165"></a></p>


					<p class="sandbox-footer-spaced"><a href="mailto:info@sandboxc6.com">info@sandboxc6.com</a></p>

				
				</div>
			</div>
			<div class="footer-sub">
				<p>©2022 - 2023 Sandbox  All rights reserved </p>
			</div>


		
			
		</div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
