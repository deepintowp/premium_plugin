jQuery(document).ready(function($){
	$('#sm_movie_rating').bind('rated', function() { 
	var that = $(this);
	that.rateit('readonly', true );
	var formOrbject = {
			action: 'sm_rating_option',
			smid: that.data('smid'),
			rating: that.rateit('value')
		
		
	};
	$.post( ratingObj.ajaxurl, formOrbject, function(data){
		console.log(data.smstatus);
		
	});
	
	
	
	}); 

	$(document).on('submit', '#add_new_movie', function(e){
		e.preventDefault();
		$(this).hide();
		$('.movie_status').html('<div class="alert alert-info">Please wait, We are submiitng your movie.</div>');
		var moviedatas = {
			action: 'sm_add_movie_action',
			title: $('#sm__title').val(),
			content: tinymce.activeEditor.getContent(),
			director: $('#sm__director').val(),
			writer: $('#sm__writer').val(),
			stars: $('#sm__stars').val(),
			genre: $('#sm__genre').val(),
			runtime: $('#sm__run_time').val()
			
		};
		console.log(moviedatas);
		$.post(ratingObj.ajaxurl, moviedatas, function(data){
			if(data.moviestaus == 2){
				$('.movie_status').html('<div class="alert alert-success">Movie submitted successfully.</div>');
			}else{
				$('.movie_status').html('<div class="alert alert-danger">Some Problem. Movie not submitted.</div>');
				$('#add_new_movie').show();
			}
			
		});
		
	});
	
	
	
	
	
	
	
});