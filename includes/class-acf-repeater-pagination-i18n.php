<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://thiscode.works
 * @since      1.0.0
 *
 * @package    Acf_Repeater_Pagination
 * @subpackage Acf_Repeater_Pagination/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Acf_Repeater_Pagination
 * @subpackage Acf_Repeater_Pagination/includes
 * @author     ThisCode.Works <michal@thiscode.works>
 */
class Acf_Repeater_Pagination_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'acf-repeater-pagination',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
