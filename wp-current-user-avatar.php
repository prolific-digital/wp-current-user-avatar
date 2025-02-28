<?php
/**
 * Plugin Name: WP Current User Avatar
 * Description: Provides a shortcode [current_user_avatar] to display the current logged-in user's avatar.
 * Version: 1.0.0
 * Author: Prolific Digital
 * Author URI: https://prolificdigital.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wp-current-user-avatar
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Define plugin constants
define('WP_CURRENT_USER_AVATAR_VERSION', '1.0.0');
define('WP_CURRENT_USER_AVATAR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WP_CURRENT_USER_AVATAR_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Load plugin text domain for translations
 */
function wp_current_user_avatar_load_textdomain() {
    load_plugin_textdomain(
        'wp-current-user-avatar',
        false,
        dirname(plugin_basename(__FILE__)) . '/languages/'
    );
}
add_action('plugins_loaded', 'wp_current_user_avatar_load_textdomain');

/**
 * Current User Avatar Shortcode
 * 
 * @param array $atts Shortcode attributes
 * @return string Avatar HTML or empty string if user not logged in
 */
function wp_current_user_avatar_shortcode($atts) {
    // If user is not logged in, return empty string
    if (!is_user_logged_in()) {
        return '';
    }
    
    // Parse attributes
    $atts = shortcode_atts(
        array(
            'size' => 96, // Default size
            'class' => '', // Additional CSS classes
            'alt' => '', // Alt text
        ),
        $atts,
        'current_user_avatar'
    );
    
    // Get current user
    $current_user = wp_get_current_user();
    
    // Get avatar HTML
    $avatar = get_avatar(
        $current_user->ID,
        absint($atts['size']),
        '',
        esc_attr(!empty($atts['alt']) ? $atts['alt'] : $current_user->display_name),
        array(
            'class' => esc_attr($atts['class']),
        )
    );
    
    return $avatar;
}
add_shortcode('current_user_avatar', 'wp_current_user_avatar_shortcode');