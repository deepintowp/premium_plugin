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
	
	
	
	
	
});