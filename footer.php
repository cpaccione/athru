<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package athrupartners
 */

?>

				</div><!-- #content -->

				<footer id="colophon" class="site-footer">
					<div class="site-info">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer_logo.svg" alt="Athru footer logo">
						<p>&copy; <?php echo date('Y'); ?> Athru Partners. All rights reserved.</p><br>
						<p>Athru Partners</p>
						<p>325 N. LaSalle Street 5th Floor</p>
						<p>Chicago, IL 60654</p>
						<a class="phone-number" href="tel:8473131482">847-313-1482</a>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- #page -->

		<?php wp_footer(); ?>

		<!-- Start of HubSpot Embed Code -->
		<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/19991108.js"></script>
		<!-- End of HubSpot Embed Code -->

	</body>
</html>
