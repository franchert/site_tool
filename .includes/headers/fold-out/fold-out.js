$(document).ready(function(){
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
			if($('header').hasClass('mobi-open')){
				$('.utility').prependTo('.mobi-toggle-container');
			}else{
				$('.utility').appendTo('.main-nav-container');
			}
			$('header,body').toggleClass("mobi-open");
			//$('.utility, .main-nav').toggle(400);
		};
	});
	$('.main-nav-toggle').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$('.main-nav,body').toggleClass('tab-open');
		};
	});
});
$( window ).resize(function() {
	$('.utility').prependTo('.mobi-toggle-container');
	$('header,body').removeClass("mobi-open");
	$('.main-nav,body').removeClass('tab-open');
});
$(window).scroll(function() {
	stickyHeader();
});
function stickyHeader(){
	var topPos = $(document).scrollTop();
	if(120 < topPos){
		$('body').addClass('sticky');
	}else{
		$('body').removeClass('sticky');
	}
}