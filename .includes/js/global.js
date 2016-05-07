$(document).ready(function(){

	if($('body').hasClass('mini')){miniSite = true;}else{miniSite = false;}
	deskImage();
	if(!isMobile()){
		equalHeight('.matrix.overlay-cta > div .container');
	}

	/*turn off outline when clicked*/
/*	$(document).on('mousedown',function(e){
		$(e.target).css('outline',0);
	});*/

	/*not sure what this does, commented out until something breaks*/
/*	$(".featured .slide img").each(function(i, img) {
		$(img).css({
			left: ($(img).parent().width() - $(img).width()) / 2
		});
	});*/

	/* show/hide collapsable section */
	$('.collapsable').each(function(e){
		if ($(this).height() > 500){
			$(this).append("<a class='view-more' href='#'>View More</a>");
			$(this).toggleClass('short');
		}
	});
	$('.view-more').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			e.preventDefault();
			$(this).parents('.collapsable').toggleClass('short');
			if($(this).parents('.collapsable').hasClass('short')){
				$(this).html('View More');
			}else{
				$(this).html('View Less');
			}
		};
	});

	/*not sure what this does, commented out until something breaks*/
/*	$('.subsection button').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$(this).parents('.subsection').toggleClass('open');
		};
		if (e.type === 'click'){
			$(this).blur();
		}
	});*/
});

$( window ).resize(function() {
	if(isMobile()){
		equalHeight('.matrix.overlay-cta > div .container');
	}else{
		deskImage();
	}
});
$(window).scroll(function() {
	if ($(this).scrollTop() > 150) {
		$('.back-to-top:hidden').stop(true, true).fadeIn();
	} else {
		$('.back-to-top').stop(true, true).fadeOut();
	}
});

function isMobile(width) {
	if(width == undefined){
		width = 719;
	}
	if(window.innerWidth <= width) {
		return true;
	} else {
		return false;
	}
}
function equalHeight(path){
	$(path).height("auto");
	var max = Math.max.apply(null, 
		$(path).map(function () {
			return $(this).height();
		})
	);
	$(path).height(max);
}
function deskImage(){
	/*requires uploading two images, one for desktop and another for mobile (with a -mobi suffix).*/
	$(".mobile-image").each(function(){
		if(!$(this).next().is('img')){
			var alt = $(this).attr('alt')
			var txt1 = $(this).attr('src');
			//var txt2 = txt1.lastIndexOf('.');
			//var txt3 = txt1.slice(0,txt2) + "-desk" + txt1.slice(txt2);
			var txt3 = txt1.replace('-mobi.','.');
			$(this).after("<img class='desk-image' alt='"+alt+"' src='"+txt3+"' />");
		}
	});
}