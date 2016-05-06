$(document).ready(function(){
	$('.accordion h3').on('keypress click',function(e){
		$(this).toggleClass('active');
		var selector = $(this).next();
		$(this).next().toggleClass('open');
		
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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInBfYWNjb3JkaW9uL3BfYWNjb3JkaW9uLmpzIiwicF90YWJsZS9wX3RhYmxlLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQ0xBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiY29tcG9uZW50cy5qcyIsInNvdXJjZXNDb250ZW50IjpbIlx0JCgnLmFjY29yZGlvbiBoMycpLm9uKCdrZXlwcmVzcyBjbGljaycsZnVuY3Rpb24oZSl7XHJcblx0XHQkKHRoaXMpLnRvZ2dsZUNsYXNzKCdhY3RpdmUnKTtcclxuXHRcdHZhciBzZWxlY3RvciA9ICQodGhpcykubmV4dCgpO1xyXG5cdFx0JCh0aGlzKS5uZXh0KCkudG9nZ2xlQ2xhc3MoJ29wZW4nKTtcclxuXHRcdFxyXG5cdH0pOyIsIlx0JCgnLnJlc3BvbnNpdmUtdGFibGUtd3JhcHBlcicpLmVhY2goZnVuY3Rpb24oKXtcclxuXHRcdHZhciBoZWFkZXJzID0gQXJyYXkoKTtcclxuXHRcdCQodGhpcykuZmluZCgndGhlYWQgdHIgdGQnKS5lYWNoKGZ1bmN0aW9uKCl7XHJcblx0XHRcdGhlYWRlcnMucHVzaCgoJCh0aGlzKVswXS50ZXh0Q29udGVudD09PXVuZGVmaW5lZCkgPyAkKHRoaXMpWzBdLmlubmVyVGV4dCA6ICQodGhpcylbMF0udGV4dENvbnRlbnQpO1xyXG5cdFx0fSk7XHJcblx0XHQkKHRoaXMpLmZpbmQoJ3Rib2R5IHRyJykuZWFjaChmdW5jdGlvbigpe1xyXG5cdFx0XHR2YXIgdGVtcCA9IDA7XHJcblx0XHRcdHZhciBhdHRyID0gJyc7XHJcblx0XHRcdCQodGhpcykuY2hpbGRyZW4oJ3RkJykuZWFjaChmdW5jdGlvbigpe1xyXG5cdFx0XHRcdCQodGhpcykuYXR0cignZGF0YS1sYWJlbCcsaGVhZGVyc1t0ZW1wXSk7XHJcblx0XHRcdFx0YXR0ciA9ICQodGhpcykuYXR0cignY29sc3BhbicpO1xyXG5cdFx0XHRcdGlmKHR5cGVvZiBhdHRyICE9PSB0eXBlb2YgdW5kZWZpbmVkICYmIGF0dHIgIT09IGZhbHNlKSB7XHJcblx0XHRcdFx0XHR0ZW1wICs9IHBhcnNlSW50KCQodGhpcykuYXR0cignY29sc3BhbicpKTtcclxuXHRcdFx0XHR9ZWxzZXtcclxuXHRcdFx0XHRcdHRlbXArKztcclxuXHRcdFx0XHR9XHJcblx0XHRcdH0pO1xyXG5cdFx0XHR0ZW1wID0gMDtcclxuXHRcdH0pO1xyXG5cdH0pOyJdfQ==

});