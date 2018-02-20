<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Async load scripts */
/** Source: https://ikreativ.com/async-with-wordpress-enqueue/ */
function async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async"; 
    }
add_filter( 'clean_url', 'async_scripts', 11, 1 );

/** Defer load scripts */
function defer_scripts($url)
{
    if ( strpos( $url, '#defer') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#defer', '', $url );
    else
	return str_replace( '#defer', '', $url )."' defer='defer"; 
    }
add_filter( 'clean_url', 'defer_scripts', 11, 1 );

/** Enqueue custom scripts */
function kogarapress_scripts() {
    wp_enqueue_script( 'js-custom', get_template_directory_uri() . '/src/assets/js/custom.js', array(), '1.0.0', true );

    // Load responsive image script on Activities page only
    if (is_page('Activities')) {
		wp_enqueue_script( 'js-rwdImageMaps', get_template_directory_uri() . '/src/assets/js/jquery.rwdImageMaps.min.js', array(), '', true );
    }

    // Load Google Maps script
	if (is_page('pokemon-go')) {
		wp_enqueue_script( 'js-google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCKH618xCctn-z8Ielzso4YTJZqFd26q8o&callback=initMap#asyncload#defer', array(), '', true );
	}
    
}
add_action( 'wp_enqueue_scripts', 'kogarapress_scripts' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
