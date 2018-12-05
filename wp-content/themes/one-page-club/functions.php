<?php
/**
 * Loads the child theme textdomain.
 */
function onepageclub_child_theme_setup() {
    load_child_theme_textdomain('onepageclub');
}
add_action( 'after_setup_theme', 'onepageclub_child_theme_setup' );

function onepageclub_child_enqueue_styles() {
    $parent_style = 'onepageclub-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'one-page-club-style',get_stylesheet_directory_uri() . '/onepageclub.css');
}
add_action( 'wp_enqueue_scripts', 'onepageclub_child_enqueue_styles',99);
?>