$(document).ready(function(){
	var numslides = $('#nav li').length;
	var ee = new EventEmitter();
	var scrollStartListener = function (slideNumber) {
		if(slideNumber!=0 && slideNumber!=(numslides+1)){
			$('#nav li a').each(function(){
				$(this).removeClass('active');
			});
			var slidto = '#nav li:nth-child('+slideNumber+') a';
			$(slidto).addClass('active');
		}
	}

	ee.addListener('scrollStart', scrollStartListener);
	$.smartscroll({
		mode: "vp", // "vp", "set"
		autoHash: false,
		sectionScroll: true,
		initialScroll: true,
		keepHistory: false,
		sectionWrapperSelector: ".section-wrapper",
		sectionClass: "section",
		animationSpeed: 300,
		headerHash: "header",
		breakpoint: 720,
		eventEmitter: ee,
		dynamicHeight: false
	});
	$('#nav li a').on('click',function(e){
		$('#nav li a').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 700);
			return false;
		}
	});
});