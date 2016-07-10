<?php 



/*  @PACKAGE MYMOVIES
* 	USE: Save meta field.
*	DESCRIPTION: Save meta field.
*/


function sm_metafield_save($post_id, $post, $update){
	if(!$update){
		return;
	}
	
	$sm_metavalues = array();
	$sm_metavalues['sm_director'] = sanitize_text_field($_POST['sm_director']);
	$sm_metavalues['sm_writer'] = sanitize_text_field($_POST['sm_writer']);
	$sm_metavalues['sm_stars'] = sanitize_text_field($_POST['sm_stars']);
	$sm_metavalues['sm_genre'] = sanitize_text_field($_POST['sm_genre']);
	$sm_metavalues['sm_runtime'] = sanitize_text_field($_POST['sm_runtime']);
	
	update_post_meta($post_id, 'sm_metavalues', $sm_metavalues ); 
	
	
}