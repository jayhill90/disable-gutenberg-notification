<?php
/**
 * Plugin Name:     Disable Gutenberg Notification
 * Plugin URI:      https://testinproduction.systems
 * Description:     Removes the Try Gutenberg notification on the dashboard for WP 4.8+
 * Author:          Jay Hill
 * Author URI:      https://wpdev.life
 * Text Domain:     disable-gutenberg-notification
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Disable_Gutenberg_Notification
 */

remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
