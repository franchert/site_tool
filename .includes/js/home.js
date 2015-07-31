$(document).ready(function(){
	var userFeed = new Instafeed({
		get: 'user',
		userId: 184484553,
		accessToken: '184484553.467ede5.6cf4b8a45f1a4f39a2fc18d484cfcee9',
		limit: 9,
		template: '<div class="item"><a href="{{link}}" target="_blank"><img alt="{{caption}}" src="{{image}}" /></a></div>',
		resolution: 'standard_resolution'
	});
	userFeed.run();
});