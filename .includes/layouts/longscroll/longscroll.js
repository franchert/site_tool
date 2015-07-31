jQuery(document).ready(function () {
	jQuery('#nav a[href^="#"]').on('click', function(event) {
		var target = jQuery( jQuery(this).attr('href') );
		if( target.length ) {
			event.preventDefault();
			jQuery('html, body').animate({
				scrollTop: target.offset().top + 1
			}, 1000);
		}
	});
	jQuery('#content > section').waypoint(function(direction){
		jQuery('#nav a').each(function(index){
			jQuery(this).removeClass('active');
		});
		console.log(jQuery(this).attr('id'));
		var target_id = jQuery(this).attr('id').substring(1);
		//modify it if we're scrolling up (counterbalance of the +1 above)
		if(direction == 'up' && target_id > 1){
			target_id--;
		}
		//build the selector to activate
		var selector = '#nav li.a' + target_id + ' a';
		jQuery(selector).addClass('active');
	});
});