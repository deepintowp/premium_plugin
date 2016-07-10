<?php 



/*  @PACKAGE MYMOVIES
* 	USE: create metabox.
*	DESCRIPTION: 1. create metabox on my_movie post type only.
*/

function sm_create_mtabox(){
	add_meta_box( 
		'my_movie_meta_id', 
		__('Movie Details', 'mymovies'), 
		'my_movie_meta_callback', 
		'my_movie', 
		'normal', 
		'default'
		);
}