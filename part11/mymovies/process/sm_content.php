<?php 



/*  @PACKAGE MYMOVIES
* 	USE: filter my_movie post type content
*	DESCRIPTION: Save meta field.
*/

function sm_filter_content($content){
	if(!is_singular('my_movie')){
		return $content;
	}
	global $post, $wpdb;
	$sm_metavalues = get_post_meta( $post->ID, 'sm_metavalues', true);
	$meta_template = file_get_contents('my_movie_meta_template.php', true);
	$meta_template= str_replace('DIRECTOR_PH', $sm_metavalues['sm_director'], $meta_template  );
	$meta_template= str_replace('WRITER_PH', $sm_metavalues['sm_writer'], $meta_template  );
	$meta_template= str_replace('STARS_PH', $sm_metavalues['sm_stars'], $meta_template  );
	$meta_template= str_replace('GENRE_PH', $sm_metavalues['sm_genre'], $meta_template  );
	$meta_template= str_replace('RUNTIME_PH', $sm_metavalues['sm_runtime'], $meta_template  );
	$meta_template= str_replace('MOVIE_ID', $post->ID, $meta_template  );
	$meta_template= str_replace('RATING_VALUE', $sm_metavalues['rating'], $meta_template  );
	$user_ip = $_SERVER['REMOTE_ADDR'];
	
	$table_name = $wpdb->prefix.'movie_rating';
	$rating_count_query = "SELECT COUNT(*) FROM 
				     `$table_name` WHERE 
					 movie_id='".$post->ID."' AND 
					 user_ip='$user_ip'
					";
	$rating_count = $wpdb->get_var($rating_count_query);				
	if($rating_count > 0 ){
		$meta_template= str_replace('READONLY_PLACEHOLDER', 'data-rateit-readonly="true"', $meta_template  );
	}else{
		$meta_template= str_replace('READONLY_PLACEHOLDER', '', $meta_template  );
	}
	
	return $meta_template.$content;
}