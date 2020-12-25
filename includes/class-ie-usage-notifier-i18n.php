<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://wwww.domain.tld
 * @since      1.0.0
 *
 * @package    Ie_Usage_Notifier
 * @subpackage Ie_Usage_Notifier/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ie_Usage_Notifier
 * @subpackage Ie_Usage_Notifier/includes
 * @author     Aaron Ahmadi <test@domain.tld>
 */
class Ie_Usage_Notifier_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ie-usage-notifier',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
