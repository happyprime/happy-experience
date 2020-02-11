<?php
/**
 * Plugin Name: Happy Experience
 * Plugin URI:  https://github.com/happyprime/happy-experience/
 * Description: Adjusts the admin and popular plugins with Happy Prime preferences.
 * Version:     0.0.1
 * Author:      Jeremy Felt, Happy Prime
 * Author URI:  https://happyprime.co/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// This plugin, like WordPress, requires PHP 5.6 and higher.
if ( version_compare( PHP_VERSION, '5.6', '<' ) ) {
	add_action( 'admin_notices', 'he_admin_notice' );

	/**
	 * Display an admin notice if PHP is not 5.6.
	 */
	function he_admin_notice() {
		echo '<div class="error"><p>';
		esc_html_e( 'Happy Experience requires PHP 5.6 to function properly. Please upgrade PHP or deactivate the plugin.', 'he-feature-set' );
		echo '</p></div>';
	}

	return;
}

require_once __DIR__ . '/includes/wrangle-jetpack.php';
