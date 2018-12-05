<?php
/**
 * Sidebars configuration.
 *
 * @package NavyBlue
 */

add_action( 'after_setup_theme', 'navyblue_register_sidebars', 5 );
function navyblue_register_sidebars() {

	navyblue_widget_area()->widgets_settings = apply_filters( 'navyblue_widget_area_default_settings', array(
		'sidebar' => array(
			'name'           => esc_html__( 'Sidebar Primary', 'navyblue' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h4 class="widget-title">',
			'after_title'    => '</h4>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		),
		'footer-full-width-area' => array(
			'name'           => esc_html__( 'Footer Fullwidth Area', 'navyblue' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h2 class="widget-title">',
			'after_title'    => '</h2>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
		'footer-area' => array(
			'name'           => esc_html__( 'Footer Area', 'navyblue' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h4 class="widget-title">',
			'after_title'    => '</h4>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
		'custom-area' => array(
			'name'           => esc_html__( 'Custom Area', 'navyblue' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h2 class="widget-title">',
			'after_title'    => '</h2>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
	) );
}
