<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NavyBlue
 */

// Don't show top panel if all elements are disabled.
if ( ! navyblue_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo navyblue_get_container_classes( array( 'top-panel__wrap' ), 'header' ); ?>><?php
		navyblue_top_menu();
		navyblue_top_message( '<div class="top-panel__message">%s</div>' );
		navyblue_top_search( '<div class="top-panel__search">%s</div>' );
	?></div>
</div><!-- .top-panel -->