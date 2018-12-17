<?php
/*
 Plugin Name: _Custom: Registration Fields
 Plugin URI:
 Description:
 Version: 0.2
 Author: Carl Sjoquist
 Author URI:
 License: GPLv2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


// used for ushpa number validation
$ushpa_url = "https://www.ushpa.org/ushpa_validation.asp?ushpa=";
$ushpa_number_bad_retval = "1900-1-1";  // returned when number is not in effect, not found, etc.


/**
 * Front end registration
 */

add_action( 'register_form', 'crf_registration_form' );
//add_action('pms_register_form_bottom','crf_registration_form' );
add_action('pms_register_form_after_fields','crf_registration_form' );
function crf_registration_form() {
    
    if (!is_user_logged_in() ) 
    {
    
    $ushpa = ! empty( $_POST['ushpa_number'] ) ? intval( $_POST['ushpa_number'] ) : '';
    
    ?>
	<p>
		<label for="ushpa_number"><?php esc_html_e( 'USHPA#', 'crf' ) ?><br/>
			<input type="text"
			       id="ushpa_number"
			       name="ushpa_number"
			       value="<?php echo esc_attr( $ushpa ); ?>"
			       class="input"
			/>
		</label>
	</p>
	<?php
    }
}


// display error in pms-register-form
add_action('pms_register_form_after_fields', 'pms_ushpa_validation_error_display');
function pms_ushpa_validation_error_display($atts) {

    $field_errors = pms_errors()->get_error_messages('ushpa_number');
    $html = pms_display_field_errors( $field_errors, true );
    echo $html;
}

// validate ushpa number in pms-register-form 
add_action( 'pms_register_form_validation', 'crf_pms_registration_errors', 10, 3 );
function crf_pms_registration_errors () {
    
    global $ushpa_url;
    global $ushpa_number_bad_retval;
    
    // missing value
    if ( empty( $_POST['ushpa_number'] ) ) {
        pms_errors()->add( 'ushpa_number', __( '<strong>ERROR</strong>: Please enter your USHPA#.', 'paid-member-subscriptions' ) );
        return; 
    }
    
    // out of range or invalid data type
    if ( ! empty( $_POST['ushpa_number'] )
    && ((intval( $_POST['ushpa_number'] ) < 1 )
    || intval( $_POST['ushpa_number'] ) > 999999 )) {
        pms_errors()->add( 'ushpa_number', __( '<strong>ERROR</strong>: The USHPA# you entered is invalid.  Please re-enter.', 'paid-member-subscriptions' ) );
        return;
    }
    
    // validate via web service
    $ushpa_request = $ushpa_url . $_POST['ushpa_number'];
    $retval = file_get_contents($ushpa_request);
    
    // ushpa number not in effect, not found...?
    if ($retval === $ushpa_number_bad_retval) {
        pms_errors()->add( 'ushpa_number', __( '<strong>ERROR</strong>: The USHPA# you entered is not current.  Please re-enter.', 'paid-member-subscriptions' ) );
        return;
    }
    
    $ushpa_expires_date = strtotime("$retval");
    $today = strtotime(date("m/d/Y"));
    
    // expired?
    if ($today > $ushpa_expires_date) {
        pms_errors()->add( 'ushpa_number', __( "<strong>ERROR</strong>: The USHPA# you entered expired as of " . $retval ));
        return;
    }
    
    // uncomment for debugging
    // pms_errors()->add( 'ushpa_number', __( "$retval . $ushpa_expires_date . $today", 'paid-member-subscriptions' ) );
    
}


add_filter( 'registration_errors', 'crf_registration_errors', 10, 3 ); // validates wp-login.php/?action=register
add_action( 'user_profile_update_errors', 'crf_registration_errors', 10, 3 ); // validates user-edit.php  
add_shortcode("get_ushpa_register","crf_registration_form");

function crf_registration_errors( $errors, $sanitized_user_login, $user_email ) {
    
    global $ushpa_url;
    global $ushpa_number_bad_retval;
    
    // missing value
    if ( empty( $_POST['ushpa_number'] ) ) {
        $errors->add( 'ushpa_number_error', __( '<strong>ERROR</strong>: Please enter your USHPA#.', 'crf' ) );
        return $errors;
    }
        
    // out of range or invalid data type
    if ( ! empty( $_POST['ushpa_number'] ) 
        && ((intval( $_POST['ushpa_number'] ) < 1 ) 
            || intval( $_POST['ushpa_number'] ) > 999999 )) {
        $errors->add( 'ushpa_number_error', __( '<strong>ERROR</strong>: The USHPA# you entered is invalid.  Please re-enter.', 'crf' ) );
        return $errors;
    }
        

    // validate via web service
    $ushpa_request = $ushpa_url . $_POST['ushpa_number'];
    $retval = file_get_contents($ushpa_request);
    
    // ushpa number not in effect, not found...?
    if ($retval === $ushpa_number_bad_retval) {
        $errors->add( 'ushpa_number_error', __( '<strong>ERROR</strong>: The USHPA# you entered is not current.  Please re-enter.', 'crf' ) );
        return $errors;
    }
    
    $ushpa_expires_date = strtotime("$retval");
    $today = strtotime(date("m/d/Y"));
    
    // expired?
    if ($today > $ushpa_expires_date) {
        $errors->add( 'ushpa_number_error', __( "<strong>ERROR</strong>: The USHPA# you entered expired as of " . $retval ));
        return $errors;
    }
    
    // uncomment for debugging
    // $errors->add( 'ushpa_number_error', __( "$retval . $ushpa_expires_date . $today", 'crf' ) );
    
    
    return $errors;
}



// cause ushpa number to be included in user create
add_action( 'user_register', 'crf_user_register' );
add_action('pms_register_form_after_create_user', 'crf_user_register');

function crf_user_register( $user_id ) {
    if ( ! empty( $_POST['ushpa_number'] ) ) {
        update_user_meta( $user_id, 'ushpa_number', intval( $_POST['ushpa_number'] ) );
    }
}

/**
 * Back end registration (user edit)
 */

add_action( 'user_new_form', 'crf_admin_registration_form' );
function crf_admin_registration_form( $operation ) {
    if ( 'add-new-user' !== $operation ) {
        // $operation may also be 'add-existing-user'
        return;
    }
    
    $ushpa = ! empty( $_POST['ushpa_number'] ) ? intval( $_POST['ushpa_number'] ) : '';
    
    ?>
	<h3><?php esc_html_e( 'USHPA Information', 'crf' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="ushpa_number"><?php esc_html_e( 'USHPA#:', 'crf' ); ?></label> <span class="description"><?php esc_html_e( '(required)', 'crf' ); ?></span></th>
			<td>
			<input type="text"
			       id="ushpa_number"
			       name="ushpa_number"
			       value="<?php echo esc_attr( $ushpa ); ?>"
			       class="input"
			/>
			</td>
		</tr>
	</table>
	<?php
}


// includes update on ushpa number to user meta data
add_action( 'edit_user_created_user', 'crf_user_register' );


/**
 * Display in profile and make editable
 */
add_action( 'show_user_profile', 'crf_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'crf_show_extra_profile_fields' );

function crf_show_extra_profile_fields( $user ) {
    $ushpa = get_the_author_meta( 'ushpa_number', $user->ID );
    ?>
	<h3><?php esc_html_e( 'USHPA Information', 'crf' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="ushpa_number"><?php esc_html_e( 'USHPA#:', 'crf' ); ?></label></th>
			<td>
			<input type="text"
			       id="ushpa_number"
			       name="ushpa_number"
			       value="<?php echo esc_attr( $ushpa ); ?>"
			       class="input"
			/>
			</td>
		</tr>
	</table>
	<?php
}


// causes ushpa number to be included in update (to db)
add_action( 'personal_options_update', 'crf_update_profile_fields' );
add_action( 'edit_user_profile_update', 'crf_update_profile_fields' );

function crf_update_profile_fields( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	if ( ! empty( $_POST['ushpa_number'] )) {
		update_user_meta( $user_id, 'ushpa_number', intval( $_POST['ushpa_number'] ) );
	}
}



