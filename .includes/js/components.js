/* this file contains content compiled through gulp
 *  from the /.includes/components subdirectories.
 *  Run "gulp" from the .includes folder to compile. */
$(document).ready(function(){
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
	ta_load();
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
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInBfYWNjb3JkaW9uL3BfYWNjb3JkaW9uLmRyLmpzIiwicF9kcm9wZG93bi9wX2Ryb3Bkb3duLmRyLmpzIiwicF9zdWJuYXYvcF9zdWJuYXYuZHIuanMiLCJwX3RhYmFjY29yZGlvbi9wX3RhYmFjY29yZGlvbi5kci5qcyIsInBfdGFic19tb2JpL3BfdGFic19tb2JpLmRyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUNKQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQ1RBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FDOUJBO0FDQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiZHIuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcdCQoJy5hY2NvcmRpb24gaDMnKS5vbigna2V5cHJlc3MgY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG5cdFx0JCh0aGlzKS50b2dnbGVDbGFzcygnYWN0aXZlJyk7XHJcblx0XHR2YXIgc2VsZWN0b3IgPSAkKHRoaXMpLm5leHQoKTtcclxuXHRcdCQodGhpcykubmV4dCgpLnRvZ2dsZUNsYXNzKCdvcGVuJyk7XHJcblx0fSk7IiwiXHQvKiBwX2Ryb3Bkb3duIHRvZ2dsZSAqL1xyXG5cdCQoJy5kcm9wLXRvZ2dsZScpLm9uKCdrZXlwcmVzcyBjbGljaycsZnVuY3Rpb24oZSl7XHJcblx0XHRpZiAoZS53aGljaCA9PT0gMTMgfHwgZS50eXBlID09PSAnY2xpY2snKSB7XHJcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcuZHJvcC1jb250YWluZXInKS50b2dnbGVDbGFzcygnb3BlbicpO1xyXG5cdFx0fTtcclxuXHRcdGlmIChlLnR5cGUgPT09ICdjbGljaycpIHtcclxuXHRcdFx0JCh0aGlzKS5ibHVyKCk7XHJcblx0XHR9O1xyXG5cdH0pOyIsIlx0LyogcF9zdWJuYXYgdG9nZ2xlIG9uIG1vYmlsZSAqL1xyXG5cdCQoJy5zdWJuYXYgaDInKS5vbigna2V5cHJlc3MgY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG5cdFx0aWYgKGUud2hpY2ggPT09IDEzIHx8IGUudHlwZSA9PT0gJ2NsaWNrJykge1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudHMoJy5zdWJuYXYnKS50b2dnbGVDbGFzcygnb3BlbicpO1xyXG5cdFx0XHQkKCdib2R5JykudG9nZ2xlQ2xhc3MoJ3N1Ym5hdi1vcGVuJyk7XHJcblx0XHR9O1xyXG5cdFx0aWYgKGUudHlwZSA9PT0gJ2NsaWNrJyl7XHJcblx0XHRcdCQodGhpcykuYmx1cigpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cdC8qIHN1Ym5hdiB0b2dnbGluZyBvbiB0aGUgZnJvbnQtZW5kLlxyXG5cdCAqIGZpcnN0IHNlY3Rpb24gcHJvdmlkZXMgdG9nZ2xpbmcgYmVoYXZpb3IsIFxyXG5cdCAqIHVuY29tbWVudCBzZWNvbmQgc2VjdGlvbiB0byBhZGQgSFRNTCB0byBhY3QgdXBvblxyXG5cdCovXHJcblx0JCgnLnN1Ym5hdiAuc24tdG9nZ2xlJykub24oJ2tleXByZXNzIGNsaWNrJyxmdW5jdGlvbihlKXtcclxuXHRcdGlmIChlLmtleUNvZGUgPT09IDEzIHx8IGUudHlwZSA9PT0gJ2NsaWNrJykge1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdCQodGhpcykucGFyZW50KCkudG9nZ2xlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdH07XHJcblx0XHRpZiAoZS50eXBlID09PSAnY2xpY2snKXtcclxuXHRcdFx0JCh0aGlzKS5ibHVyKCk7XHJcblx0XHR9XHJcblx0fSk7XHJcblx0LypcclxuXHQkKCcuc3VibmF2IHVsIGxpJykuZWFjaChmdW5jdGlvbigpe1xyXG5cdFx0aWYoJCh0aGlzKS5jaGlsZHJlbigndWwnKS5sZW5ndGggPiAwKXtcclxuXHRcdFx0JCh0aGlzKS5hZGRDbGFzcygnaGFzY2hpbGQnKTtcclxuXHRcdFx0JCh0aGlzKS5wcmVwZW5kKCc8YnV0dG9uIGNsYXNzPVwic24tdG9nZ2xlXCI+PHNwYW4gY2xhc3M9XCJmYSBmYS1hbmdsZS1yaWdodFwiPjwvc3Bhbj48L2J1dHRvbj4nKTtcclxuXHRcdH1cclxuXHR9KTtcclxuXHQqLyIsIlx0dGFfbG9hZCgpOyIsIlx0JCgnLnRhYnMtY29udGFpbmVyIHVsLnRhYmhlYWRlcnMgbGkgYScpLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7XHJcblx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHR2YXIgYSA9ICQodGhpcykuYXR0cignaHJlZicpO1xyXG5cdFx0dmFyIGIgPSBhLnN1YnN0cmluZygxLGEubGVuZ3RoKTtcclxuXHRcdGlmKGlzTW9iaWxlKCkpe1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLnNpYmxpbmdzKCkucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5hZGRDbGFzcygnb3BlbicpO1xyXG5cdFx0XHRpZigkKHRoaXMpLnBhcmVudHMoJy50YWJzLWNvbnRhaW5lcicpLmhhc0NsYXNzKCdjb2xsYXBzYWJsZScpKXtcclxuXHRcdFx0XHRpZighJCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLnNpYmxpbmdzKCcjJytiKS5oYXNDbGFzcygnb3BlbicpKXtcclxuXHRcdFx0XHRcdCQodGhpcykucGFyZW50cygnLnRhYmhlYWRlcnMnKS5zaWJsaW5ncygnZGl2LmNvbnRlbnRzJykuZWFjaChmdW5jdGlvbihpKXtcclxuXHRcdFx0XHRcdFx0JCh0aGlzKS5yZW1vdmVDbGFzcygnb3BlbicpO1xyXG5cdFx0XHRcdFx0fSk7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuc2libGluZ3MoJyMnK2IpLmFkZENsYXNzKCdvcGVuJyk7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuYWRkQ2xhc3MoJ2NvbGxhcHNlZCcpO1xyXG5cdFx0XHRcdH1lbHNle1xyXG5cdFx0XHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLnNpYmxpbmdzKCdkaXYuY29udGVudHMnKS5lYWNoKGZ1bmN0aW9uKGkpe1xyXG5cdFx0XHRcdFx0XHQkKHRoaXMpLnJlbW92ZUNsYXNzKCdvcGVuJyk7XHJcblx0XHRcdFx0XHR9KTtcclxuXHRcdFx0XHRcdCQodGhpcykucGFyZW50cygnLnRhYmhlYWRlcnMnKS5zaWJsaW5ncygnIycrYikucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdFx0XHRcdCQodGhpcykucGFyZW50cygnLnRhYmhlYWRlcnMnKS5yZW1vdmVDbGFzcygnY29sbGFwc2VkJyk7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudCgpLnJlbW92ZUNsYXNzKCdvcGVuJyk7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9ZWxzZXtcclxuXHRcdFx0XHRpZighJCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLnNpYmxpbmdzKCcjJytiKS5oYXNDbGFzcygnb3BlbicpKXtcclxuXHRcdFx0XHRcdCQodGhpcykucGFyZW50cygnLnRhYmhlYWRlcnMnKS5zaWJsaW5ncygnZGl2LmNvbnRlbnRzJykuZWFjaChmdW5jdGlvbihpKXtcclxuXHRcdFx0XHRcdFx0JCh0aGlzKS5yZW1vdmVDbGFzcygnb3BlbicpO1xyXG5cdFx0XHRcdFx0fSk7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuc2libGluZ3MoJyMnK2IpLmFkZENsYXNzKCdvcGVuJyk7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuYWRkQ2xhc3MoJ2NvbGxhcHNlZCcpO1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0fVxyXG5cdFx0fWVsc2V7XHJcblx0XHRcdCQodGhpcykucGFyZW50KCkuc2libGluZ3MoKS5yZW1vdmVDbGFzcygnb3Blbi1kZXNrJyk7XHJcblx0XHRcdCQodGhpcykucGFyZW50KCkuYWRkQ2xhc3MoJ29wZW4tZGVzaycpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuc2libGluZ3MoJ2Rpdi5jb250ZW50cycpLmVhY2goZnVuY3Rpb24oaSl7XHJcblx0XHRcdFx0JCh0aGlzKS5yZW1vdmVDbGFzcygnb3Blbi1kZXNrJyk7XHJcblx0XHRcdH0pO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuc2libGluZ3MoJyMnK2IpLmFkZENsYXNzKCdvcGVuLWRlc2snKTtcclxuXHRcdH1cclxuXHR9KTsiXX0=

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
