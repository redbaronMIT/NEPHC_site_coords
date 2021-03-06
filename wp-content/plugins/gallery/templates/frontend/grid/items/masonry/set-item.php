<?php
/**
 * Set item
 *
 * @package templates/frontend/grid/items
 */

$folder = $data->gallery_folder;

?>

<div class="tm_pg_gallery-item <?php echo apply_filters( 'tm-pg-gallery-item-class', '' ) ?>"
	 data-id="<?php echo $data->ID ?>" data-type="set">
	<div class="tm_pg_gallery-item-wrapper">
		<a href="<?php do_action( 'tm-pg-the_post_link', $data ) ?>" class="tm_pg_gallery-item_link" data-effect="fadeIn">
			<img src="<?php echo!empty( $data->cover[0] ) ? $data->cover[0] : TM_PG_IMG_URL . 'no-image.png' ?>">
			<?php if ( $data->display['labels'][$folder] ): ?>
				<div class="tm_pg_gallery-item_label"><?php echo $data->display['set_label'][$folder] ?></div>
			<?php endif; ?>
			<div class="tm_pg_gallery-item_meta">
				<?php $show_default_icon = true; ?>
				<?php if ( $data->display['icon'][$folder] ): ?>
					<i class="tm_pg_gallery-item_icon tm_pg_set-icon"></i>
					<?php $show_default_icon = false; ?>
				<?php endif; ?>
				<?php if ( $data->display['title'][$folder] ): ?>
					<h3 class="tm_pg_gallery-item_title"><?php echo $data->post_title ?></h3>
					<?php $show_default_icon = false; ?>
				<?php endif; ?>
				<?php if ( $data->display['description'][$folder] ): ?>
					<p class="tm_pg_gallery-item_description"><?php echo wp_trim_words( $data->post_content, intval( $data->display['description_trim'][$folder] ) ); ?></p>
					<?php $show_default_icon = false; ?>
				<?php endif; ?>
				<?php if ( $data->display['counter'][$folder] ): ?>
					<p class="tm_pg_gallery-item_counter"><?php
						printf(
							esc_html( _nx( '1 image', '%1$s images', $data->img_count['images'], 'set images', 'tm_gallery' ) ),
							number_format_i18n( $data->img_count['images'] )
						);
						if ( 0 < $data->img_count['albums'] ) {
							?>, <?php
							printf(
								esc_html( _nx( '1 album', '%1$s albums', $data->img_count['albums'], 'set albums', 'tm_gallery' ) ),
								number_format_i18n( $data->img_count['albums'] )
							);
						}
					?></p>
					<?php $show_default_icon = false; ?>
				<?php endif; ?>
				<?php if ( $show_default_icon ): ?>
					<i class="tm_pg_gallery-item_default_icon material-icons">visibility</i>
				<?php endif; ?>
			</div>
		</a>
	</div>
</div>
