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
		echo 'my name is Subhasish';
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	
}