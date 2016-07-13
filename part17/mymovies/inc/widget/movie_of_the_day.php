<?php 

class SM_motd_widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'SM_motd_widget',
			'description' => __('Randomly Select a movie from database everyday.',  'mymovies' )
		);
		parent::__construct( 'SM_motd_widget', __('Movie of the Day', 'mymovies'), $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		$title = $instance['title'] ? $instance['title'] : __('MOVIE OF THE DAY', 'mymovies');
		
		$daily_movie_id =  get_transient( 'daily_movie_id' );
		
		echo $args['before_widget'];
		echo $args['before_title'];
		echo $title;
		echo $args['after_title'];
		echo '<h4 class="daily_movie_title"><a href="'.get_permalink( $daily_movie_id ).'">'.get_the_title($daily_movie_id).'</a></h4>';
		echo $args['after_widget'];
		
		
		
	} 

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$title = $instance['title'] ? $instance['title'] : __('MOVIE OF THE DAY', 'mymovies');
	}

	
}