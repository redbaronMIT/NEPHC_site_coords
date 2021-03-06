<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.keybored.fr/2016/08/14/WP-Contact-Form-Signature-Field.html
 * @since      4.0.0
 *
 * @package    Wpcf7_Signature
 * @subpackage Wpcf7_Signature/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      4.0.0
 * @package    Wpcf7_Signature
 * @subpackage Wpcf7_Signature/includes
 * @author     Breizhtorm <tameroski@gmail.com>
 */
class Wpcf7_Signature_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    4.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'contact-form-7-signature-addon',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
