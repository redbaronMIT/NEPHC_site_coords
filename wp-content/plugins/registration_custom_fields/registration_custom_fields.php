<?php
/*
Plugin Name: Custom Registration Fields
Plugin URI:
Description:
Version: 0.1
Author: CSSIgniter
Author URI:
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Front end registration
 */

add_action( 'register_form', 'crf_registration_form' );
function crf_registration_form() {

	$year = ! empty( $_POST['year_of_birth'] ) ? intval( $_POST['year_of_birth'] ) : '';

	?>
	<p>
		<label for="year_of_birth"><?php esc_html_e( 'Year of birth', 'crf' ) ?><br/>
			<input type="number"
			       min="1900"
			       max="2017"
			       step="1"
			       id="year_of_birth"
			       name="year_of_birth"
			       value="<?php echo esc_attr( $year ); ?>"
			       class="input"
			/>
		</label>
	</p>
	<?php
}
