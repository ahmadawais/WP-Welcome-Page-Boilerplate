<?php
/**
 * Welcome Logic
 *
 * Welcome code related logic.
 *
 * @since 	1.0.0
 * @package WPW
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Safe Welcome Page Redirect.
if ( ! function_exists( 'wpw_safe_welcome_redirect' ) ) {
	// Add to `admin_init`.
	add_action( 'admin_init', 'wpw_safe_welcome_redirect' );

	/**
	 * Safe Welcome Page Redirect.
	 *
	 * Safe welcome page redirect which happens only
	 * once and if the site is not a network or MU.
	 *
	 * @since 	1.0.0
	 */
	function wpw_safe_welcome_redirect() {
		// Bail if no activation redirect transient is present. (if ! true).
		if ( ! get_transient( '_welcome_redirect_wpw' ) ) {
			return;
		}

		// Delete the redirect transient.
		delete_transient( '_welcome_redirect_wpw' );

		// Bail if activating from network or bulk sites.
		if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
		return;
		}

		// Redirects to Welcome Page.
		// Redirects to `your-domain.com/wp-admin/plugin.php?page=wpw_welcome_page`.
		wp_safe_redirect( add_query_arg(
			array(
				'page' => 'wpw_welcome_page'
				),
			admin_url( 'plugins.php' )
		) );
	}
}

// Welcome Page Sub menu.
if ( ! function_exists( 'wpw_welcome_page' ) ) {
	// Add to `admin_menu`.
	add_action('admin_menu', 'wpw_welcome_page');

	/**
	 * Welcome Page Sub menu.
	 *
	 * Add the welcome page inside plugins menu.
	 *
	 * @since 	1.0.0
	 */
	function wpw_welcome_page() {
		// Add a global varaible to save the sub menu.
		global $wpw_sub_menu;

		// Sub menu itself.
		$wpw_sub_menu = add_submenu_page(
			'plugins.php', // The slug name for the parent menu (or the file name of a standard WordPress admin page).
			__( 'Welcome Page', 'WPW' ), // The text to be displayed in the title tags of the page when the menu is selected.
	    	__( 'Welcome Page', 'WPW' ), // The text to be used for the menu.
			'read', // The capability required for this menu to be displayed to the user.
			'wpw_welcome_page', // The slug name to refer to this menu by (should be unique for this menu).
			'wpw_welcome_page_content' ); // The function to be called to output the content for this page.
	}
}

// Welcome Page View.
if ( ! function_exists( 'wpw_welcome_page_content' ) ) {
	/**
	 * Welcome Page View.
	 *
	 * Welcome page content i.e. HTML/CSS/PHP.
	 *
	 * @since 	1.0.0
	 */
	function wpw_welcome_page_content() {

		// Welcome Page.
		if (file_exists( WPW_DIR . '/welcome/welcome-view.php') ) {
		   require_once( WPW_DIR . '/welcome/welcome-view.php' );
		}
	}
}

// CSS for Welcome Page.
if ( ! function_exists( 'wpw_styles' ) ) {
	// Enqueue the styles.
	add_action( 'admin_enqueue_scripts', 'wpw_styles' );

	/**
	 * Enqueue Styles.
	 *
	 * @param int $hook Hook suffix for the current admin page.
	 * @since 1.0.0
	 */
	function wpw_styles( $hook ) {
		// Access the global varaible with saved sub menu.
	    global $wpw_sub_menu;

	    // Add style to the welcome page only.
	    if ( $hook != $wpw_sub_menu ) {
	      return;
	    }

	    // Welcome page styles.
	    wp_enqueue_style(
	      'wpw_style',
	      WPW_URL . '/welcome/css/style.css',
	      array(),
	      WPW_VERSION,
	      'all'
	    );
	}
}
