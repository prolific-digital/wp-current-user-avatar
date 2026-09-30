<?php
/**
 * Plugin Name:       WP Current User Avatar
 * Plugin URI:        https://prolificdigital.com
 * Description:       Provides a [current_user_avatar] shortcode that displays the logged-in user's avatar.
 * Version:           1.1.0
 * Requires at least: 6.5
 * Requires PHP:      8.4
 * Author:            Prolific Digital
 * Author URI:        https://prolificdigital.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-current-user-avatar
 * Domain Path:       /languages
 * Update URI:        https://api.prolificdigital.io/api/update?plugin=wp-current-user-avatar
 *
 * @package WPCurrentUserAvatar
 */

defined( 'ABSPATH' ) || exit;

// Define plugin constants
define( 'WP_CURRENT_USER_AVATAR_VERSION', '1.1.0' );
define('WP_CURRENT_USER_AVATAR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WP_CURRENT_USER_AVATAR_PLUGIN_URL', plugin_dir_url(__FILE__));
define( 'WP_CURRENT_USER_AVATAR_PLUGIN_FILE', __FILE__ );

// Composer dependencies (plugin-update-checker). Present in release zips;
// in a git checkout run `composer install` first.
if ( is_readable( WP_CURRENT_USER_AVATAR_PLUGIN_DIR . 'vendor/autoload.php' ) ) {
	require_once WP_CURRENT_USER_AVATAR_PLUGIN_DIR . 'vendor/autoload.php';
}

require_once WP_CURRENT_USER_AVATAR_PLUGIN_DIR . 'includes/update-checker.php';

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
add_action('init', 'wp_current_user_avatar_load_textdomain');

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