<?php 



/*  @PACKAGE MYMOVIES
* 	USE: Handle ajax Request and save data in data base after user submit rating.
*	DESCRIPTION: Handle ajax Request and save data in data base after user submit rating.
*/

function procress_ajax_of_rating_by_user(){
	$response = array('smstatus'=> 1);
	$post_id = $_POST['smid'];
	$rating  = $_POST['rating'];
	$user_ip = $_SERVER['REMOTE_ADDR'];
	global $wpdb;
	$table_name = $wpdb->prefix.'movie_rating';
	$rating_count_query = "SELECT COUNT(*) FROM 
				     `$table_name` WHERE 
					 movie_id='$post_id' AND 
					 user_ip='$user_ip'
					";
	$rating_count = $wpdb->get_var($rating_count_query);				
	if($rating_count > 0 ){
		wp_send_json($response);
	}
	$wpdb->insert( 
		$table_name, 
					array( 
						'movie_id' => $post_id, 
						'rating' => $rating, 
						'user_ip' => $user_ip 
						
					), 
					array( 
						'%d', 
						'%f',
						'%s'
					) 
				);
		$sm_metavalues = get_post_meta( $post_id, 'sm_metavalues', true);
		$sm_metavalues['rating_count']++;
		$sm_metavalues['rating'] = round( $wpdb->get_var("
										SELECT AVG(`rating`) FROM `$table_name` 
										WHERE movie_id='$post_id'
		
									"), 1);
		update_post_meta($post_id, 'sm_metavalues', $sm_metavalues );							
		$response['smstatus'] = 2;
		wp_send_json($response);
	
	die();
}