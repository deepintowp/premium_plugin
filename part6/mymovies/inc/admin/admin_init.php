<?php 



/*  @PACKAGE MYMOVIES
* 	USE: admin area initilization
*	DESCRIPTION: 1. Intisilization of admin area before create meta. 
*/

function sm_admin_init(){
	include('create_metabox.php');
	include('my_movie_options.php');
	include('enqueue.php');
	add_action( 'add_meta_boxes_my_movie', 'sm_create_mtabox' );
	add_action('admin_enqueue_scripts', 'sm_admin_style_n_scripts');
}