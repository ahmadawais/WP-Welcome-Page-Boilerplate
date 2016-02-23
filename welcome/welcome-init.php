<?php
/**
 * Welcome Page Init
 *
 * Welcome page initializer.
 *
 * @since 	1.0.0
 * @package WPw
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Add a transient.
 *
 * Add the welcome page transient.
 *
 * @since 1.0.0
 */
function wpw_welcome_activate() {

	// Transient max age is 60 seconds.
	set_transient( '_welcome_redirect_wpw', true, 60 );
}
register_activation_hook( WPW_PLUGIN_FILE, 'wpw_welcome_activate' );


/**
 * Plugin Deactivation.
 *
 * Delete the welcome page transient.
 *
 * @since   1.0.0
 * @package WPW
 */
function wpw_welcome_deactivate() {
  delete_transient( '_welcome_redirect_wpw' );
}
register_deactivation_hook( WPW_PLUGIN_FILE, 'wpw_welcome_deactivate' );


/**
 * Welcome Logic.
 *
 * @since 1.0.0
 */
if ( file_exists( WPW_DIR . '/welcome/welcome-logic.php' ) ) {
    require_once( WPW_DIR . '/welcome/welcome-logic.php' );
}
