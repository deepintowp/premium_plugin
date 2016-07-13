<?php 
/*  @PACKAGE MYMOVIES
* 	USE: use form corn job.
*	DESCRIPTION: create daily movie randomly.
*/

function sm_create_daily_movie(){
	global $wpdb;
	$movie_id = $wpdb->get_var("
					SELECT `ID` FROM ".$wpdb->prefix."posts 
					WHERE post_status='publish' AND post_type='my_movie' 
					ORDER BY rand() LIMIT 1
				");
	set_transient( 'daily_movie_id', $movie_id, 3600 );
	
}