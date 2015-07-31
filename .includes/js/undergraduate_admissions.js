$(document).ready(function(){
	var userFeed = new Instafeed({
		target:'instafeed-undergrad',
		get: 'user',
		userId: 440589911,
		accessToken: '440589911.467ede5.9c2c542ddd0a430298838e495b779131',
		limit: 9,
		template: '<div class="item"><a href="{{link}}" target="_blank"><img alt="{{caption}}" src="{{image}}" /></a></div>',
		resolution: 'standard_resolution'
	});
	userFeed.run();
});