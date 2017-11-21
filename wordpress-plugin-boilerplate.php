<?php
/**
 * Plugin Name:       Wordpress Plugin Boilerplate
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Sourov
 * Author URI:        http://sourov.im/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
*/

/*
Wordpress Plugin Boilerplate Integration is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Wordpress Plugin Boilerplate Integration is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Wordpress Plugin Boilerplate Integration. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/

// If this file is called directly, abort.
if(!defined('ABSPATH')){
	exit;
}

/**
 * Define root path
 */
if(!defined('TPLM_ROOT_PATH')){
	$mbh_root = plugin_dir_path(__FILE__);
	define('TPLM_ROOT_PATH', $mbh_root);
}

/**
 * Define Root url
 */
if(!defined('TPLM_ROOT_URL')){
	$root_url = plugin_dir_url(__FILE__);
	define('TPLM_ROOT_URL', $root_url);
}

/**
 * If php version is lower
 */
if(version_compare(phpversion(), '5.4', '<')){
	function plugin_boilerplate_php_version_notice(){
		?>
		<div class="error">
			<p>Wordpress Plugin Boilerplate requires PHP version 5.4 or newer, Please upgrade your PHP</p>
		</div>
		<?php
	}
	add_action('admin_notices', 'plugin_boilerplate_php_version_notice');
	return;
}

/**
 * Plugin all funcitons
 */
require TPLM_ROOT_PATH . 'inc/utility-functions.php';