<?php
/**
 * Plugin Name: WP Welcome Page Boilerplate
 * Plugin URI: http://AhmadAwais.com/
 * Description: Welcome page boilerplate for WordPress plugins.
 * Author: mrahmadawais, WPTie
 * Author URI: http://AhmadAwais.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/afragen/github-updater
 * GitHub Branch: master
 *
 * @package WPW
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin Version.
if ( ! defined( 'WPW_VERSION' ) ) {
    define( 'WPW_VERSION', '1.0.0' );
}

// Plugin Folder Name.
if ( ! defined( 'WPW_NAME' ) ) {
    define( 'WPW_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

// Plugin Dir including the folder.
if ( ! defined('WPW_DIR' ) ) {
    define( 'WPW_DIR', WP_PLUGIN_DIR . '/' . WPW_NAME );
}

// Plugin URL including the folder.
if ( ! defined('WPW_URL' ) ) {
    define( 'WPW_URL', WP_PLUGIN_URL . '/' . WPW_NAME );
}

// Plugin Root File.
if ( ! defined( 'WPW_PLUGIN_FILE' ) ) {
	define( 'WPW_PLUGIN_FILE', __FILE__ );
}


/**
 * Welcome file.
 *
 * @since 1.0.0
 */
if ( file_exists( WPW_DIR . '/welcome/welcome-init.php' ) ) {
    require_once( WPW_DIR . '/welcome/welcome-init.php' );
}
