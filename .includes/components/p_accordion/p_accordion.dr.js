	$('.accordion h3').on('keypress click',function(e){
		$(this).toggleClass('active');
		var selector = $(this).next();
		$(this).next().toggleClass('open');
	});