<?php
/**
 *
 * @package netromag
 */

global $netromag_site_layout;
$netromag_site_layout = array(
					'mz-sidebar-left' =>  esc_html__('Left Sidebar','netromag'),
					'mz-sidebar-right' => esc_html__('Right Sidebar','netromag'),
					'no-sidebar' => esc_html__('No Sidebar','netromag')
					);
$netromag_thumbs_layout = array(
					'landscape' =>  esc_html__('Landscape','netromag'),
					'portrait' => esc_html__('Portrait','netromag')
					);

if ( ! function_exists( 'netromag_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function netromag_setup() {

	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	*/
	load_theme_textdomain( 'netromag', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'netromag-slider-thumbnail', 1140, 515, true );
	add_image_size( 'netromag-large-thumbnail', 1140, 640, true );
	add_image_size( 'netromag-landscape-thumbnail', 750, 490, true );
	add_image_size( 'netromag-portrait-thumbnail', 750, 750, true );
	add_image_size( 'netromag-author-thumbnail', 170, 170, true );
	add_image_size( 'netromag-small-thumbnail', 100, 80, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'top-menu' => esc_html__( 'Top Menu', 'netromag' ),
		'primary' => esc_html__( 'Primary Menu', 'netromag' ),
	) );

	// Set the content width based on the theme's design and stylesheet.
	global $content_width;
	if ( ! isset( $content_width ) ) {
	$content_width = 1140; /* pixels */
	} 

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support( 'html5', array(
		'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'netromag_custom_background_args', array(
		'default-color' => 'FFFFFF',
		'default-image' => '',
	) ) );

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 140,
		'width'       => 500,
		'flex-height' => true,
	) );

}
endif; // netromag_setup
add_action( 'after_setup_theme', 'netromag_setup' );


/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
if ( ! function_exists( 'netromag_the_custom_logo' ) ) :
function netromag_the_custom_logo() {
	// Try to retrieve the Custom Logo
	$output = '';
	if ((function_exists('get_custom_logo'))&&(has_custom_logo()))
		$output = get_custom_logo();

		// Nothing in the output: Custom Logo is not supported, or there is no selected logo
		// In both cases we display the site's name
	if (empty($output))
		$output = '<hgroup><h1><a href="' . esc_url(home_url('/')) . '" rel="home">' . esc_html(get_bloginfo('name')) . '</a></h1><div class="description">'.esc_html(get_bloginfo('description')).'</div></hgroup>';

	echo $output;
}
endif; // sanremo_custom_logo


/*
 * Add Bootstrap classes to the main-content-area wrapper.
 */
if ( ! function_exists( 'netromag_content_bootstrap_classes' ) ) :
function netromag_content_bootstrap_classes() {
	if ( is_page_template( 'template-fullwidth.php' ) ) {
		return 'col-md-12';
	}
	return 'col-md-8';
}
endif; // netromag_content_bootstrap_classes


/*
 * Generate categories for slider customizer
 */
function netromag_cats() {
	$cats = array();
	$cats[0] = esc_html__("All", "netromag");
	
	foreach ( get_categories() as $categories => $category ) {
		$cats[$category->term_id] = $category->name;
	}

	return $cats;
}

/*
 * generate navigation from default bootstrap classes
 */
include( get_template_directory() . '/inc/wp_bootstrap_navwalker.php');

if ( ! function_exists( 'netromag_header_menu' ) ) :
/*
 * Header menu (should you choose to use one)
 */
function netromag_header_menu() {

	$netromag_menu_center = get_theme_mod( 'netromag_menu_center' );

	/* display the WordPress Custom Menu if available */
	$netromag_add_center_class = "";
	if ( true == $netromag_menu_center ) {
		$netromag_add_center_class = " navbar-center";
	}

	wp_nav_menu(array(
		'theme_location'    => 'primary',
		'depth'             => 3,
		'container'         => 'div',
		'container_class'   => 'collapse navbar-collapse navbar-ex2-collapse'.$netromag_add_center_class,
		'menu_class'        => 'nav navbar-nav',
		'fallback_cb'       => 'netromag_bootstrap_navwalker::fallback',
		'walker'            => new netromag_bootstrap_navwalker()
	));
} /* end header menu */
endif;

if ( ! function_exists( 'netromag_top_menu' ) ) :
/*
 * Header menu (should you choose to use one)
 */
function netromag_top_menu() {

	wp_nav_menu(array(
		'theme_location'    => 'top-menu',
		'depth'             => 2,
		'container'         => 'div',
		'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		'menu_class'        => 'nav navbar-nav',
		'fallback_cb'       => 'netromag_bootstrap_navwalker::fallback',
		'walker'            => new netromag_bootstrap_navwalker()
	));
} /* end header menu */
endif;

/*
 * Register Google fonts for theme.
 */
if ( ! function_exists( 'netromag_fonts_url' ) ) :
/**
 * Create your own netromag_fonts_url() function to override in a child theme.
 *
 * @since netromag 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function netromag_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Crimson Text, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'netromag' ) ) {
		$fonts[] = 'Poppins:400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Noto Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'netromag' ) ) {
		$fonts[] = 'Open Sans:400,500,700';
	}

	/* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'netromag' ) ) {
		$fonts[] = 'Raleway:400,400italic,700,700italic';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/*
 * load css/js
 */
function netromag_scripts() {

	// Add Google Fonts
	wp_enqueue_style( 'netromag-webfonts', netromag_fonts_url(), array(), null, null );

	// Add Bootstrap default CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css' );

	// Add main theme stylesheet
	wp_enqueue_style( 'netromag-style', get_stylesheet_uri() );

	// Add JS Files
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/js/slick.js', array('jquery') );
	wp_enqueue_script( 'netromag-js', get_template_directory_uri().'/js/netromag.js', array('jquery') );

	// Threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'netromag_scripts' );

/*
 * Add custom colors css to header
 */
if (!function_exists('netromag_custom_css_output'))  {
	function netromag_custom_css_output() {

		$netromag_accent_color = get_theme_mod( 'netromag_accent_color' );
		$netromag_hover_color = get_theme_mod( 'netromag_hover_color' );

		echo '<style type="text/css" id="netromag-custom-theme-css">';

		if ( $netromag_accent_color != "") {
			echo '.widget-title span { box-shadow: ' . esc_attr($netromag_accent_color) . ' 3px 0px 0px inset ;}' .
			'.mz-footer .widget-title span { box-shadow: ' . esc_attr($netromag_accent_color) . ' 0px -2px 0px inset ;}' .
			'.post-meta span i, .post-header span i { color: ' . esc_attr($netromag_accent_color) . ' ;}' .
			'.navbar-top .navbar-toggle { background-color: ' . esc_attr($netromag_accent_color) . ' ;}' .
			'.mz-slide-title .continue-reading { border-color: ' . esc_attr($netromag_accent_color) . ' ; background-color: ' . esc_attr($netromag_accent_color) . ' ;}';
		}
		if ( $netromag_hover_color != "" ) {
			echo 'a:hover, a:focus, a:active, a.active, .post-header h1 a:hover, .post-header h2 a:hover { color: ' . esc_attr($netromag_hover_color) . '; }' .
			'.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .post-image .cat a:hover, .post-header .cat a:hover, #back-top a:hover { background-color: ' . esc_attr($netromag_hover_color) . ';}' .
			'.read-more a:hover, .ot-widget-about-author .author-post .read-more a:hover, .null-instagram-feed p a:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .page-numbers .current {background-color: ' . esc_attr($netromag_hover_color) . '; border-color: ' . esc_attr($netromag_hover_color) . ';}';
		}

		echo '</style>';

	}
}
add_action( 'wp_head', 'netromag_custom_css_output');

/*
 * Customizer additions.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';

/*
 * Register widget areas.
 */

// if no title then add widget content wrapper to before widget
add_filter( 'dynamic_sidebar_params', 'netromag_check_sidebar_params' );
function netromag_check_sidebar_params( $params ) {
	global $wp_registered_widgets;

	$settings_getter = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
	$settings = $settings_getter->get_settings();
	$settings = $settings[ $params[1]['number'] ];

	if ( $params[0][ 'after_widget' ] == '</div></div>' && isset( $settings[ 'title' ] ) && empty( $settings[ 'title' ] ) )
		$params[0][ 'before_widget' ] .= '<div class="content">';

	return $params;
}

function netromag_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'netromag' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Main sidebar that appears on the left.', 'netromag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'netromag' ),
		'id'            => 'footer-widget-1',
		'description'   => esc_html__( 'Appears in the footer section of the site.', 'netromag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'netromag' ),
		'id'            => 'footer-widget-2',
		'description'   => esc_html__( 'Appears in the footer section of the site.', 'netromag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'netromag' ),
		'id'            => 'footer-widget-3',
		'description'   => esc_html__( 'Appears in the footer section of the site.', 'netromag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><span>',
		'after_title'   => '</span></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Full Width Footer', 'netromag' ),
		'id'            => 'footer-wide-widget',
		'description'   => esc_html__( 'Full width footer area for Instagram, etc. Appears in the footer section after widgets.', 'netromag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><span>',
		'after_title'   => '</span></div>',
	) );

}
add_action( 'widgets_init', 'netromag_widgets_init' );

/*
 * Misc. functions
 */

/**
 * Footer credits
 */
function netromag_footer_credits() {
	$netromag_footer_text = get_theme_mod( 'netromag_footer_text' );
	?>
	<div class="site-info">
	<?php if ($netromag_footer_text == '') { ?>
	&copy; <?php echo date_i18n( esc_html__( 'Y', 'netromag' ) ); ?> <?php bloginfo( 'name' ); ?><?php esc_html_e('. All rights reserved.', 'netromag'); ?>
	<?php } else { echo esc_html( $netromag_footer_text ); } ?>
	</div><!-- .site-info -->

	<?php
	printf( esc_html__( 'Theme by %1$s Powered by %2$s', 'netromag' ) , '<a href="https://wpwarfare.com/" target="_blank">WPWarfare</a>', '<a href="http://wordpress.org/" target="_blank">WordPress</a>');
}
add_action( 'netromag_footer', 'netromag_footer_credits' );

/* Wrap Post count in a span */
add_filter('wp_list_categories', 'netromag_cat_count_span');
function netromag_cat_count_span($links) {
	$links = str_replace('</a> (', '</a> <span>', $links);
	$links = str_replace(')', '</span>', $links);
	return $links;
}