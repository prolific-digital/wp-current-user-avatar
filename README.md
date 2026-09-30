# WP Current User Avatar

A simple WordPress plugin that provides a shortcode to display the current logged-in user's avatar.

Developed by [Prolific Digital](https://prolificdigital.com).

| | |
|---|---|
| Requires | WordPress 6.5+, PHP 8.4+ |
| Text domain | `wp-current-user-avatar` |
| License | GPL-2.0-or-later |

## Description

WP Current User Avatar is a lightweight plugin that lets you display the currently logged-in user's avatar anywhere on your WordPress site using a simple shortcode. This is perfect for member areas, user dashboards, or any personalized sections of your website.

## Features

- Simple shortcode implementation
- Customizable avatar size
- Add custom CSS classes to the avatar
- Custom alt text
- No output if user is not logged in
- Lightweight with minimal overhead

## Usage

Add the shortcode `[current_user_avatar]` to any post or page to display the current user's avatar.

If the user is not logged in, the shortcode will not display anything.

### Shortcode Attributes

The shortcode accepts the following attributes:

* `size`: Avatar size in pixels (default: 96)
* `class`: Additional CSS classes to add to the avatar
* `alt`: Custom alt text for the avatar image (defaults to user's display name)

### Examples

Basic usage:
```
[current_user_avatar]
```

Custom size (128px):
```
[current_user_avatar size="128"]
```

Custom CSS class:
```
[current_user_avatar class="my-custom-class rounded-avatar"]
```

Custom alt text:
```
[current_user_avatar alt="Profile picture"]
```

Combine multiple attributes:
```
[current_user_avatar size="150" class="profile-img" alt="User profile image"]
```

## Installation

1. Upload the `wp-current-user-avatar` folder to the `/wp-content/plugins/` directory, or install the `wp-current-user-avatar.zip` attached to a [GitHub release](https://github.com/prolific-digital/wp-current-user-avatar/releases)
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the shortcode `[current_user_avatar]` in your posts, pages, or template files

## For Developers

You can also use the shortcode in your theme files with the WordPress `do_shortcode` function:

```php
<?php echo do_shortcode('[current_user_avatar size="100" class="rounded"]'); ?>
```

## Frequently Asked Questions

### What if the user is not logged in?

If the user is not logged in, the shortcode will not display anything.

### Can I use this with Elementor, Beaver Builder, or other page builders?

Yes, this plugin works with any WordPress page builder that supports shortcodes.

### Does this work with custom avatar plugins?

Yes, this plugin uses WordPress's built-in `get_avatar()` function, which is compatible with most avatar plugins like WP User Avatar, Simple Local Avatars, etc.

## Updates

Updates are served by the Prolific Digital license server. Add the site's license key to `wp-config.php`:

```php
define( 'PROLIFIC_LICENSE_KEY_WP_CURRENT_USER_AVATAR', 'your-key' );
```

You can also supply the key with the `prolific_license_key` filter, which receives `( $key, 'wp-current-user-avatar' )`.

## Development

The dev site is the DDEV sandbox at `https://wp-sandbox.ddev.site`. Run commands in the container:

```sh
ddev exec -d /var/www/html/wp-content/plugins/wp-current-user-avatar composer install
ddev exec -d /var/www/html/wp-content/plugins/wp-current-user-avatar composer lint    # php -l on every file
ddev exec -d /var/www/html/wp-content/plugins/wp-current-user-avatar composer phpcs   # WordPress-Extra + PHPCompatibilityWP
```

`vendor/` is not committed. A git checkout needs `composer install` before the updater loads. The plugin itself still runs without it.

## Releasing

1. Bump the version in the plugin header, `WP_CURRENT_USER_AVATAR_VERSION` and `readme.txt` `Stable tag`.
2. Add a `## [x.y.z] - YYYY-MM-DD` section to `CHANGELOG.md` and a `= x.y.z =` entry to `readme.txt`.
3. Merge to `main`, then push a `vx.y.z` tag. The release workflow builds `wp-current-user-avatar.zip` (with `composer install --no-dev`, honoring `.distignore`) and attaches it to a GitHub Release.

CI and release logic live in the shared workflows in [`prolific-digital/.github`](https://github.com/prolific-digital/.github).
## Changelog

See [CHANGELOG.md](CHANGELOG.md). The plugin stores no data.

## License

This plugin is licensed under the GPL v2 or later.

## Credits

* Developed by [Prolific Digital](https://prolificdigital.com)
* Built with love for the WordPress community