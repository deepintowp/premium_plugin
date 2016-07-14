<?php 


/*  @PACKAGE MYMOVIES
* 	USE: Handle ajax Request and save as movie post tpye.
*	DESCRIPTION: Handle ajax Request and save as movie post tpye.
*/

function procress_ajax_of_add_movie_by_user(){
	$response = array('moviestaus'=> 1);
	if( empty($_POST['title']) || empty($_POST['content'])  || empty($_POST['director'])  || empty($_POST['writer'])  || empty($_POST['stars'])  || empty($_POST['genre']) || empty($_POST['runtime'])){
		wp_send_json( $response );
	}
	$title = sanitize_text_field($_POST['title']);
	$content = wp_kses_post( $_POST['content'] );
	$sm_metavalues = array();
	$sm_metavalues['sm_director'] = sanitize_text_field($_POST['director']);
	$sm_metavalues['sm_writer'] = sanitize_text_field($_POST['writer']);
	$sm_metavalues['sm_stars'] = sanitize_text_field($_POST['stars']);
	$sm_metavalues['sm_genre'] = sanitize_text_field($_POST['genre']);
	$sm_metavalues['sm_runtime'] = sanitize_text_field($_POST['runtime']);
	$sm_metavalues['rating_count'] = 0;
	$sm_metavalues['rating']  = 0;
	$post_id = wp_insert_post( array(
								'post_type'=>'my_movie',
								'post_status'=>'publish',
								'post_title'=>$title,
								'post_content'=>$content
						));
	update_post_meta($post_id, 'sm_metavalues', $sm_metavalues);
	$response['moviestaus'] = 2;
	wp_send_json( $response );
	
	
	die();
}