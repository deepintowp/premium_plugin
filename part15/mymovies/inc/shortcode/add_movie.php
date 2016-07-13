<?php 

/*  @PACKAGE MYMOVIES
* 	USE: Create add_movie shortcode.
*	DESCRIPTION: Create add_movie shortcode.
*/



function sm_add_mpvie_shortcode(){
	$shortcode_tem = file_get_contents('add_movie_form.php', true);
	
	return $shortcode_tem;
	
	
}