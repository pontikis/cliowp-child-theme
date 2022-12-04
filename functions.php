<?php
/**
 * Theme functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cliowp-child-theme
 */

/**
 * Load the stylesheet from the parent theme.
 */
function cliowp_child_enqueue_parent_style() {
	$theme   = wp_get_theme( 'ClioWP' );
	$version = $theme->get( 'Version' );

	wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() . '/style.css', array(), $version );
}
add_action( 'wp_enqueue_scripts', 'cliowp_child_enqueue_parent_style' );
