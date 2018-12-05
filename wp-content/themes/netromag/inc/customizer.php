<?php
/**
 * netromag theme Customizer
 *
 * @package netromag
 */

function netromag_theme_options( $wp_customize ) {
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}

add_action( 'customize_register' , 'netromag_theme_options' );

/**
 * Options for WordPress Theme Customizer.
 */
function netromag_customizer( $wp_customize ) {

	global $netromag_site_layout, $netromag_thumbs_layout;

	/**
	 * Section: Color Settings
	 */

	// Change accent color
	$wp_customize->add_setting( 'netromag_accent_color', array(
		'default'        => '#a81f20',
		'sanitize_callback' => 'netromag_sanitize_hexcolor',
		'transport'  =>  'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'netromag_accent_color', array(
		'label'     => __('Accent color','netromag'),
		'section'   => 'colors',
		'priority'  => 1,
	)));

	// Change hover color
	$wp_customize->add_setting( 'netromag_hover_color', array(
		'default'        => '#ab1e1e',
		'sanitize_callback' => 'netromag_sanitize_hexcolor',
		'transport'  =>  'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'netromag_hover_color', array(
		'label'     => __('Links hover color','netromag'),
		'section'   => 'colors',
		'priority'  => 3,
	)));

	/**
	 * Section: Post Settings
	 */

	$wp_customize->add_section('netromag_post_section', 
		array(
			'priority' => 31,
			'title' => __('Post Settings', 'netromag'),
			'description' => __('change post settings', 'netromag'),
			)
		);

		// Post Thumbnail Layout
		$wp_customize->add_setting('netromag_thumbs_layout', array(
			'default' => 'landscape',
			'sanitize_callback' => 'netromag_sanitize_thumbs'
		));

		$wp_customize->add_control('netromag_thumbs_layout', array(
			'priority'  => 2,
			'label' => __('Thumbnail Layout', 'netromag'),
			'section' => 'netromag_post_section',
			'type'    => 'select',
			'description' => __('Choose post thumbnail layout', 'netromag'),
			'choices'    => $netromag_thumbs_layout
		));

	/**
	 * Section: Theme layout options
	 */

	$wp_customize->add_section('netromag_layout_section', 
		array(
			'priority' => 32,
			'title' => __('Layout options', 'netromag'),
			'description' => __('Choose website layout', 'netromag'),
			)
		);

		// Sidebar position
		$wp_customize->add_setting('netromag_sidebar_position', array(
			'default' => 'mz-sidebar-right',
			'sanitize_callback' => 'netromag_sanitize_layout'
		));

		$wp_customize->add_control('netromag_sidebar_position', array(
			'priority'  => 1,
			'label' => __('Website Layout Options', 'netromag'),
			'section' => 'netromag_layout_section',
			'type'    => 'select',
			'description' => __('Choose between different layout options to be used as default', 'netromag'),
			'choices'    => $netromag_site_layout
		));

		// checkbox center menu
		$wp_customize->add_setting( 'netromag_menu_center', array(
			'default'        => false,
			'transport'  =>  'refresh',
			'sanitize_callback' => 'netromag_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'netromag_menu_center', array(
			'priority'  => 2,
			'label'     => __('Center Menu?','netromag'),
			'section'   => 'netromag_layout_section',
			'type'      => 'checkbox',
		) );

	/**
	 * Section: Change footer text
	 */

	// Change footer copyright text
	$wp_customize->add_setting( 'netromag_footer_text', array(
		'default'        => '',
		'sanitize_callback' => 'netromag_sanitize_input',
		'transport'  =>  'refresh',
	));

	$wp_customize->add_control( 'netromag_footer_text', array(
		'label'     => __('Footer Copyright Text','netromag'),
		'section'   => 'title_tagline',
		'priority'    => 31,
	));

	/**
	 * Section: Slider settings
	 */

	$wp_customize->add_section( 
		'netromag_slider_options', 
		array(
			'priority'    => 33,
			'title'       => __( 'Slider Settings', 'netromag' ),
			'capability'  => 'edit_theme_options',
			'description' => __('Change slider settings here.', 'netromag'), 
		) 
	);

		// chose category for slider
		$wp_customize->add_setting( 'netromag_slider_cat', array(
			'default' => 0,
			'transport'   => 'refresh',
			'sanitize_callback' => 'netromag_sanitize_slidercat'
		) );	

		$wp_customize->add_control( 'netromag_slider_cat', array(
			'priority'  => 1,
			'type' => 'select',
			'label' => __('Choose a category.', 'netromag'),
			'choices' => netromag_cats(),
			'section' => 'netromag_slider_options',
		) );

		// checkbox show/hide slider
		$wp_customize->add_setting( 'show_netromag_slider', array(
			'default'        => false,
			'transport'  =>  'refresh',
			'sanitize_callback' => 'netromag_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'show_netromag_slider', array(
			'priority'  => 2,
			'label'     => __('Show Slider?','netromag'),
			'section'   => 'netromag_slider_options',
			'type'      => 'checkbox',
		) );

}

add_action( 'customize_register', 'netromag_customizer' );

/**
 * Adds sanitization for text inputs
 */
function netromag_sanitize_input($input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Adds sanitization callback function: Slider Category
 */
function netromag_sanitize_slidercat( $input ) {
	if ( array_key_exists( $input, netromag_cats()) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Sanitze checkbox for WordPress customizer
 */
function netromag_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Sanitze number for WordPress customizer
 */
function netromag_sanitize_number($input) {
	if ( isset( $input ) && is_numeric( $input ) ) {
		return $input;
	}
}

/**
 * Sanitze blog layout
 */
function netromag_sanitize_layout( $input ) {
	global $netromag_site_layout;
	if ( array_key_exists( $input, $netromag_site_layout ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Sanitze thumbs layout
 */
function netromag_sanitize_thumbs( $input ) {
	global $netromag_thumbs_layout;
	if ( array_key_exists( $input, $netromag_thumbs_layout ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Sanitze colors
 */
function netromag_sanitize_hexcolor($color)
{
	if ($unhashed = sanitize_hex_color_no_hash($color)) {
		return '#'.$unhashed;
	}

	return $color;
}