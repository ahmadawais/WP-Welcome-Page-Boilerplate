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
 * Welcome Logic.
 *
 * @since 1.0.0
 */
if ( file_exists( WPW_DIR . '/welcome/welcome-logic.php' ) ) {
    require_once( WPW_DIR . '/welcome/welcome-logic.php' );
}
