	jQuery(function($){
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('#apply-filter').text('Searching results'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
				$('#response').css({
					  "position": "fixed", 
					  "top": "0",
					  "left": "0",
					  "width": "100%",
					  "height": "100%",
					  "background": "#f7f7f7",
					  "z-index": "10000",
					  "filter": "alpha(opacity=50)",
					  "transition": "all 0.5s ease",
					  "overflow-y": "scroll",

					  }); // insert data
				$( "#response" ).append( "<button class='close-btn custom-background bg-primary border-0 text-white position-fixed'>X</button" );
				$('#response').show();
				$('.close-btn').click(function () {
        		$('#response').hide();
    })

			}
		});
		return false;
	});
});