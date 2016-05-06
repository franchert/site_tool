$(document).ready(function(){
	subPos = $('.l-head').offset();
	if($('body').hasClass('mini')){miniSite = true;}else{miniSite = false;}
	var nav_open = '';
	if(!isMobile()){
		deskImage();
		equalHeight('.matrix.overlay-cta > div .container');
	}else{
		deskImage();
	}
	/*turn off outline when clicked*/
/*	$(document).on('mousedown',function(e){
		$(e.target).css('outline',0);
	});*/
	$(".featured .slide img").each(function(i, img) {
		$(img).css({
			left: ($(img).parent().width() - $(img).width()) / 2
		});
	});


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

	/* p_accordion open/close */
	$('.accordion h3').on('keypress click',function(e){
		$(this).toggleClass('active');
		var selector = $(this).next();
		$(this).next().toggleClass('open');
	});

	/* p_dropdown toggle */
	$('.drop-toggle').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			e.preventDefault();
			$(this).parents('.drop-container').toggleClass('open');
		};
		if (e.type === 'click') {
			$(this).blur();
		};
	});

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


	$('.subsection button').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$(this).parents('.subsection').toggleClass('open');
		};
		if (e.type === 'click'){
			$(this).blur();
		}
	});
	$('.tabs-container ul.tabheaders li a').on('click',function(e){
		e.preventDefault();
		var a = $(this).attr('href');
		var b = a.substring(1,a.length);
		if(isMobile()){
			$(this).parent().siblings().removeClass('open');
			$(this).parent().addClass('open');
			if($(this).parents('.tabs-container').hasClass('collapsable')){
				if(!$(this).parents('.tabheaders').siblings('#'+b).hasClass('open')){
					$(this).parents('.tabheaders').siblings('div.contents').each(function(i){
						$(this).removeClass('open');
					});
					$(this).parents('.tabheaders').siblings('#'+b).addClass('open');
					$(this).parents('.tabheaders').addClass('collapsed');
				}else{
					$(this).parents('.tabheaders').siblings('div.contents').each(function(i){
						$(this).removeClass('open');
					});
					$(this).parents('.tabheaders').siblings('#'+b).removeClass('open');
					$(this).parents('.tabheaders').removeClass('collapsed');
					$(this).parent().removeClass('open');
				}
			}else{
				if(!$(this).parents('.tabheaders').siblings('#'+b).hasClass('open')){
					$(this).parents('.tabheaders').siblings('div.contents').each(function(i){
						$(this).removeClass('open');
					});
					$(this).parents('.tabheaders').siblings('#'+b).addClass('open');
					$(this).parents('.tabheaders').addClass('collapsed');
				}
			}
		}else{
			$(this).parent().siblings().removeClass('open-desk');
			$(this).parent().addClass('open-desk');
			$(this).parents('.tabheaders').siblings('div.contents').each(function(i){
				$(this).removeClass('open-desk');
			});
			$(this).parents('.tabheaders').siblings('#'+b).addClass('open-desk');
		}
	});
	ta_load();
});

$( window ).resize(function() {
	sec_struc_update();
	ta_update();
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

function ta_load(){
	$('.tabaccordion ul.ta_tabs > li > a').on('keypress click', function(e) {
		container_to_toggle = $(this).parents('.ta_tabs').siblings('.ta_container');
		if (isMobile()) {
			$(this).parents('.tabaccordion ul').css('height','auto');
			container_to_toggle.find('li').css('height','initial');
		}else{
			e.preventDefault();
			$(this).parent().siblings().removeClass('tab-active');
			$(this).parent().addClass('tab-active');
			active = $(this).attr('href').substring(1);
			container_to_toggle.children().removeClass('tab-active');
			container_to_toggle.children('#'+active).addClass('tab-active');
			var tot_h = container_to_toggle.find('.tab-active > div').outerHeight();
			container_to_toggle.css('height',0);
			container_to_toggle.css('height',tot_h);
		}
	});
	$('.tabaccordion.acc ul h3').on('keypress click', function() {
		if (isMobile()) {
			$(this).parent().siblings().removeClass('acc-active');
			$(this).parent().toggleClass('acc-active');
			//$(this).siblings().animate({height: $(this).get(0).scrollHeight}, 1000 );
			$(this).parents('.tabaccordion ul').css('height','auto');
		}else{
			$(this).parent().siblings().removeClass('tab-active');
			$(this).parent().addClass('tab-active');
			var tot_h = $(this).parents('li').outerHeight() + $(this).next().outerHeight();
			$(this).parents('.tabaccordion ul').css('height',tot_h);
		}
	});
	ta_update();
}
function ta_update(){
	$('.tabaccordion.acc ul li > div').each(function(){
		$(this).css('top',$(this).parent().height()+2);
	});
	if(isMobile()){
		$('.tabaccordion ul').each(function(e){
			$(this).css('height','auto');
			$('li',this).css('height','auto');
		});
	}else{
		$('.tabaccordion ul.ta_container').each(function(e){
			var open_h = $(this).find('.tab-active > div').outerHeight() + $(this).siblings('.ta_tabs').children('li').outerHeight();
			$(this).css('height',open_h);
		});
		$('.tabaccordion.acc ul').each(function(e){
			var open_h = $(this).find('.tab-active > div').outerHeight() + $(this).children('li').outerHeight();
			$(this).css('height',open_h);
			//equalHeight('li',this);
		});
	}
}

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