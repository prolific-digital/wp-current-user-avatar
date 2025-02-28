<?php
/**
 * Uninstall WP Current User Avatar
 *
 * @package WP Current User Avatar
 * @author Prolific Digital
 * @license GPL-2.0+
 */

// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// This plugin doesn't store any data in the database, so no cleanup is necessary