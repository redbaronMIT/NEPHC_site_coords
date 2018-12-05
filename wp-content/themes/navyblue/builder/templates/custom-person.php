<?php
/**
 * Template part for Person module displaying
 */
?>
<?php
	preg_match( '@src="([^"]+)"@' , $this->_var('image'), $match );
	$src = array_pop($match);
	if ( ! is_null( $src ) ) {
		echo
			'<div class="tm_pb_team_member_image">
				<div class="member_image" style="background-image:url(' . $src . ');">
					<div class="tm_pb_team_member_description hiddening">
						'.$this->shortcode_content.'
						'.$this->_var( 'social_links' ).'
					</div>
				</div>
			</div>';
	}
?>

<div class="tm_pb_team_member_wrap">
	<h3 class="tm_pb_team_member_name"><?php
		echo $this->html( esc_url( $this->_var( 'custom_url' ) ), '<a href="%s">' );
		echo esc_html( $this->_var( 'name' ) );
		echo $this->html( $this->_var( 'custom_url' ), '</a>' );
	?></h3>
	<h6 class="tm_pb_member_position"><?php echo esc_html( $this->_var( 'position' ) ); ?></h6>
</div> <!-- .tm_pb_team_member_wrap -->
<div class="tm_pb_team_member_description visibile">
	<?php echo $this->shortcode_content; ?>
	<?php echo $this->_var( 'social_links' ); ?>
</div> <!-- .tm_pb_team_member_description -->


