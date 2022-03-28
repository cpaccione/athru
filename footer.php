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
						<?php
						
							$footer_logo = get_field('footer_logo', 'options');

							if($footer_logo):
			
						?>

							<img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>">

						<?php endif; ?>

						<p>&copy; <?php echo date('Y'); ?> <?php the_field('copyright_text', 'options'); ?></p><br>
						
						<?php
						
							$address = get_field('footer_address', 'options');
							
							if ($address):
							
							echo $address;
							
							endif;
						
						?>
						<a class="phone-number" href="tel:<?php the_field('footer_phone_number', 'options'); ?>"><?php the_field('footer_phone_number_label', 'options'); ?></a>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- #page -->

		<?php wp_footer(); ?>

		<!-- Start of HubSpot Embed Code -->
		<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/19991108.js"></script>
		<!-- End of HubSpot Embed Code -->

	</body>
</html>
