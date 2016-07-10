<?php 



/*  @PACKAGE MYMOVIES
* 	USE: filter my_movie post type content
*	DESCRIPTION: Save meta field.
*/

function sm_filter_content($content){
	if(!is_singular('my_movie')){
		return $content;
	}
	global $post;
	$sm_metavalues = get_post_meta( $post->ID, 'sm_metavalues', true);
	$meta_template = file_get_contents('my_movie_meta_template.php', true);
	$meta_template= str_replace('DIRECTOR_PH', $sm_metavalues['sm_director'], $meta_template  );
	$meta_template= str_replace('WRITER_PH', $sm_metavalues['sm_writer'], $meta_template  );
	$meta_template= str_replace('STARS_PH', $sm_metavalues['sm_stars'], $meta_template  );
	$meta_template= str_replace('GENRE_PH', $sm_metavalues['sm_genre'], $meta_template  );
	$meta_template= str_replace('RUNTIME_PH', $sm_metavalues['sm_runtime'], $meta_template  );
	
	return $meta_template.$content;
}