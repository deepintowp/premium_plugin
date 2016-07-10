<?php 



/*  @PACKAGE MYMOVIES
* 	USE: admin area initilization
*	DESCRIPTION: 1. Intisilization of admin area before create meta. 
*/

function sm_admin_init(){
	include('create_metabox.php');
	include('my_movie_options.php');
	add_action( 'add_meta_boxes_my_movie', 'sm_create_mtabox' );
}