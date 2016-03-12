<?php
/**
 * Welcome Logic
 *
 * @since 1.0.0
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}


/**
 * Welcome page redirect.
 *
 * Only happens once and if the site is not a network or multisite.
 *
 * @since 1.0.0
 */
function wpw_safe_welcome_redirect() {

    // Bail if no activation redirect transient is present.
    if ( ! get_transient( '_welcome_redirect_wpw' ) ) {

        return;

    }

  // Delete the redirect transient.
  delete_transient( '_welcome_redirect_wpw' );

  // Bail if activating from network or bulk sites.
  if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {

    return;

  }

  // Redirect to Welcome Page.
  // Redirects to `your-domain.com/wp-admin/plugin.php?page=wpw_welcome_page`.
  wp_safe_redirect( add_query_arg( array( 'page' => 'wpw_welcome_page' ), admin_url( 'plugins.php' ) ) );

}

add_action( 'admin_init', 'wpw_safe_welcome_redirect' );


/**
 * Adds welcome page sub menu.
 *
 * @since 1.0.0
 */
function wpw_welcome_page() {

    add_submenu_page(
        'plugins.php', // The slug name for the parent menu (or the file name of a standard WordPress admin page).
        __( 'Welcome Page', 'wpw' ), // The text to be displayed in the title tags of the page when the menu is selected.
        __( 'Welcome Page', 'wpw' ), // The text to be used for the menu.
        'read', // The capability required for this menu to be displayed to the user.
        'wpw_welcome_page', // The slug name to refer to this menu by (should be unique for this menu).
        'wpw_welcome_page_content' // The function to be called to output the content for this page.
    );

}

add_action( 'admin_menu', 'wpw_welcome_page' );


/**
 * Welcome page content.
 *
 * @since 1.0.0
 */
function wpw_welcome_page_content() {

    if ( file_exists( WPW_DIR . '/welcome/welcome-view.php') ) {

       require_once( WPW_DIR . '/welcome/welcome-view.php' );

    }
}
