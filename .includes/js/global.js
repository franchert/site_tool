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
	$('section.collapsable').each(function(e){
		if ($(this).height() > 500){
			$(this).append("<a class='view-more' href='#'>View More</a>");
			$(this).toggleClass('short');
		}
	});
	$(".featured .slide img").each(function(i, img) {
		$(img).css({
			left: ($(img).parent().width() - $(img).width()) / 2
		});
	});
	$('.responsive-table-wrapper').each(function(){
		var headers = Array();
		$(this).find('thead tr td').each(function(){
			headers.push(($(this)[0].textContent===undefined) ? $(this)[0].innerText : $(this)[0].textContent);
		});
		$(this).find('tbody tr').each(function(){
			var temp = 0;
			var attr = '';
			$(this).children('td').each(function(){
				$(this).attr('data-label',headers[temp]);
				attr = $(this).attr('colspan');
				if(typeof attr !== typeof undefined && attr !== false) {
					temp += parseInt($(this).attr('colspan'));
				}else{
					temp++;
				}
			});
			temp = 0;
		});
	});
	$('.view-more').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			e.preventDefault();
			$(this).parents('section').toggleClass('short');
			if($(this).parents('section').hasClass('short')){
				$(this).html('View More');
			}else{
				$(this).html('View Less');
			}
		};
	});
	$('.accordion h3').on('keypress click',function(e){
		$(this).toggleClass('active');
		var selector = $(this).next();
		$(this).next().toggleClass('open');
	});
	$('.drop-toggle').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			e.preventDefault();
			$(this).parents('.drop-container').toggleClass('open');
		};
		if (e.type === 'click') {
			$(this).blur();
		};
	});
	$('.subnav h2').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$(this).parents('.subnav').toggleClass('open');
			$('body').toggleClass('subnav-open');
		};
		if (e.type === 'click'){
			$(this).blur();
		}
	});
	/*toggles for subnav either added server-side or through js below*/
	$('.subnav .sn-toggle').on('keypress click',function(e){
		if (e.keyCode === 13 || e.type === 'click') {
			e.preventDefault();
			$(this).parent().toggleClass('open');
		};
		if (e.type === 'click'){
			$(this).blur();
		}
	});
	/* use this to add subnav toggling on the front-end*/
	/*$('.subnav ul li').each(function(){
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
	section_structure();
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

function section_structure(){
	mobile_break = 719;
	$('ul.section_structure').each(function(){
		var max_width = 100*(1/$(this).find("> li").length) + "%";
		$(this).find(' > li').each(function(){
			$(this).css('max-width',max_width);
		});
	});
	sec_struc_update(mobile_break);
	$('.section_structure.lg-tabs a').on('keypress click', function(e) {
		if (!isMobile(mobile_break)) {
			e.preventDefault();
			$(this).parent().siblings().removeClass('large-active');
			$(this).parent().addClass('large-active');
			var tot_h = $(this).parents('li').outerHeight() + $(this).next().outerHeight();
			$(this).parents('ul.section_structure').css('height',tot_h);
		}
	});
	$('.section_structure.sm-tabs a').on('keypress click', function(e) {
		if (isMobile(mobile_break)) {
			e.preventDefault();
			$(this).parent().siblings().removeClass('small-active');
			$(this).parent().addClass('small-active');
			var tot_h = $(this).parents('li').outerHeight() + $(this).next().outerHeight();
			$(this).parents('ul.section_structure').css('height',tot_h);
		}
	});
	$('.section_structure.lg-accs a').on('keypress click', function(e) {
		if (!isMobile(mobile_break)) {
			e.preventDefault();
			$(this).parent().siblings().removeClass('large-active');
			$(this).parent().addClass('large-active');
			$(this).parents('ul.section_structure').css('height','auto');
		}
	});
	$('.section_structure.sm-accs a').on('keypress click', function(e) {
		if (isMobile(mobile_break)) {
			e.preventDefault();
			$(this).parent().siblings().removeClass('small-active');
			$(this).parent().toggleClass('small-active');
			$(this).parents('ul.section_structure').css('height','auto');
		}
	});
	$('.section_structure.lg-anchor a').on('keypress click', function() {
		if (!isMobile(mobile_break)) {
			$(this).parents('ul.section_structure').css('height','auto');
		}
	});
	$('.section_structure.sm-anchor a').on('keypress click', function() {
		if (isMobile(mobile_break)) {
			$(this).parents('ul.section_structure').css('height','auto');
		}
	});
}
function sec_struc_update(width){
	if(width == undefined){
		width = 719;
	}
	$('ul.section_structure').each(function(){
		if(isMobile(width)){
			if ($(this).hasClass('sm-tabs')){
				equalHeight(jQuery('li',this));
				var ul_h = $(this).children('li').outerHeight();
				var open_h = $(this).find('.large-active > div').outerHeight() + ul_h + 20;
				$(this).css('height',open_h);
				a_height = $(this).find('li:first-child > a').height();
				$(this).find('> li:first-child > div').css('top',a_height)
					.css('position','relative')
					.css('margin-bottom',a_height);
			}else if ($(this).hasClass('sm-accs')){
				jQuery('li',this).height('auto');
				$(this).css('height','auto');
				$(this).css('top','initial');
			}else if ($(this).hasClass('sm-anchor')){
				equalHeight(jQuery('li a',this));
				a_height = $(this).find('li:first-child > a').height();
				$(this).find('> li:first-child > div').css('top',a_height)
					.css('position','relative')
					.css('margin-bottom',a_height);
				$(this).css('height','auto');
				$(this).css('top','initial');
			}
			if ($(this).hasClass('lg-anchor')){
				$(this).find('> li:first-child > div').css('top','initial')
					.css('position','static')
					.css('margin-bottom','initial');
			}
		}else{
			if ($(this).hasClass('lg-tabs')){
				equalHeight(jQuery('li',this));
				$(this).find('> li > div').each(function(){
					$(this).css('top',$(this).parent().height());
				});
				var ul_h = $(this).children('li').outerHeight();
				var open_h = $(this).find('.large-active > div').outerHeight() + ul_h + 20;
				$(this).css('height',open_h);
			}else if ($(this).hasClass('lg-accs')){
				jQuery('li',this).height('auto');
				$(this).find('> li > div').css('height','auto');
				$(this).css('height','auto');
				$(this).css('top','initial');
			}else if ($(this).hasClass('lg-anchor')){
				equalHeight(jQuery('li a',this));
				a_height = $(this).find('li:first-child > a').height();
				$(this).find('> li:first-child > div').css('top',a_height)
					.css('position','relative')
					.css('margin-bottom',a_height);
				$(this).css('height','auto');
				$(this).css('top','initial');
			}
			if ($(this).hasClass('sm-anchor')){
				$(this).find('> li:first-child > div').css('top','initial')
					.css('position','static')
					.css('margin-bottom','initial');
			}
		}
	});
}