$(document).ready(function(){
	miniSite = false;
	subPos = $('.l-head').offset();
	if($('body').hasClass('mini')){
		miniSite = true;
	}
	stickyHeader(subPos);
	var nav_open = '';
	if(!isMobile()){
		deskImage();
	}
	$('html').on('keypress click',function(e){
		if (e.keyCode === 13 || e.type === 'click') {
			if(!$(e.target).parents().is('.quick-links') && $('.quick-links li').hasClass('open')){
				$('.quick-links li').removeClass('open');
			};
			if(!$(e.target).hasClass('search') && !$(e.target).hasClass('search-toggle') && !$(e.target).parents().hasClass('search-toggle') && !$(e.target).parents().hasClass('search')){
				$('header').removeClass('open');
			}
		};
	});
	$('.alert .toggle').on('click',function(e){
		$(this).toggleClass('closed');
	});
	$('.search-toggle').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$(this).blur();
			e.preventDefault();
			$(this).parents('header').toggleClass('open');
			document.getElementById('as_q').focus();
		};
	});
	$('.quick-links h3').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		};
		if (e.type === 'click') {
			$(this).blur();
		};
	});
	$('section.collapsable').each(function(e){
		if ($(this).height() > 500){
			$(this).append("<a class='view-more' href='#'>View More</a>");
			$(this).toggleClass('short');
		}
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
	if(!isMobile()){
		$('.student-life .colorbox a').colorbox({
			title:function(){
				var title = $(this).children('.container').get(0).outerHTML;
				var string = "<div class='cbox-title'>"+title+"</div>"
				return string;
			},
			rel:'gallery'
		});
	}else{

	}
	$('.dropdown').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			e.preventDefault();
			$(this).parents('.drop-container').toggleClass('open');
		};
		if (e.type === 'click') {
			$(this).blur();
		};
	});
	$('.toggle-wrapper').on('keypress click',function(e){
		if (e.which === 13 || e.type === 'click') {
			$('header').toggleClass("mobi-open");
		};
	});
	$(".featured .slide img").each(function(i, img) {
		$(img).css({
			left: ($(img).parent().width() - $(img).width()) / 2
		});
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
	equalHeight('.matrix.overlay-cta > div .container');
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
	stickyHeader(subPos);
});
function isMobile() {
	if(window.innerWidth <= 719) {
		return true;
	} else {
		return false;
	}
}
/*
function equalHeight(path){
	var h_val = 0;
	$(path).each(function(e){
		$(this).height('initial');
		if($(this).height() > h_val){
			h_val = $(this).height();
		}
	});
	$(path).each(function(e){
		if (isMobile()){
			$(this).height('initial');
		}else{
			$(this).height(h_val);
		}
	});
}
*/
function equalHeight(path){
	if (isMobile()){
		$(path).height("auto");
	}else{
		var max = Math.max.apply(null, 
			$(path).map(function () {
				return $(this).height();
			})
		);
	}
	$(path).height(max);
}
function deskImage(){
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

function stickyHeader(subPos){
	var topPos = $(document).scrollTop();
	if(subPos.top = topPos){
		$('body').addClass('sticky');
	}else{
		$('body').removeClass('sticky');
	}
}