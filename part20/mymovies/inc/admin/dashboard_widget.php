<?php 


function sm_my_movie_dashboard_widgets (){
	
	wp_add_dashboard_widget('sm_dashboard_widget_id', __('Latest Movies', 'mymovies'), 'sm_dashboard_widget_callback');
	
}

function sm_dashboard_widget_callback(){
	global $wpdb;
	$latest_movies = $wpdb->get_results( 
											"SELECT * FROM ".$wpdb->prefix."posts WHERE post_type='my_movie' AND post_status='publish' ORDER BY `ID` DESC LIMIT 5"
	
										);
		echo '<ul>';	
				foreach($latest_movies as $latest_movie){
						$sm_metavalues = get_post_meta( $latest_movie->ID, 'sm_metavalues', true);
					echo '<li><h1><a href="'.get_permalink($latest_movie->ID).'">'.get_the_title($latest_movie->ID).'</a> <b>Rating : '.$sm_metavalues['rating'].'</b></h1></li>';
				}
		
		echo '</ul>';								
										
}