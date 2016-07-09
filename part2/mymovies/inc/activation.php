<?php 


/*  @PACKAGE MYMOVIES
* 	USE: ALL FUNCTION HERE WILL TRIGGER WHEN THIS PLUGIN ACTIVATE.
*	DESCRIPTION: ALL FUNCTION HERE WILL TRIGGER WHEN THIS PLUGIN ACTIVATE.
*/

function sm_mymovies_activation (){
	
	if(version_compare(get_bloginfo('version'), '4.0.0', '<' )){
		wp_die('To activate this plugin you need to run atleast wordpress 4.0 or above version. update your wordprees version.');
	}
	
	
	
}