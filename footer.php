<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nexora
 */

?>

	<footer id="colophon" class="site-footer layout-padding">
		<div class="footer-top pt-50 pb-40 pt-lg-80">
			<div class="footer-top-inner layout-padding">
				<div class="footer-widget-box">
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url('/') ); ?>">
							<img src="<?php the_field('footer_logo', 'option'); ?>" alt="">
						</a>
				     </div>
					<div class="footer-description">
					    <?php the_field('footer_description', 'option'); ?>
				    </div>
						<div class="footer-newsletter">
							<?php 
								$form_shortcode = get_field('footer_newsletter', 'option');

								if ($form_shortcode) {
									echo do_shortcode($form_shortcode);
								} 
							?>
				       </div>
				   </div>
				<div class="footer-widget-box">
					<?php 
						if ( is_active_sidebar('product') ) {
							dynamic_sidebar('product');
						}
					?>
				</div>
				<div class="footer-widget-box">
					<?php 
						if ( is_active_sidebar('company') ) {
							dynamic_sidebar('company');
						}
					?>
				</div>
				<div class="footer-widget-box">
					<?php 
						if ( is_active_sidebar('resources') ) {
							dynamic_sidebar('resources');
						}
					?>
				</div>
				<div class="footer-widget-box">
					<?php 
						if ( is_active_sidebar('legal') ) {
							dynamic_sidebar('legal');
						}
					?>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-bottom-inner pt-30 pb-40 pt-lg-80">
				<div class="footer-copyright">
					<p><?php the_field('footer_copyright', 'option'); ?></p>
				</div>
				 <?php
					  wp_nav_menu( array(
						'theme_location'    => 'footersocialMenu',
						'container'         => 'div',
						'container_class'   => 'footer-social-menu',
				       ) );
				 ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
