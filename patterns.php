<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://dryanpress.net
 * @since             1.0.0
 * @package           Patterns
 *
 * @wordpress-plugin
 * Plugin Name:       Patterns
 * Plugin URI:        http://github.com/dryanmedia/patterns
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            David Ryan
 * Author URI:        http://dryanpress.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       patterns
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PATTERNS_PATH', plugin_dir_path( __FILE__ ) );


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-patterns-activator.php
 */
function activate_patterns() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-patterns-activator.php';
	Patterns_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-patterns-deactivator.php
 */
function deactivate_patterns() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-patterns-deactivator.php';
	Patterns_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_patterns' );
register_deactivation_hook( __FILE__, 'deactivate_patterns' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-patterns.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_patterns() {

	$plugin = new Patterns();
	$plugin->run();

}
run_patterns();
