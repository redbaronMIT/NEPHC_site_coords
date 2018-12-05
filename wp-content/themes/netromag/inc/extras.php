<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package netromag
 */

/*
 * netromag Slider
 */
if ( ! function_exists( 'netromag_slider' ) ) :

/*
 * Featured image slider, displayed on front page for static page and blog
 */
function netromag_slider() {

	$show_netromag_slider = get_theme_mod( 'show_netromag_slider' );
	$show_netromag_slider = isset($show_netromag_slider) ? $show_netromag_slider : '';

	if ( ( is_home() || is_front_page() ) && $show_netromag_slider == true ) {

		echo '<div class="mz-slider">';

		$count = 4;
		$slidecat = get_theme_mod( 'netromag_slider_cat' );
		$slidecat = isset($slidecat) ? $slidecat : '';

		$query = new WP_Query( array( 'cat' => $slidecat,'posts_per_page' => $count ) );

		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();

				echo '<div><div class="mz-slider-item">';

				if ( (function_exists( 'has_post_thumbnail' )) && ( has_post_thumbnail() ) ) :
					echo get_the_post_thumbnail( get_the_ID(), 'netromag-slider-thumbnail' );
				endif;

				echo '<div class="mz-slide-title">';
				if ( get_the_title() != '' ) {
					echo '<h2 class="entry-title">'. get_the_title().'</h2>';
					the_excerpt();
					echo '<a href="' . esc_url(get_permalink()) . '" class="continue-reading">' . esc_html__( 'Continue Reading', 'netromag' ) . '</a>';
				}
				echo '</div>'; // .mz-slide-title

				echo '</div>'; // .mz-slider-item
				echo '</div>';

			endwhile; wp_reset_postdata();
		endif;

		echo '</div>';
	}

}
endif;

/**
 * Returns just the URL of an image attachment.
 *
 * @param int $image_id The Attachment ID of the desired image.
 * @param string $size The size of the image to return.
 * @return bool|string False on failure, image URL on success.
 */
function netromag_get_image_src( $image_id, $size = 'full' ) {
	$img_attr = wp_get_attachment_image_src( intval( $image_id ), $size );
	if ( ! empty( $img_attr[0] ) ) {
		return $img_attr[0];
	}
}

/*
 * Add boostrap classes fot tables
 */
add_filter( 'the_content', 'netromag_add_custom_table_class' );

function netromag_add_custom_table_class( $content ) {
	return str_replace( '<table>', '<table class="table table-hover">', $content );
}