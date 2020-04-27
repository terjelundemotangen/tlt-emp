<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://profiles.wordpress.org/terjelundemotangen/
 * @since      1.0.0
 *
 * @package    Tlt_Emp
 * @subpackage Tlt_Emp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Tlt_Emp
 * @subpackage Tlt_Emp/includes
 * @author     Terje Lundemo Tangen <terjelundemotangen@me.com>
 */
class Tlt_Emp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'tlt-emp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
