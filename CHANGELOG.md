# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.0] - 2026-09-29

### Changed
- Adopted the Prolific plugin standard. Updates now come from the Prolific Digital license server (`api.prolificdigital.io`). Set `PROLIFIC_LICENSE_KEY_WP_CURRENT_USER_AVATAR` in `wp-config.php` (or use the `prolific_license_key` filter) to receive updates.
- Translations load on `init` instead of `plugins_loaded`.
- Requires WordPress 6.5+ and PHP 8.4+.

### Added
- GPL-2.0 `LICENSE`, `readme.txt`, this changelog, coding-standards config and CI/release workflows.

## [1.0.0] - 2025-02-28

### Added
- Initial release: `[current_user_avatar]` shortcode with `size`, `class` and `alt` attributes.

[Unreleased]: https://github.com/prolific-digital/wp-current-user-avatar/compare/v1.1.0...HEAD
[1.1.0]: https://github.com/prolific-digital/wp-current-user-avatar/compare/bdcdb26...v1.1.0
[1.0.0]: https://github.com/prolific-digital/wp-current-user-avatar/commit/bdcdb26
