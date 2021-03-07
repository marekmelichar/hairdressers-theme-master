<?php

// Disable XML-RPC RSD link from WordPress Header
remove_action ('wp_head', 'rsd_link');

// Remove WordPress version number
function crunchify_remove_version() {
	return '';
}
add_filter('the_generator', 'crunchify_remove_version');

// Remove wlwmanifest link
remove_action( 'wp_head', 'wlwmanifest_link');

// Remove shortlink
remove_action( 'wp_head', 'wp_shortlink_wp_head');

// Remove query strings from all static resources
function crunchify_cleanup_query_string( $src ){ 
	$parts = explode( '?', $src ); 
	return $parts[0]; 
} 
add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 ); 
add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );

// Remove api.w.org relation link
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );