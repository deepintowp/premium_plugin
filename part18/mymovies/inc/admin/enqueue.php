<?php 



/*  @PACKAGE MYMOVIES
* 	USE: Admin Enqueue.
*	DESCRIPTION: Add style and scripts in admin area (only for my_movie custom post type).
*/


function sm_admin_style_n_scripts(){
	global $typenow;
	
	if($typenow !== 'my_movie'){
		return;
	}
	wp_enqueue_style('admin_bootstrap', plugins_url( '/assets/css/bootstrap.min.css', SM_URL ) );
	//wp_enqueue_script('admin_bootstrap_js', plugins_url( '/assets/js/bootstrap.min.js', SM_URL ), array('jquery'), '3.6', true );
}