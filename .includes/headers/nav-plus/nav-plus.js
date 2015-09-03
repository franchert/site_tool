
function calcWidth(id) {
	var navwidth = 0;
	var morewidth = $('#'+id+' > ul .more').outerWidth(true);
	$('#'+id+' > ul > li:not(.more)').each(function() {
			navwidth += $(this).outerWidth( true );
	});
	var availablespace = $('#'+id).outerWidth(true) - morewidth;
	if (navwidth > availablespace && availablespace > 0) {
		var lastItem = $('#'+id+' > ul > li:not(.more)').last();
		lastItem.attr('data-width', lastItem.outerWidth(true));
		lastItem.prependTo($('#'+id+' > ul .more ul'));
		calcWidth(id);
	} else {
		var firstMoreElement = $('#'+id+' > ul li.more li').first();
		if (navwidth + firstMoreElement.data('width') < availablespace) {
			firstMoreElement.insertBefore($('#'+id+' > ul .more'));
		}
	}
	
	if ($('#'+id+' .more li').length > 0) {
		$('#'+id+' .more').css('display','inline-block');
	} else {
		$('#'+id+' .more').css('display','none');
	}
}
$(window).on('resize load',function(){
	calcWidth('gateway');
	calcWidth('utility');
});
