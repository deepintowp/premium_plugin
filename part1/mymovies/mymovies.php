<?php
/**
 * @package My Movies
 */
/*
Plugin Name: My Movies
Plugin URI: http://wordpress.org/my-movies
Description: Create movies. Rate movies, Movie widget
Version: 1.0.0
Author: Subhasish Manna
Author URI: http://http://b.subho.host22.com/
License: GPLv2 or later
Text Domain: mymovies
*/
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
//
define( 'SM_PATH', plugin_dir_path(__FILE__)   );

// setup 


//includes
include(SM_PATH.'/inc/activation.php');




//hook
register_activation_hook( __FILE__, 'sm_mymovies_activation' );
//shortcode










