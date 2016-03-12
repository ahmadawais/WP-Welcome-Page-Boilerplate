<?php
/**
 * Welcome Page Init
 *
 * Welcome page initializer.
 *
 * @since 1.0.0
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}


/**
 * Activates the welcome page.
 *
 * Adds transient to manage the welcome page.
 *
 * @since 1.0.0
 */
function wpw_welcome_activate() {

    // Transient max age is 60 seconds.
    set_transient( '_welcome_redirect_wpw', true, 60 );

}

register_activation_hook( WPW_PLUGIN_FILE, 'wpw_welcome_activate' );


/**
 * Deactivates welcome page
 *
 * Deletes the welcome page transient.
 *
 * @since 1.0.0
 */
function wpw_welcome_deactivate() {

  delete_transient( '_welcome_redirect_wpw' );

}

register_deactivation_hook( WPW_PLUGIN_FILE, 'wpw_welcome_deactivate' );
