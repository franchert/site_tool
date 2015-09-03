$(document).ready(function(){
	subPos = $('.l-head').offset();
	stickyHeader(subPos);
	$('html').on('keypress click',function(e){
		if (e.keyCode === 13 || e.type === 'click') {
			if(!$(e.target).hasClass('search') && 
				!$(e.target).hasClass('search-toggle') && 
				!$(e.target).parents().hasClass('search-toggle') && 
				!$(e.target).parents().hasClass('search')){
					$('.l-head').removeClass('search-open');
			}
		};
	});
	$('.search-toggle').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$(this).blur();
			e.preventDefault();
			$(this).parents('.l-head').toggleClass('search-open');
			document.getElementById('as_q').focus();
		};
	});
	$('.mobi-toggle-wrapper').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$('header').toggleClass("mobi-open");
		};
	});
});

$( window ).resize(function() {
	stickyHeader(subPos);
});

$(window).scroll(function() {
	stickyHeader(subPos);
});

function stickyHeader(subPos){
	var topPos = $(document).scrollTop();
	var headHeight = $('.l-head').height();
	if($('body').hasClass('alert')){
		headHeight += $('header .alert .toggle').height() + 30;
		if($('header .alert').hasClass('closed')){
			topPos += 55;
		}
	}
	$('.l-page').css('margin-top',headHeight);
	if(topPos == 0){
		$('body').removeClass('sticky');
		$('.l-page').css('margin-top',0);
		$('.l-head').css('position','relative');
	}else if(120 < topPos){
		$('body').addClass('sticky');
		$('.l-head').css('position','fixed');
	}else{
		$('body').removeClass('sticky');
		$('.l-head').css('position','fixed');
	}
}
