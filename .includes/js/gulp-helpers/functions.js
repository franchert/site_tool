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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInBfdGFiYWNjb3JkaW9uL3BfdGFiYWNjb3JkaW9uLmZ1bmN0aW9uLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJmdW5jdGlvbnMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKCB3aW5kb3cgKS5yZXNpemUoZnVuY3Rpb24oKSB7XHJcblx0dGFfdXBkYXRlKCk7XHJcbn0pO1xyXG5mdW5jdGlvbiB0YV9sb2FkKCl7XHJcblx0JCgnLnRhYmFjY29yZGlvbiB1bC50YV90YWJzID4gbGkgPiBhJykub24oJ2tleXByZXNzIGNsaWNrJywgZnVuY3Rpb24oZSkge1xyXG5cdFx0Y29udGFpbmVyX3RvX3RvZ2dsZSA9ICQodGhpcykucGFyZW50cygnLnRhX3RhYnMnKS5zaWJsaW5ncygnLnRhX2NvbnRhaW5lcicpO1xyXG5cdFx0aWYgKGlzTW9iaWxlKCkpIHtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiYWNjb3JkaW9uIHVsJykuY3NzKCdoZWlnaHQnLCdhdXRvJyk7XHJcblx0XHRcdGNvbnRhaW5lcl90b190b2dnbGUuZmluZCgnbGknKS5jc3MoJ2hlaWdodCcsJ2luaXRpYWwnKTtcclxuXHRcdH1lbHNle1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdCQodGhpcykucGFyZW50KCkuc2libGluZ3MoKS5yZW1vdmVDbGFzcygndGFiLWFjdGl2ZScpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLmFkZENsYXNzKCd0YWItYWN0aXZlJyk7XHJcblx0XHRcdGFjdGl2ZSA9ICQodGhpcykuYXR0cignaHJlZicpLnN1YnN0cmluZygxKTtcclxuXHRcdFx0Y29udGFpbmVyX3RvX3RvZ2dsZS5jaGlsZHJlbigpLnJlbW92ZUNsYXNzKCd0YWItYWN0aXZlJyk7XHJcblx0XHRcdGNvbnRhaW5lcl90b190b2dnbGUuY2hpbGRyZW4oJyMnK2FjdGl2ZSkuYWRkQ2xhc3MoJ3RhYi1hY3RpdmUnKTtcclxuXHRcdFx0dmFyIHRvdF9oID0gY29udGFpbmVyX3RvX3RvZ2dsZS5maW5kKCcudGFiLWFjdGl2ZSA+IGRpdicpLm91dGVySGVpZ2h0KCk7XHJcblx0XHRcdGNvbnRhaW5lcl90b190b2dnbGUuY3NzKCdoZWlnaHQnLDApO1xyXG5cdFx0XHRjb250YWluZXJfdG9fdG9nZ2xlLmNzcygnaGVpZ2h0Jyx0b3RfaCk7XHJcblx0XHR9XHJcblx0fSk7XHJcblx0JCgnLnRhYmFjY29yZGlvbi5hY2MgdWwgaDMnKS5vbigna2V5cHJlc3MgY2xpY2snLCBmdW5jdGlvbigpIHtcclxuXHRcdGlmIChpc01vYmlsZSgpKSB7XHJcblx0XHRcdCQodGhpcykucGFyZW50KCkuc2libGluZ3MoKS5yZW1vdmVDbGFzcygnYWNjLWFjdGl2ZScpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLnRvZ2dsZUNsYXNzKCdhY2MtYWN0aXZlJyk7XHJcblx0XHRcdC8vJCh0aGlzKS5zaWJsaW5ncygpLmFuaW1hdGUoe2hlaWdodDogJCh0aGlzKS5nZXQoMCkuc2Nyb2xsSGVpZ2h0fSwgMTAwMCApO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJhY2NvcmRpb24gdWwnKS5jc3MoJ2hlaWdodCcsJ2F1dG8nKTtcclxuXHRcdH1lbHNle1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLnNpYmxpbmdzKCkucmVtb3ZlQ2xhc3MoJ3RhYi1hY3RpdmUnKTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5hZGRDbGFzcygndGFiLWFjdGl2ZScpO1xyXG5cdFx0XHR2YXIgdG90X2ggPSAkKHRoaXMpLnBhcmVudHMoJ2xpJykub3V0ZXJIZWlnaHQoKSArICQodGhpcykubmV4dCgpLm91dGVySGVpZ2h0KCk7XHJcblx0XHRcdCQodGhpcykucGFyZW50cygnLnRhYmFjY29yZGlvbiB1bCcpLmNzcygnaGVpZ2h0Jyx0b3RfaCk7XHJcblx0XHR9XHJcblx0fSk7XHJcblx0dGFfdXBkYXRlKCk7XHJcbn1cclxuZnVuY3Rpb24gdGFfdXBkYXRlKCl7XHJcblx0JCgnLnRhYmFjY29yZGlvbi5hY2MgdWwgbGkgPiBkaXYnKS5lYWNoKGZ1bmN0aW9uKCl7XHJcblx0XHQkKHRoaXMpLmNzcygndG9wJywkKHRoaXMpLnBhcmVudCgpLmhlaWdodCgpKzIpO1xyXG5cdH0pO1xyXG5cdGlmKGlzTW9iaWxlKCkpe1xyXG5cdFx0JCgnLnRhYmFjY29yZGlvbiB1bCcpLmVhY2goZnVuY3Rpb24oZSl7XHJcblx0XHRcdCQodGhpcykuY3NzKCdoZWlnaHQnLCdhdXRvJyk7XHJcblx0XHRcdCQoJ2xpJyx0aGlzKS5jc3MoJ2hlaWdodCcsJ2F1dG8nKTtcclxuXHRcdH0pO1xyXG5cdH1lbHNle1xyXG5cdFx0JCgnLnRhYmFjY29yZGlvbiB1bC50YV9jb250YWluZXInKS5lYWNoKGZ1bmN0aW9uKGUpe1xyXG5cdFx0XHR2YXIgb3Blbl9oID0gJCh0aGlzKS5maW5kKCcudGFiLWFjdGl2ZSA+IGRpdicpLm91dGVySGVpZ2h0KCkgKyAkKHRoaXMpLnNpYmxpbmdzKCcudGFfdGFicycpLmNoaWxkcmVuKCdsaScpLm91dGVySGVpZ2h0KCk7XHJcblx0XHRcdCQodGhpcykuY3NzKCdoZWlnaHQnLG9wZW5faCk7XHJcblx0XHR9KTtcclxuXHRcdCQoJy50YWJhY2NvcmRpb24uYWNjIHVsJykuZWFjaChmdW5jdGlvbihlKXtcclxuXHRcdFx0dmFyIG9wZW5faCA9ICQodGhpcykuZmluZCgnLnRhYi1hY3RpdmUgPiBkaXYnKS5vdXRlckhlaWdodCgpICsgJCh0aGlzKS5jaGlsZHJlbignbGknKS5vdXRlckhlaWdodCgpO1xyXG5cdFx0XHQkKHRoaXMpLmNzcygnaGVpZ2h0JyxvcGVuX2gpO1xyXG5cdFx0XHQvL2VxdWFsSGVpZ2h0KCdsaScsdGhpcyk7XHJcblx0XHR9KTtcclxuXHR9XHJcbn0iXX0=
