=== WP Current User Avatar ===
Contributors: prolificdigital
Tags: avatar, shortcode, user, profile
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 8.4
Stable tag: 1.1.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Provides a [current_user_avatar] shortcode that displays the logged-in user's avatar.

== Description ==

Add `[current_user_avatar]` to any post, page or template to show the logged-in user's avatar. Nothing is output for visitors who are not logged in.

Attributes:

* `size`: avatar size in pixels (default 96)
* `class`: extra CSS classes
* `alt`: alt text (defaults to the user's display name)

Example: `[current_user_avatar size="150" class="profile-img" alt="User profile image"]`

The avatar comes from `get_avatar()`, so avatar plugins that filter it are respected. The plugin stores no data.

== Installation ==

1. Upload the `wp-current-user-avatar` folder to `/wp-content/plugins/`, or install the release zip from **Plugins > Add New > Upload Plugin**.
2. Activate the plugin and add the shortcode where you need it.
3. To receive automatic updates, add your license key to `wp-config.php`:
   `define( 'PROLIFIC_LICENSE_KEY_WP_CURRENT_USER_AVATAR', 'your-key' );`

== Changelog ==

= 1.1.0 =
* Updates now come from the Prolific Digital license server. Define `PROLIFIC_LICENSE_KEY_WP_CURRENT_USER_AVATAR` to receive them.
* Requires WordPress 6.5+ and PHP 8.4+.

= 1.0.0 =
* Initial release.
