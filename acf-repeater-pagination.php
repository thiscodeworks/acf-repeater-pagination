<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://thiscode.works
 * @since             1.0.0
 * @package           Acf_Repeater_Pagination
 *
 * @wordpress-plugin
 * Plugin Name:       ACF Repeater Pagination
 * Plugin URI:        https://github.com/thiscodeworks/acf-repeater-pagination
 * Description:       Adding a javascript pagination to ACF repeater in admin section.
 * Version:           1.0.0
 * Author:            ThisCode.Works
 * Author URI:        https://thiscode.works
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       acf-repeater-pagination
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-acf-repeater-pagination-activator.php
 */
function activate_acf_repeater_pagination() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf-repeater-pagination-activator.php';
	Acf_Repeater_Pagination_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-acf-repeater-pagination-deactivator.php
 */
function deactivate_acf_repeater_pagination() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf-repeater-pagination-deactivator.php';
	Acf_Repeater_Pagination_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_acf_repeater_pagination' );
register_deactivation_hook( __FILE__, 'deactivate_acf_repeater_pagination' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-acf-repeater-pagination.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_acf_repeater_pagination() {

	$plugin = new Acf_Repeater_Pagination();
	$plugin->run();

}
run_acf_repeater_pagination();
