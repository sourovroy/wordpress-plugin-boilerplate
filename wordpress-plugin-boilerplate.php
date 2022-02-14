<?php
/**
 * Plugin Name: WordPress Plugin Boilerplate
 * Description: This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:     1.0.0
 * Author:      Sourov
 * Author URI:  https://sourov.im/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: plugin-name
 *
 * @package WPBP
 */

/*
WordPress Plugin Boilerplate is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

WordPress Plugin Boilerplate is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WordPress Plugin Boilerplate. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define plugin __FILE__
 */
if ( ! defined( 'WPBP_PLUGIN_FILE' ) ) {
	define( 'WPBP_PLUGIN_FILE', __FILE__ );
}

/**
 * Include necessary files to initial load of the plugin.
 */
if ( ! class_exists( 'WPBP\Bootstrap' ) ) {
	require_once __DIR__ . '/includes/traits/trait-singleton.php';
	require_once __DIR__ . '/includes/class-bootstrap.php';
}

/**
 * Initialize the plugin functionality.
 *
 * @since  1.0.0
 * @return WPBP\Bootstrap
 */
function wp_boilerplate_plugin() {
	return WPBP\Bootstrap::instance();
}

// Call initialization function.
wp_boilerplate_plugin();
