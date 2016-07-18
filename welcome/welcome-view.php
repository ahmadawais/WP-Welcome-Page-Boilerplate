<?php
/**
 * Welcome Page View
 *
 * Welcome page content i.e. HTML/CSS/PHP.
 *
 * @since 	1.0.0
 * @package WPW
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Version.
$the_version = WPW_VERSION;

// Logo image.
$logo_img = WPW_URL . '/welcome/img/logo.png'; ?>

<!-- HTML Started! -->
<div class="wrap about-wrap">

	<h1><?php printf( __( 'WordPress Product &nbsp;%s' ), $the_version ); ?></h1>

	<div class="about-text">
		<?php printf( __( "WordPress Product's welcome page boilerplate for WordPress plugins." ), $the_version ); ?>
	</div>

	<div class="wp-badge welcome__logo"></div>

	<div class="feature-section one-col">
		<h2>Get Started</h2>
		<ul>
			<li><strong>Step #1:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
			<li><strong>Step #2:</strong> Cras sed sapien quam. Sed dapibus est id enim cilisis lig.</li>
			<li><strong>Step #3:</strong> tortor est congue ligula, eu adipiscing quam ligula ut purus.</li>
		</ul>
	 </div>

	<div class="feature-section one-col">
		<h2>What's Inside?</h2>
		<div class="headline-feature feature-video">
			<div class='embed-container'>
				<iframe src='https://www.youtube.com/embed/3RLE_vWJ73c' frameborder='0' allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<div class="feature-section two-col">
		<div class="col">
			<img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
			<h3><?php _e( 'Some Feature' ); ?></h3>
			<p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.' ); ?></p>
		</div>

		<div class="col">
			<img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
			<h3><?php _e( 'Some Feature' ); ?></h3>
			<p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.' ); ?></p>
		</div>
	</div>

	<div class="feature-section two-col">
		<div class="col">
			<img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
			<h3><?php _e( 'Some Feature' ); ?></h3>
			<p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.' ); ?></p>
		</div>
		<div class="col">
			<img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
			<h3><?php _e( 'Some Feature' ); ?></h3>
			<p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.' ); ?></p>
		</div>
	</div>
</div>
<!-- HTML Ended! -->
