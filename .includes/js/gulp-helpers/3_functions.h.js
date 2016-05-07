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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInBfdGFiYWNjb3JkaW9uL3BfdGFiYWNjb3JkaW9uLmZ1bmN0aW9uLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiIzX2Z1bmN0aW9ucy5oLmpzIiwic291cmNlc0NvbnRlbnQiOlsiZnVuY3Rpb24gdGFfbG9hZCgpe1xyXG5cdCQoJy50YWJhY2NvcmRpb24gdWwudGFfdGFicyA+IGxpID4gYScpLm9uKCdrZXlwcmVzcyBjbGljaycsIGZ1bmN0aW9uKGUpIHtcclxuXHRcdGNvbnRhaW5lcl90b190b2dnbGUgPSAkKHRoaXMpLnBhcmVudHMoJy50YV90YWJzJykuc2libGluZ3MoJy50YV9jb250YWluZXInKTtcclxuXHRcdGlmIChpc01vYmlsZSgpKSB7XHJcblx0XHRcdCQodGhpcykucGFyZW50cygnLnRhYmFjY29yZGlvbiB1bCcpLmNzcygnaGVpZ2h0JywnYXV0bycpO1xyXG5cdFx0XHRjb250YWluZXJfdG9fdG9nZ2xlLmZpbmQoJ2xpJykuY3NzKCdoZWlnaHQnLCdpbml0aWFsJyk7XHJcblx0XHR9ZWxzZXtcclxuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLnNpYmxpbmdzKCkucmVtb3ZlQ2xhc3MoJ3RhYi1hY3RpdmUnKTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5hZGRDbGFzcygndGFiLWFjdGl2ZScpO1xyXG5cdFx0XHRhY3RpdmUgPSAkKHRoaXMpLmF0dHIoJ2hyZWYnKS5zdWJzdHJpbmcoMSk7XHJcblx0XHRcdGNvbnRhaW5lcl90b190b2dnbGUuY2hpbGRyZW4oKS5yZW1vdmVDbGFzcygndGFiLWFjdGl2ZScpO1xyXG5cdFx0XHRjb250YWluZXJfdG9fdG9nZ2xlLmNoaWxkcmVuKCcjJythY3RpdmUpLmFkZENsYXNzKCd0YWItYWN0aXZlJyk7XHJcblx0XHRcdHZhciB0b3RfaCA9IGNvbnRhaW5lcl90b190b2dnbGUuZmluZCgnLnRhYi1hY3RpdmUgPiBkaXYnKS5vdXRlckhlaWdodCgpO1xyXG5cdFx0XHRjb250YWluZXJfdG9fdG9nZ2xlLmNzcygnaGVpZ2h0JywwKTtcclxuXHRcdFx0Y29udGFpbmVyX3RvX3RvZ2dsZS5jc3MoJ2hlaWdodCcsdG90X2gpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cdCQoJy50YWJhY2NvcmRpb24uYWNjIHVsIGgzJykub24oJ2tleXByZXNzIGNsaWNrJywgZnVuY3Rpb24oKSB7XHJcblx0XHRpZiAoaXNNb2JpbGUoKSkge1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLnNpYmxpbmdzKCkucmVtb3ZlQ2xhc3MoJ2FjYy1hY3RpdmUnKTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS50b2dnbGVDbGFzcygnYWNjLWFjdGl2ZScpO1xyXG5cdFx0XHQvLyQodGhpcykuc2libGluZ3MoKS5hbmltYXRlKHtoZWlnaHQ6ICQodGhpcykuZ2V0KDApLnNjcm9sbEhlaWdodH0sIDEwMDAgKTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiYWNjb3JkaW9uIHVsJykuY3NzKCdoZWlnaHQnLCdhdXRvJyk7XHJcblx0XHR9ZWxzZXtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5zaWJsaW5ncygpLnJlbW92ZUNsYXNzKCd0YWItYWN0aXZlJyk7XHJcblx0XHRcdCQodGhpcykucGFyZW50KCkuYWRkQ2xhc3MoJ3RhYi1hY3RpdmUnKTtcclxuXHRcdFx0dmFyIHRvdF9oID0gJCh0aGlzKS5wYXJlbnRzKCdsaScpLm91dGVySGVpZ2h0KCkgKyAkKHRoaXMpLm5leHQoKS5vdXRlckhlaWdodCgpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJhY2NvcmRpb24gdWwnKS5jc3MoJ2hlaWdodCcsdG90X2gpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cdHRhX3VwZGF0ZSgpO1xyXG59XHJcbmZ1bmN0aW9uIHRhX3VwZGF0ZSgpe1xyXG5cdCQoJy50YWJhY2NvcmRpb24uYWNjIHVsIGxpID4gZGl2JykuZWFjaChmdW5jdGlvbigpe1xyXG5cdFx0JCh0aGlzKS5jc3MoJ3RvcCcsJCh0aGlzKS5wYXJlbnQoKS5oZWlnaHQoKSsyKTtcclxuXHR9KTtcclxuXHRpZihpc01vYmlsZSgpKXtcclxuXHRcdCQoJy50YWJhY2NvcmRpb24gdWwnKS5lYWNoKGZ1bmN0aW9uKGUpe1xyXG5cdFx0XHQkKHRoaXMpLmNzcygnaGVpZ2h0JywnYXV0bycpO1xyXG5cdFx0XHQkKCdsaScsdGhpcykuY3NzKCdoZWlnaHQnLCdhdXRvJyk7XHJcblx0XHR9KTtcclxuXHR9ZWxzZXtcclxuXHRcdCQoJy50YWJhY2NvcmRpb24gdWwudGFfY29udGFpbmVyJykuZWFjaChmdW5jdGlvbihlKXtcclxuXHRcdFx0dmFyIG9wZW5faCA9ICQodGhpcykuZmluZCgnLnRhYi1hY3RpdmUgPiBkaXYnKS5vdXRlckhlaWdodCgpICsgJCh0aGlzKS5zaWJsaW5ncygnLnRhX3RhYnMnKS5jaGlsZHJlbignbGknKS5vdXRlckhlaWdodCgpO1xyXG5cdFx0XHQkKHRoaXMpLmNzcygnaGVpZ2h0JyxvcGVuX2gpO1xyXG5cdFx0fSk7XHJcblx0XHQkKCcudGFiYWNjb3JkaW9uLmFjYyB1bCcpLmVhY2goZnVuY3Rpb24oZSl7XHJcblx0XHRcdHZhciBvcGVuX2ggPSAkKHRoaXMpLmZpbmQoJy50YWItYWN0aXZlID4gZGl2Jykub3V0ZXJIZWlnaHQoKSArICQodGhpcykuY2hpbGRyZW4oJ2xpJykub3V0ZXJIZWlnaHQoKTtcclxuXHRcdFx0JCh0aGlzKS5jc3MoJ2hlaWdodCcsb3Blbl9oKTtcclxuXHRcdFx0Ly9lcXVhbEhlaWdodCgnbGknLHRoaXMpO1xyXG5cdFx0fSk7XHJcblx0fVxyXG59Il19
