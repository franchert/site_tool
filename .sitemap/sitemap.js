$(function  () {
	var oldContainer;
	var group = $("ol").sortable({
		group: 'serialization',
		delay: 500,
		afterMove: function (placeholder, container) {
			if(oldContainer != container){
				if(oldContainer)
					oldContainer.el.removeClass("active");
				container.el.addClass("active");
				oldContainer = container;
			}
		},
		onDrop: function ($item, container, _super) {
			var data = group.sortable("serialize").get();
			var jsonString = JSON.stringify(data, null, ' ');
			$('#output2').text(jsonString);
			container.el.removeClass("active");
			_super($item, container);
			$.ajax({
				type: "POST",
				data: {data:$('#output2').text()},
				url: 'create.php'
			})
		}
	});
});