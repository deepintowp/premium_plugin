<?php 



/*  @PACKAGE MYMOVIES
* 	USE: Add styles and scripts in frontend.
*	DESCRIPTION: Add styles and scripts in frontend.
*/

function sm_front_end_style_n_scripts(){
	wp_enqueue_style('rateitcss', plugins_url( '/assets/rateit/scripts/rateit.css', SM_URL ));
	
	wp_enqueue_script('rateitjs', plugins_url( '/assets/rateit/scripts/jquery.rateit.min.js', SM_URL ), array('jquery')  );
	wp_enqueue_script('frontendjs', plugins_url( '/assets/js/front_end.js', SM_URL ), array('jquery'), '1.0', true  );
	 wp_localize_script( 'frontendjs', 'ratingObj', array(
				'ajaxurl'=> admin_url('admin-ajax.php')
	 ));
	
}