<?php 

/*  @PACKAGE MYMOVIES
* 	USE: manage my_movie post type column.
*	DESCRIPTION: manage my_movie post type column.
*/

function sm_my_movie_column_setup($columns){
	$newcolumn = array();
	$newcolumn =  array(
        'cb' => '<input type="checkbox" />',
        'title' => __('Title', 'mymovies'),
        'rating' => __('Rating', 'mymovies'),
		'rating_count' => __('Rating Count', 'mymovies'),
		'author' => __('Author', 'mymovies'),
		'categories' => __('Categories', 'mymovies'),
		'tags' => __('Tags', 'mymovies'),
		'date' => __('Date'),
        
    );
	
	
	return $newcolumn;
}

function sm_my_movie_display_posts_column($column, $post_id ){
	
	switch ( $column ) {
		case 'rating':
			$sm_metavalues = get_post_meta( $post_id, 'sm_metavalues', true);
			echo $sm_metavalues['rating'];
			break;

		case 'rating_count':
			$sm_metavalues = get_post_meta( $post_id, 'sm_metavalues', true);
			echo $sm_metavalues['rating_count'];
			break;
	}
	
	
}