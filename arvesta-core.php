<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://agrivirtual.eu
 * @since             1.0.0
 * @package           Arvesta_Core
 *
 * @wordpress-plugin
 * Plugin Name:       Arvesta Core
 * Plugin URI:        https://agrivirtual.eu
 * Description:       REQUIRED for all Arvesta plugin. The core plugin allow access to the data base
 * Version:           1.0.0
 * Author:            Remy Chauveau
 * Author URI:        https://agrivirtual.eu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       arvesta-core
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
define( 'ARVESTA_CORE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-arvesta-core-activator.php
 */
function activate_arvesta_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-core-activator.php';
	Arvesta_Core_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-arvesta-core-deactivator.php
 */
function deactivate_arvesta_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-core-deactivator.php';
	Arvesta_Core_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_arvesta_core' );
register_deactivation_hook( __FILE__, 'deactivate_arvesta_core' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_arvesta_core() {

	$plugin = new Arvesta_Core();
	$plugin->run();

}
run_arvesta_core();
