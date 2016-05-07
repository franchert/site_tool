$( window ).resize(function() {
	ta_update();
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