<?php
/**
 * Thumbnails configuration.
 *
 * @package NavyBlue
 */

add_action( 'after_setup_theme', 'navyblue_register_image_sizes', 5 );
function navyblue_register_image_sizes() {
	set_post_thumbnail_size( 540, 510, true );

	// Registers a new image sizes.
	add_image_size( 'navyblue-thumb-s', 150, 150, true );
	add_image_size( 'navyblue-thumb-345-302', 345, 302, true );
	add_image_size( 'navyblue-thumb-m', 400, 400, true );
	add_image_size( 'navyblue-thumb-l', 1280, 510, true );
	add_image_size( 'navyblue-thumb-xl', 1920, 1080, true );
	add_image_size( 'navyblue-author-avatar', 512, 512, true );
	add_image_size( 'navyblue-thumb-240-100', 240, 100, true );
	add_image_size( 'navyblue-thumb-536-437', 536, 437, true );
	add_image_size( 'navyblue-thumb-560-390', 560, 390, true );
	add_image_size( 'navyblue-thumb-masonry', 536, 9999 );
}
