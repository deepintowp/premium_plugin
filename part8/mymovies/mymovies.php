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
//contstant
define( 'SM_PATH', plugin_dir_path(__FILE__)   );
define( 'SM_URL', __FILE__   );

// setup 


//includes
include(SM_PATH.'/inc/activation.php');
include(SM_PATH.'/inc/admin/init.php');
include(SM_PATH.'/inc/admin/admin_init.php');
include(SM_PATH.'/process/save_metabox.php');
include(SM_PATH.'/process/sm_content.php');
include(SM_PATH.'/process/enqueue.php');






//hook
register_activation_hook( __FILE__, 'sm_mymovies_activation' );
add_action( 'init', 'sm_register_post_type' );
add_action( 'admin_init', 'sm_admin_init' );
add_action( 'save_post_my_movie', 'sm_metafield_save', 10, 3 );
add_filter('the_content', 'sm_filter_content');
add_action('wp_enqueue_scripts', 'sm_front_end_style_n_scripts');
//shortcode










