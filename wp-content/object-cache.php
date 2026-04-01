<?php
/**
 * Bitpoke object cache loader for WordPress.
 *
 * This file must live in wp-content/object-cache.php
 */

$bitpoke_object_cache = WP_CONTENT_DIR . '/mu-plugins/stack-mu-plugin/src/object-cache.php';

if (file_exists($bitpoke_object_cache)) {
    require_once $bitpoke_object_cache;
} else {
    error_log('Bitpoke object-cache.php not found at: ' . $bitpoke_object_cache);
}
