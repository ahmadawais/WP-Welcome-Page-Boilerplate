<?php
/**
 * Welcome Page Init
 *
 * Welcome page initializer.
 *
 * @since 	1.0.0
 * @package WPW
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add the transient on plugin activation.
if ( ! function_exists( 'wpw_welcome_page' ) ) {
	// Hook that runs on plugin activation.
	register_activation_hook( WPW_PLUGIN_FILE, 'wpw_welcome_activate' );

	/**
	 * Add the transient.
	 *
	 * Add the welcome page transient.
	 *
	 * @since 1.0.0
	 */
	function wpw_welcome_activate() {
		// Transient max age is 60 seconds.
		set_transient( '_welcome_redirect_wpw', true, 60 );
	}
}


// Delete the Transient on plugin deactivation.
if ( ! function_exists( 'wpw_welcome_page' ) ) {
	// Hook that runs on plugin deactivation.
	register_deactivation_hook( WPW_PLUGIN_FILE, 'wpw_welcome_deactivate' );

	/**
	 * Delete the Transient on plugin deactivation.
	 *
	 * Delete the welcome page transient.
	 *
	 * @since   2.0.0
	 */
	function wpw_welcome_deactivate() {
	  delete_transient( '_welcome_redirect_wpw' );
	}
}


/**
 * Welcome Logic.
 *
 * @since 1.0.0
 */
if ( file_exists( WPW_DIR . '/welcome/welcome-logic.php' ) ) {
    require_once( WPW_DIR . '/welcome/welcome-logic.php' );
}
