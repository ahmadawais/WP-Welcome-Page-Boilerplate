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
$logo_img = WPW_URL . '/welcome/img/logo.png';
?>

<!-- Inline Styles! -->
<style>

	/* New Logo */
	.svg .wp-badge.welcome__logo {
	    color: #fff;
	    background: url( <?php echo $logo_img; ?> )  center 24px no-repeat #0092F9;
	    -webkit-background-size: contain;
	         -o-background-size: contain;
	            background-size: contain;
	}

	/* Responsive Youtube Video*/
	.embed-container {
		height        : 0;
		max-width     : 100%;
		padding-bottom: 56.25%;
		overflow      : hidden;
		position      : relative;
	}
	.embed-container iframe,
	.embed-container object,
	.embed-container embed {
		top     : 0;
		left    : 0;
		width   : 100%;
		height  : 100%;
		position: absolute;
	}

</style>

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


<!-- 	<div class="changelog">
		<h3><?php _e( 'Under the Hood' ); ?></h3>

		<div class="feature-section under-the-hood one-col">
			<div class="col">
				<h4><?php _e( 'REST API infrastructure' ); ?></h4>
				<div class="two-col-text">
					<p><?php _e( 'Infrastructure for the REST API has been integrated into core, marking a new era in developing with WordPress. The REST API serves to provide developers with a path forward for building and extending RESTful APIs on top of WordPress.' ); ?></p>
					<p><?php
						if ( current_user_can( 'install_plugins' ) ) {
							$url_args = array(
								'tab'       => 'plugin-information',
								'plugin'    => 'rest-api',
								'TB_iframe' => true,
								'width'     => 600,
								'height'    => 550
							);
							$plugin_link = '<a href="' . esc_url( add_query_arg( $url_args, network_admin_url( 'plugin-install.php' ) ) ) . '" class="thickbox">WordPress REST API</a>';
						} else {
							$plugin_link = '<a href="https://wordpress.org/plugins/rest-api">WordPress REST API</a>';
						}
						/* translators: WordPress REST API plugin link */
						printf( __( 'Infrastructure is the first part of a multi-stage rollout for the REST API. Inclusion of core endpoints is targeted for an upcoming release. To get a sneak peek of the core endpoints, and for more information on extending the REST API, check out the official %s plugin.' ), $plugin_link );
					?></p>
				</div>
			</div>
		</div>

		<div class="feature-section under-the-hood three-col">
			<div class="col">
				<h4><?php _e( 'Term meta' ); ?></h4>
				<p><?php
					/* translators: 1: add_term_meta() docs link, 2: get_term_meta() docs link, 3: update_term_meta() docs link */
					printf( __( 'Terms now support metadata, just like posts. See %1$s, %2$s, and %3$s for more information.' ),
						'<a href="https://developer.wordpress.org/reference/functions/add_term_meta"><code>add_term_meta()</code></a>',
						'<a href="https://developer.wordpress.org/reference/functions/get_term_meta"><code>get_term_meta()</code></a>',
						'<a href="https://developer.wordpress.org/reference/functions/update_term_meta"><code>update_term_meta()</code></a>'
			         );
				?></p>
			</div>
			<div class="col">
				<h4><?php _e( 'Comment query improvements' ); ?></h4>
				<p><?php
					/* translators: WP_Comment_Query class name */
					printf( __( 'Comment queries now have cache handling to improve performance. New arguments in %s make crafting robust comment queries simpler.' ), '<code>WP_Comment_Query</code>' );
				?></p>
			</div>
			<div class="col">
				<h4><?php _e( 'Term, comment, and network objects' ); ?></h4>
				<p><?php
					/* translators: 1: WP_Term class name, WP_Comment class name, WP_Network class name */
					printf( __( 'New %1$s, %2$s, and %3$s objects make interacting with terms, comments, and networks more predictable and intuitive in code.' ),
						'<code>WP_Term</code>',
						'<code>WP_Comment</code>',
						'<code>WP_Network</code>'
					);
				?></p>
			</div>
		</div>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? _e( 'Return to Updates' ) : _e( 'Return to Dashboard &rarr; Updates' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? _e( 'Go to Dashboard &rarr; Home' ) : _e( 'Go to Dashboard' ); ?></a>
		</div>

	</div>
 -->
</div>
<!-- HTML Ended! -->
