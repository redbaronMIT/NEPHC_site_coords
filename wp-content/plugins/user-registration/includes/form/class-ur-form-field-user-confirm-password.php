<?php
/**
 * UR_Form_Field_User_Confirm_Password.
 *
 * @package  UserRegistration/Form
 * @category Admin
 * @author   WPEverest
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * UR_Form_Field_User_Confirm_Password Class
 */
class UR_Form_Field_User_Confirm_Password extends UR_Form_Field {

	private static $_instance;

	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function __construct() {

		$this->id = 'user_registration_user_confirm_password';
		$this->form_id = 1;
		$this->registered_fields_config = array(
			'label' => __( 'Confirm Password ','user-registration' ),
			'icon' => 'dashicons dashicons-lock',
		);

		$this->field_defaults           = array(
			'default_label' => __( 'Confirm Password','user-registration' ),
		);
	}

	public function get_registered_admin_fields() {

		return '<li id="' . $this->id . '_list "  class="ur-registered-item draggable" data-field-id="' . $this->id . '"><span class="' . $this->registered_fields_config['icon'] . '"></span>' . $this->registered_fields_config['label'] . '</li>';
	}

	public function validation( $single_form_field, $form_data, $filter_hook, $form_id ) {}
}

return UR_Form_Field_User_Confirm_Password::get_instance();
