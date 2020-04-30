jQuery(function($){
	$('#filter').submit(function(){
	var header = $('header');
	var shrinkIt = header.height();
	$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if ( scroll >= shrinkIt ) {
	header.addClass('shrunk');
	}
	else {
	header.removeClass('shrunk');
	}
	});
		});
});