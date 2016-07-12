<?php 
/*  @PACKAGE MYMOVIES
* 	USE: Deactivation time uses.
*	DESCRIPTION: All function here will trigger on the time of deactivation.
*/



function sm_mymovies_deactivation(){
	wp_clear_scheduled_hook( 'sm_daily_movie_hook' ); 
}