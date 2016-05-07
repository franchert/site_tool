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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInBfYWNjb3JkaW9uL3BfYWNjb3JkaW9uLmRyLmpzIiwicF9kcm9wZG93bi9wX2Ryb3Bkb3duLmRyLmpzIiwicF9zdWJuYXYvcF9zdWJuYXYuZHIuanMiLCJwX3RhYmFjY29yZGlvbi9wX3RhYmFjY29yZGlvbi5kci5qcyIsInBfdGFic19tb2JpL3BfdGFic19tb2JpLmRyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUNKQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQ1RBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FDOUJBO0FDQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiMV9kci5oLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXHQkKCcuYWNjb3JkaW9uIGgzJykub24oJ2tleXByZXNzIGNsaWNrJyxmdW5jdGlvbihlKXtcclxuXHRcdCQodGhpcykudG9nZ2xlQ2xhc3MoJ2FjdGl2ZScpO1xyXG5cdFx0dmFyIHNlbGVjdG9yID0gJCh0aGlzKS5uZXh0KCk7XHJcblx0XHQkKHRoaXMpLm5leHQoKS50b2dnbGVDbGFzcygnb3BlbicpO1xyXG5cdH0pOyIsIlx0LyogcF9kcm9wZG93biB0b2dnbGUgKi9cclxuXHQkKCcuZHJvcC10b2dnbGUnKS5vbigna2V5cHJlc3MgY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG5cdFx0aWYgKGUud2hpY2ggPT09IDEzIHx8IGUudHlwZSA9PT0gJ2NsaWNrJykge1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdCQodGhpcykucGFyZW50cygnLmRyb3AtY29udGFpbmVyJykudG9nZ2xlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdH07XHJcblx0XHRpZiAoZS50eXBlID09PSAnY2xpY2snKSB7XHJcblx0XHRcdCQodGhpcykuYmx1cigpO1xyXG5cdFx0fTtcclxuXHR9KTsiLCJcdC8qIHBfc3VibmF2IHRvZ2dsZSBvbiBtb2JpbGUgKi9cclxuXHQkKCcuc3VibmF2IGgyJykub24oJ2tleXByZXNzIGNsaWNrJyxmdW5jdGlvbihlKXtcclxuXHRcdGlmIChlLndoaWNoID09PSAxMyB8fCBlLnR5cGUgPT09ICdjbGljaycpIHtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcuc3VibmF2JykudG9nZ2xlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdFx0JCgnYm9keScpLnRvZ2dsZUNsYXNzKCdzdWJuYXYtb3BlbicpO1xyXG5cdFx0fTtcclxuXHRcdGlmIChlLnR5cGUgPT09ICdjbGljaycpe1xyXG5cdFx0XHQkKHRoaXMpLmJsdXIoKTtcclxuXHRcdH1cclxuXHR9KTtcclxuXHQvKiBzdWJuYXYgdG9nZ2xpbmcgb24gdGhlIGZyb250LWVuZC5cclxuXHQgKiBmaXJzdCBzZWN0aW9uIHByb3ZpZGVzIHRvZ2dsaW5nIGJlaGF2aW9yLCBcclxuXHQgKiB1bmNvbW1lbnQgc2Vjb25kIHNlY3Rpb24gdG8gYWRkIEhUTUwgdG8gYWN0IHVwb25cclxuXHQqL1xyXG5cdCQoJy5zdWJuYXYgLnNuLXRvZ2dsZScpLm9uKCdrZXlwcmVzcyBjbGljaycsZnVuY3Rpb24oZSl7XHJcblx0XHRpZiAoZS5rZXlDb2RlID09PSAxMyB8fCBlLnR5cGUgPT09ICdjbGljaycpIHtcclxuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLnRvZ2dsZUNsYXNzKCdvcGVuJyk7XHJcblx0XHR9O1xyXG5cdFx0aWYgKGUudHlwZSA9PT0gJ2NsaWNrJyl7XHJcblx0XHRcdCQodGhpcykuYmx1cigpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cdC8qXHJcblx0JCgnLnN1Ym5hdiB1bCBsaScpLmVhY2goZnVuY3Rpb24oKXtcclxuXHRcdGlmKCQodGhpcykuY2hpbGRyZW4oJ3VsJykubGVuZ3RoID4gMCl7XHJcblx0XHRcdCQodGhpcykuYWRkQ2xhc3MoJ2hhc2NoaWxkJyk7XHJcblx0XHRcdCQodGhpcykucHJlcGVuZCgnPGJ1dHRvbiBjbGFzcz1cInNuLXRvZ2dsZVwiPjxzcGFuIGNsYXNzPVwiZmEgZmEtYW5nbGUtcmlnaHRcIj48L3NwYW4+PC9idXR0b24+Jyk7XHJcblx0XHR9XHJcblx0fSk7XHJcblx0Ki8iLCJcdHRhX2xvYWQoKTsiLCJcdCQoJy50YWJzLWNvbnRhaW5lciB1bC50YWJoZWFkZXJzIGxpIGEnKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe1xyXG5cdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cdFx0dmFyIGEgPSAkKHRoaXMpLmF0dHIoJ2hyZWYnKTtcclxuXHRcdHZhciBiID0gYS5zdWJzdHJpbmcoMSxhLmxlbmd0aCk7XHJcblx0XHRpZihpc01vYmlsZSgpKXtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5zaWJsaW5ncygpLnJlbW92ZUNsYXNzKCdvcGVuJyk7XHJcblx0XHRcdCQodGhpcykucGFyZW50KCkuYWRkQ2xhc3MoJ29wZW4nKTtcclxuXHRcdFx0aWYoJCh0aGlzKS5wYXJlbnRzKCcudGFicy1jb250YWluZXInKS5oYXNDbGFzcygnY29sbGFwc2FibGUnKSl7XHJcblx0XHRcdFx0aWYoISQodGhpcykucGFyZW50cygnLnRhYmhlYWRlcnMnKS5zaWJsaW5ncygnIycrYikuaGFzQ2xhc3MoJ29wZW4nKSl7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuc2libGluZ3MoJ2Rpdi5jb250ZW50cycpLmVhY2goZnVuY3Rpb24oaSl7XHJcblx0XHRcdFx0XHRcdCQodGhpcykucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdFx0XHRcdH0pO1xyXG5cdFx0XHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLnNpYmxpbmdzKCcjJytiKS5hZGRDbGFzcygnb3BlbicpO1xyXG5cdFx0XHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLmFkZENsYXNzKCdjb2xsYXBzZWQnKTtcclxuXHRcdFx0XHR9ZWxzZXtcclxuXHRcdFx0XHRcdCQodGhpcykucGFyZW50cygnLnRhYmhlYWRlcnMnKS5zaWJsaW5ncygnZGl2LmNvbnRlbnRzJykuZWFjaChmdW5jdGlvbihpKXtcclxuXHRcdFx0XHRcdFx0JCh0aGlzKS5yZW1vdmVDbGFzcygnb3BlbicpO1xyXG5cdFx0XHRcdFx0fSk7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuc2libGluZ3MoJyMnK2IpLnJlbW92ZUNsYXNzKCdvcGVuJyk7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykucmVtb3ZlQ2xhc3MoJ2NvbGxhcHNlZCcpO1xyXG5cdFx0XHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5yZW1vdmVDbGFzcygnb3BlbicpO1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0fWVsc2V7XHJcblx0XHRcdFx0aWYoISQodGhpcykucGFyZW50cygnLnRhYmhlYWRlcnMnKS5zaWJsaW5ncygnIycrYikuaGFzQ2xhc3MoJ29wZW4nKSl7XHJcblx0XHRcdFx0XHQkKHRoaXMpLnBhcmVudHMoJy50YWJoZWFkZXJzJykuc2libGluZ3MoJ2Rpdi5jb250ZW50cycpLmVhY2goZnVuY3Rpb24oaSl7XHJcblx0XHRcdFx0XHRcdCQodGhpcykucmVtb3ZlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdFx0XHRcdH0pO1xyXG5cdFx0XHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLnNpYmxpbmdzKCcjJytiKS5hZGRDbGFzcygnb3BlbicpO1xyXG5cdFx0XHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLmFkZENsYXNzKCdjb2xsYXBzZWQnKTtcclxuXHRcdFx0XHR9XHJcblx0XHRcdH1cclxuXHRcdH1lbHNle1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLnNpYmxpbmdzKCkucmVtb3ZlQ2xhc3MoJ29wZW4tZGVzaycpO1xyXG5cdFx0XHQkKHRoaXMpLnBhcmVudCgpLmFkZENsYXNzKCdvcGVuLWRlc2snKTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLnNpYmxpbmdzKCdkaXYuY29udGVudHMnKS5lYWNoKGZ1bmN0aW9uKGkpe1xyXG5cdFx0XHRcdCQodGhpcykucmVtb3ZlQ2xhc3MoJ29wZW4tZGVzaycpO1xyXG5cdFx0XHR9KTtcclxuXHRcdFx0JCh0aGlzKS5wYXJlbnRzKCcudGFiaGVhZGVycycpLnNpYmxpbmdzKCcjJytiKS5hZGRDbGFzcygnb3Blbi1kZXNrJyk7XHJcblx0XHR9XHJcblx0fSk7Il19
