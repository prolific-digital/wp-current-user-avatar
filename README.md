# WP Current User Avatar

A simple WordPress plugin that provides a shortcode to display the current logged-in user's avatar.

Developed by [Prolific Digital](https://prolificdigital.com).

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

1. Upload the `wp-current-user-avatar` folder to the `/wp-content/plugins/` directory
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

## Changelog

### 1.0.0
* Initial release

## License

This plugin is licensed under the GPL v2 or later.

## Credits

* Developed by [Prolific Digital](https://prolificdigital.com)
* Built with love for the WordPress community