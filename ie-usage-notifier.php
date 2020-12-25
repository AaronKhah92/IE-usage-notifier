<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wwww.domain.tld
 * @since             1.0.0
 * @package           Ie_Usage_Notifier
 *
 * @wordpress-plugin
 * Plugin Name:       IE usage notifier
 * Plugin URI:        http://wwww.domain.tld
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Aaron Ahmadi
 * Author URI:        http://wwww.domain.tld
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ie-usage-notifier
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'IE_USAGE_NOTIFIER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ie-usage-notifier-activator.php
 */
function activate_ie_usage_notifier() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ie-usage-notifier-activator.php';
	Ie_Usage_Notifier_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ie-usage-notifier-deactivator.php
 */
function deactivate_ie_usage_notifier() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ie-usage-notifier-deactivator.php';
	Ie_Usage_Notifier_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ie_usage_notifier' );
register_deactivation_hook( __FILE__, 'deactivate_ie_usage_notifier' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ie-usage-notifier.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ie_usage_notifier() {

	$plugin = new Ie_Usage_Notifier();
	$plugin->run();

}
run_ie_usage_notifier();
