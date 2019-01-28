<?php
/*
 Plugin Name: _Custom: Registration Fields
 Plugin URI:
 Description:
 Version: 0.3
 Author: Carl Sjoquist
 Author URI:
 License: GPLv2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


// used for ushpa number validation
$ushpa_url = "https://www.ushpa.org/ushpa_validation.asp?ushpa=";
$ushpa_number_bad_retval = "1900-1-1";  // returned when number is not in effect, not found, etc.


/**
 * FUNCTION: Front end registration. Adds USHPA number entry
 */

add_action('register_form', 'crf_registration_form_ushpa', 8, 1 );
add_action('pms_register_form_after_fields','crf_registration_form_ushpa', 8, 1 );
function crf_registration_form_ushpa() {
    
   //If user is not logged in, add USHPA entry box to registration form
    if (!is_user_logged_in() )
    {
        
        $ushpa = ! empty( $_POST['ushpa_number'] ) ? intval( $_POST['ushpa_number'] ) : '';
        
        ?>
	<p>
		<li>
		<label for="ushpa_number"><?php esc_html_e( 'USHPA# *', 'crf' ) ?><br/>
			<input type="text"
			       id="ushpa_number"
			       name="ushpa_number"
			       value="<?php echo esc_attr( $ushpa ); ?>"
			       class="input"
			/>
		</label>
		</li>
	</p>
	<?php
    }
}

/**
 * FUNCTION: Front end registration. Adds contact info entries
 */

add_action('register_form', 'crf_registration_form_contactinfo', 9, 1 );
add_action('pms_register_form_after_fields','crf_registration_form_contactinfo', 9, 1 );
function crf_registration_form_contactinfo() {
    
   //If user is not logged in, add contact info boxes to registration form
    if (!is_user_logged_in() )
    {  
//Mobile phone
        $mobile_phone = ! empty( $_POST['mobile_phone'] ) ? intval( $_POST['mobile_phone'] ) : '';

        ?>
                <li>
                <label for="mobile_phone"><?php esc_html_e( 'Mobile Phone # *', 'crf' ) ?><br/>
                        <input type="text"
                               id="mobile_phone"
                               name="mobile_phone"
                               value="<?php echo esc_attr( $mobile_phone ); ?>"
                               class="input"
                        />
                </label>
                </li> 
<?php //street address    
        $address_street = ! empty( $_POST['street_address'] ) ? intval( $_POST['street_address'] ) : ''; 
    
        ?>
        <p>
                <li>
                <label for="street_address"><?php esc_html_e( 'Street Address *', 'crf' ) ?><br/>
                        <input type="text"
                               id="street_address"
                               name="street_address"
                               value="<?php echo esc_attr( $address_street ); ?>" 
                               class="input"
                        />
                </label>
                </li>
	</p>
<?php //City
        $address_city = ! empty( $_POST['address_city'] ) ? intval( $_POST['address_city'] ) : '';

        ?>
        <p>
                <li>
                <label for="address_city"><?php esc_html_e( 'City *', 'crf' ) ?><br/>
                        <input type="text"
                               id="address_city"
                               name="address_city"
                               value="<?php echo esc_attr( $address_city ); ?>"
                               class="input"
                        />
                </label>
                </li>
        </p>

<?php //State
        $address_state = ! empty( $_POST['address_state'] ) ? intval( $_POST['address_state'] ) : '';

        ?>
        <p>
                <li>
                <label for="address_state"><?php esc_html_e( 'State (Abbrev) *', 'crf' ) ?><br/>
                        <input type="text"
                               id="address_state"
                               name="address_state"
                               value="<?php echo esc_attr( $address_state ); ?>"
                               class="input"
                        />
                </label>
<?php //Zipcode
        $address_zip = ! empty( $_POST['address_zip'] ) ? intval( $_POST['address_zip'] ) : '';

        ?>
		<li>
		<label for="address_zip"><?php esc_html_e( 'ZIP code *', 'crf' ) ?><br/>
                        <input type="text"
                               id="address_zip"
                               name="address_zip"
                               value="<?php echo esc_attr( $address_zip ); ?>"
                               class="input"
                        />
                </label>
                </li>
	</p>
<?php //E-contact full name
        $econtact_name = ! empty( $_POST['econtact_name'] ) ? intval( $_POST['econtact_name'] ) : '';

        ?>
		<li>
		<label for="econtact_name"><?php esc_html_e( 'Emergency Contact, Full Name *', 'crf' ) ?><br/>
                        <input type="text"
                               id="econtact_name"
                               name="econtact_name"
                               value="<?php echo esc_attr( $econtact_name ); ?>"
                               class="input"
                        />
                </label>
                </li>
<?php //E-contact phone
        $econtact_phone = ! empty( $_POST['econtact_phone'] ) ? intval( $_POST['econtact_phone'] ) : '';

        ?>
		<li>
		<label for="econtact_phone"><?php esc_html_e( 'Emergency Contact, Phone Number *', 'crf' ) ?><br/>
                        <input type="text"
                               id="econtact_phone"
                               name="econtact_phone"
                               value="<?php echo esc_attr( $econtact_phone ); ?>"
                               class="input"
                        />
                </label>
                </li>
        <?php
    }   
}


/* 
 * FUNCTION: Add check box to new user register from
 */
add_action('register_form', 'crf_registration_form_contact_ok', 10, 1 );
add_action('pms_register_form_after_fields','crf_registration_form_contact_ok', 10, 1 );
// used in the new user pms-register form
function crf_registration_form_contact_ok( $user ) {

    $contact_ok = '';
    
    if (!is_user_logged_in() )
    {
        $contact_ok = ! empty( $_POST['contact_ok'] ) ? $_POST['contact_ok'] : '';
?>
	<style>
	     table {
		border-width: medium;
	      }
	</style>

	<li>
	<table class="form-table">
		<tr>
			<td>
			<input type="checkbox"
			       id="contact_ok"
			       name="contact_ok"
			       value="true"
			       class="input"
			/>
			</td>
			<th><label for="contact_ok">Check to allow NEPHC to contact you using your email address </label></th>
		</tr>
	</table>
	</li>
<?php
    }
}

/**
 * These functions display specific error types
 */
// display bad ushpa number error in pms-register-form
add_action('pms_register_form_after_fields', 'pms_ushpa_validation_error_display', 9, 1);
function pms_ushpa_validation_error_display($atts) {

    $field_errors = pms_errors()->get_error_messages('ushpa_number');
    $html = pms_display_field_errors( $field_errors, true );
    
    echo $html;
}

// display missing contact_ok check error in pms-register-form
add_action('pms_register_form_after_fields', 'pms_contact_ok_validation_error_display', 10, 1);
function pms_contact_ok_validation_error_display($atts) {
    
    $field_errors = pms_errors()->get_error_messages('contact_ok');
    $html = pms_display_field_errors( $field_errors, true );
    echo $html;
}


/**
 * FUNCTION: validates ushpa number and contact_ok in pms-register-form 
 */
add_action( 'pms_register_form_validation', 'crf_pms_registration_errors', 9 );
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
    
    // missing value
    if ( empty( $_POST['contact_ok'] ) ) {
        pms_errors()->add( 'contact_ok', __( '<strong>ERROR</strong>: NEPHC must be allowed to contact you using your email address.', 'paid-member-subscriptions' ) );
        return;
    }
    
    // uncomment for debugging
    // pms_errors()->add( 'ushpa_number', __( "$retval . $ushpa_expires_date . $today", 'paid-member-subscriptions' ) );
    
}

/**
 * FUNCTION: checks for registration errors
 */
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

    /*
     * Allow '00000' ushpa number, otherwise do checks
     */
    if ( ! empty( $_POST['ushpa_number']) && ($_POST['ushpa_number']=='0000')){
	    //allow non user to create account
    } else{ // start of else

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
    } //end of else


    // missing value for contact_ok
    if ( empty( $_POST['contact_ok'] ) ) {
        $errors->add( 'contact_ok', __( '<strong>ERROR</strong>: NEPHC must be allowed to contact you using your email address.', 'paid-member-subscriptions' ) );
        return $errors;
    }
    
    // uncomment for debugging
    // $errors->add( 'ushpa_number_error', __( "$retval . $ushpa_expires_date . $today", 'crf' ) );
        
    return $errors;
}


/**
 * Cause new fields to be included in user create
 */
add_action( 'user_register', 'crf_user_register' );
add_action('pms_register_form_after_create_user', 'crf_user_register');

function crf_user_register( $user_id ) {
    if ( ! empty( $_POST['ushpa_number'] ) ) {
        update_user_meta( $user_id, 'ushpa_number', intval( $_POST['ushpa_number'] ) );
    }

    if ( ! empty( $_POST['mobile_phone'] )) {
        update_user_meta( $user_id, 'mobile_phone', $_POST['mobile_phone'] );
    }
    
    if ( ! empty( $_POST['contact_ok'] )) {
        update_user_meta( $user_id, 'contact_ok', $_POST['contact_ok'] );
    }

    if ( ! empty( $_POST['address_street'] )) {
        update_user_meta( $user_id, 'address_street', $_POST['address_street'] );
    }

    if ( ! empty( $_POST['address_city'] )) {
        update_user_meta( $user_id, 'address_city', $_POST['address_city'] );
    }

    if ( ! empty( $_POST['address_state'] )) {
        update_user_meta( $user_id, 'address_state', $_POST['address_state'] );
    }

    if ( ! empty( $_POST['address_zip'] )) {
        update_user_meta( $user_id, 'address_zip', $_POST['address_zip'] );
    }

    if ( ! empty( $_POST['econtact_name'] )) {
        update_user_meta( $user_id, 'econtact_name', $_POST['econtact_name'] );
    }

    if ( ! empty( $_POST['econtact_phone'] )) {
        update_user_meta( $user_id, 'econtact_phone', $_POST['econtact_phone'] );
    }
}

/**
 * Back end registration (user edit), used in wp-admin/user-new.php
 */
add_action( 'user_new_form', 'crf_ushpa_admin_registration_form' );
function crf_ushpa_admin_registration_form( $operation ) {
    if ( 'add-new-user' !== $operation ) {
        // $operation may also be 'add-existing-user'
        return;
    }
    
    $ushpa = ! empty( $_POST['ushpa_number'] ) ? intval( $_POST['ushpa_number'] ) : '';
    
    ?>
	<table class="form-table">
		<tr>
			<th><label for="ushpa_number"><?php esc_html_e( 'USHPA# ', 'crf' ); ?></label> <span class="description"><?php esc_html_e( '(required)', 'crf' ); ?></span></th>
			<td>
			<input type="text"
			       id="ushpa_number"
			       name="ushpa_number"
			       value="<?php echo esc_attr( $ushpa ); ?>"
			       class="input"
			/>
		</td>
		</tr>
		<tr>
			<th><label for="contact_ok">Check to allow NEPHC to contact you using your email address </label></th>
			<td>
			<input type="checkbox"
			       id="contact_ok"
			       name="contact_ok"
			       value="true"
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
add_action( 'show_user_profile', 'crf_show_extra_profile_fields', 9, 1 );
add_action( 'edit_user_profile', 'crf_show_extra_profile_fields', 9, 1 );
// used in wp-admin/profile.php
function crf_show_extra_profile_fields( $user ) {
    
    $ushpa = ! empty( $_POST['ushpa_number'] ) ? intval( $_POST['ushpa_number'] ) : '';
    
    ?>
	<h3><?php esc_html_e( 'Additional NEPHC member information', 'crf' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="ushpa_number"><?php esc_html_e( 'USHPA# (*)', 'crf' ); ?></label></th>
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

/**
 * Display "OK to email/contact" checkbox in profile and make editable
 */
add_action( 'show_user_profile', 'crf_show_confirm_contact_ok', 10, 1 );
add_action( 'edit_user_profile', 'crf_show_confirm_contact_ok', 10, 1 );
// used in wp-admin/profile.php
function crf_show_confirm_contact_ok( $user ) {
    
    $contact_ok = ! empty( $_POST['contact_ok'] ) ? $_POST['contact_ok'] : '';
    
    ?>
	<table class="form-table">
		<tr>
			<th><label for="contact_ok">Check to allow NEPHC to contact you using your email address (*)</label></th>
			<td>
			<input type="checkbox"
			       id="contact_ok"
			       name="contact_ok"
			       value="true"
			       class="input"
			/>
			</td>
		</tr>
	</table>
	<?php
}


// causes ushpa number and contact_ok to be included in update (to db)
add_action( 'personal_options_update', 'crf_update_extra_profile_fields' );
add_action( 'edit_user_profile_update','crf_update_extra_profile_fields' );

function crf_update_extra_profile_fields( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	if ( ! empty( $_POST['ushpa_number'] )) {
		update_user_meta( $user_id, 'ushpa_number', intval( $_POST['ushpa_number'] ) );
	}
	
	if ( ! empty( $_POST['contact_ok'] )) {
	    update_user_meta( $user_id, 'contact_ok', $_POST['contact_ok'] );
	}

        if ( ! empty( $_POST['mobile_phone'] )) {
                update_user_meta( $user_id, 'mobile_phone', intval( $_POST['mobile_phone'] ) );
        }

        if ( ! empty( $_POST['address_street'] )) {
                update_user_meta( $user_id, 'address_street', intval( $_POST['address_street'] ) );
        }

        if ( ! empty( $_POST['address_city'] )) {
                update_user_meta( $user_id, 'address_city', intval( $_POST['address_city'] ) );
        }

        if ( ! empty( $_POST['address_state'] )) {
                update_user_meta( $user_id, 'address_state', intval( $_POST['address_state'] ) );
        }

        if ( ! empty( $_POST['address_zip'] )) {
                update_user_meta( $user_id, 'address_zip', intval( $_POST['address_zip'] ) );
        }

        if ( ! empty( $_POST['econtact_name'] )) {
                update_user_meta( $user_id, 'econtact_name', intval( $_POST['econtact_name'] ) );
        }

        if ( ! empty( $_POST['econtact_phone'] )) {
                update_user_meta( $user_id, 'econtact_phone', intval( $_POST['econtact_phone'] ) );
        }

}


