	/* p_subnav toggle on mobile */
	$('.subnav h2').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$(this).parents('.subnav').toggleClass('open');
			$('body').toggleClass('subnav-open');
		};
		if (e.type === 'click'){
			$(this).blur();
		}
	});
	/* subnav toggling on the front-end.
	 * first section provides toggling behavior, 
	 * uncomment second section to add HTML to act upon
	*/
	$('.subnav .sn-toggle').on('keypress click',function(e){
		if (e.keyCode === 13 || e.type === 'click') {
			e.preventDefault();
			$(this).parent().toggleClass('open');
		};
		if (e.type === 'click'){
			$(this).blur();
		}
	});
	/*
	$('.subnav ul li').each(function(){
		if($(this).children('ul').length > 0){
			$(this).addClass('haschild');
			$(this).prepend('<button class="sn-toggle"><span class="fa fa-angle-right"></span></button>');
		}
	});
	*/