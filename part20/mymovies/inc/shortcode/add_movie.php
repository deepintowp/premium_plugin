<?php 

/*  @PACKAGE MYMOVIES
* 	USE: Create add_movie shortcode.
*	DESCRIPTION: Create add_movie shortcode.
*/



function sm_add_mpvie_shortcode(){
	$shortcode_tem = file_get_contents('add_movie_form.php', true);
	$editor = sm_movie_content_editor();
	
	$shortcode_tem = str_replace('SM_CONTENT_EDITOR', $editor, $shortcode_tem  );
	
	return $shortcode_tem;
	
	
}

function sm_movie_content_editor(){
	ob_start();
	wp_editor( '', 'smaddmovieeditorid' );
	$editor_content = ob_get_clean();
	return $editor_content;
}