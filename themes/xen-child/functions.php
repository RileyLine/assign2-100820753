<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function xenchild_wp_enqueue_styles() {
    $parenthandle = 'twenty-twenty-one-style';
    $theme = wp_get_theme();
    wp_enqueue_style(
		$parenthandle, 
		get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
		'xen-child-style', 
		get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
    wp_enqueue_style(
	    'custom-template-style', 
	    get_stylesheet_directory_uri() . '/custom-template-style.css'
    );
}

add_action( 'wp_enqueue_scripts', 'xenchild_wp_enqueue_styles' );