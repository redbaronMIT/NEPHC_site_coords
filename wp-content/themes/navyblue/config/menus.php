<?php
/**
 * Menus configuration.
 *
 * @package NavyBlue
 */

add_action( 'after_setup_theme', 'navyblue_register_menus', 5 );
function navyblue_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'navyblue' ),
		'main'   => esc_html__( 'Main', 'navyblue' ),
		'footer' => esc_html__( 'Footer', 'navyblue' ),
		'social' => esc_html__( 'Social', 'navyblue' ),
	) );
}
