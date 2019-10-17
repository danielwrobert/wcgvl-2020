<?php
/**
 * WCGVL-2019 Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wcgvl-2019
 */

add_action( 'wp_enqueue_scripts', 'wcgvl_2019_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function wcgvl_2019_enqueue_styles() {
	// Enqueue Parent Theme Styles
	wp_enqueue_style( 'campsite-2017-style', get_template_directory_uri() . '/style.css' );

	// Enqueue Child Theme Styles
	wp_enqueue_style( 'wcgvl-2019-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'campsite-2017-style' )
	);
}
