<?php
/**
 * ===============================
 * GUTENBERD OFF
 * ===============================
 *
 * @package BEGO
 * @since 1.0.0
 * @version 1.0.0
 */
// Disable Gutenberg
if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {	
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 100);	
} else {	
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false');	
}