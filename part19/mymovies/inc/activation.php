<?php 


/*  @PACKAGE MYMOVIES
* 	USE: ALL FUNCTION HERE WILL TRIGGER WHEN THIS PLUGIN ACTIVATE.
*	DESCRIPTION: ALL FUNCTION HERE WILL TRIGGER WHEN THIS PLUGIN ACTIVATE.
*/

function sm_mymovies_activation (){
	
	if(version_compare(get_bloginfo('version'), '4.0.0', '<' )){
		wp_die('To activate this plugin you need to run atleast wordpress 4.0 or above version. update your wordprees version.');
	}
	global $wpdb;
	$createratingtablesql = "CREATE TABLE IF NOT EXISTS `".$wpdb->prefix."movie_rating` (
							  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
							  `movie_id` bigint(20) unsigned NOT NULL,
							  `rating` float unsigned NOT NULL,
							  `user_ip` varchar(30) NOT NULL,
							  PRIMARY KEY (`id`) 
							) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
							
	require(ABSPATH.'/wp-admin/includes/upgrade.php');
	dbDelta($createratingtablesql);
	wp_schedule_event(time(), 'hourly', 'sm_daily_movie_hook');
}