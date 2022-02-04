<?php
/*
Plugin Name: Tainacan EVENTLY
Plugin URI: https://tainacan.org/
Description: Suport for Tainacan plugin to the EVENTLY theme - IMPORTANT - Do not remove
Author: wetah
Version: 0.0.1
Text Domain: tainacan-evently
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

if (! defined('WP_DEBUG') ) {
	die( 'Direct access forbidden.' );
}

/** Plugin version */
const TAINACAN_EVENTLY_VERSION = '0.0.1';

$plugin_root_url = plugin_dir_url(__FILE__);
define('TAINACAN_EVENTLY_PLUGIN_URL_PATH', $plugin_root_url);

$plugin_root_dir = plugin_dir_path(__FILE__);
define('TAINACAN_EVENTLY_PLUGIN_DIR_PATH', $plugin_root_dir);

/* Basic styles and script enqueues */
require TAINACAN_EVENTLY_PLUGIN_DIR_PATH . 'inc/enqueues.php';

/* Requires several settings, functions and helpers */
require TAINACAN_EVENTLY_PLUGIN_DIR_PATH . 'inc/plugin.php';
require TAINACAN_EVENTLY_PLUGIN_DIR_PATH . 'inc/navigation.php';

