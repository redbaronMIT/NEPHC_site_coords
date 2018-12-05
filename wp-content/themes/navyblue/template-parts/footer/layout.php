<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package NavyBlue
 */
?>

<div class="footer-full-width-area-wrap">
	<div class="container">
		<?php
			if ( !is_404() ) {
				do_action( 'navyblue_render_widget_area', 'footer-full-width-area' );
			}
		?>
	</div>
</div>
<div class="footer-area-wrap">
	<div class="container">
		<?php do_action( 'navyblue_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo navyblue_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info__mid-box">
			<?php navyblue_footer_copyright(); ?>
			<?php navyblue_footer_menu(); ?>
			<?php navyblue_social_list( 'footer' ); ?>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->
