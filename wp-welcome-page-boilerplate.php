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
if ( ! defined( 'WPW_VERSION' ) ) {
    define( 'WPW_VERSION', '1.0.0' );
}

if ( ! defined( 'WPW_NAME' ) ) {
    define( 'WPW_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('WPW_DIR' ) ) {
    define( 'WPW_DIR', WP_PLUGIN_DIR . '/' . WPW_NAME );
}

if ( ! defined('WPW_URL' ) ) {
    define( 'WPW_URL', WP_PLUGIN_URL . '/' . WPW_NAME );
}


/**
 * Welcome file.
 *
 * @since 1.0.0
 */
if ( file_exists( WPW_DIR . '/welcome/welcome-init.php' ) ) {
    require_once( WPW_DIR . '/welcome/welcome-init.php' );
}


/**
 * Add a transient.
 *
 * Add the welcome page transient.
 *
 * @since 1.0.0
 */
function wpw_welcome_screen_activate() {
  set_transient( '_welcome_redirect_wpw', true );
}
register_activation_hook( __FILE__, 'wpw_welcome_screen_activate' );


/**
 * Plugin Deactivation.
 *
 * Delete the welcome page transient.
 *
 * @since   1.0.0
 * @package WPW
 */
function wpw_welcome_screen_deactivate() {
  delete_transient( '_welcome_redirect_wpw' );
}
register_deactivation_hook( __FILE__, 'wpw_welcome_screen_deactivate' );
