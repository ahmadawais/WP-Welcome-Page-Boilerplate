<?php
/**
 * Plugin Name: WP Welcome Page Boilerplate
 * Plugin URI: http://code.tutsplus.com/articles/building-a-welcome-page-for-your-wordpress-product-introduction--cms-26013
 * Description: Welcome page boilerplate for WordPress plugins.
 * Version: 1.0.0
 * Author: mrahmadawais, WPTie
 * Author URI: http://AhmadAwais.com/
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wpw
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}


// Plugin version.
if ( ! defined( 'WPW_VERSION' ) ) {

    define( 'WPW_VERSION', '1.0.0' );

}

// Plugin folder name.
if ( ! defined( 'WPW_NAME' ) ) {

    define( 'WPW_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );

}

// Plugin directory, including the folder.
if ( ! defined( 'WPW_DIR' ) ) {

    define( 'WPW_DIR', WP_PLUGIN_DIR . '/' . WPW_NAME );

}

// Plugin url, including the folder.
if ( ! defined( 'WPW_URL' ) ) {

    define( 'WPW_URL', WP_PLUGIN_URL . '/' . WPW_NAME );

}

// Plugin root file.
if ( ! defined( 'WPW_PLUGIN_FILE' ) ) {

    define( 'WPW_PLUGIN_FILE', __FILE__ );

}


if ( file_exists( WPW_DIR . '/welcome/welcome-init.php' ) ) {

    require_once( WPW_DIR . '/welcome/welcome-init.php' );

}

if ( file_exists( WPW_DIR . '/welcome/welcome-logic.php' ) ) {

    require_once( WPW_DIR . '/welcome/welcome-logic.php' );

}
