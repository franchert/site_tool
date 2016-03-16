$(function  () {
	var oldContainer;
	var group = $("ol.serialization").sortable({
		group: 'serialize',
		afterMove: function (placeholder, container) {
			if(oldContainer != container){
				if(oldContainer)
					oldContainer.el.removeClass("active");
				container.el.addClass("active");
				oldContainer = container;
			}
		},
		onDrop: function ($item, container, _super) {
			refresh();
			_super($item, container);
		}
	});
	$('ol.serialization').on('change','input',function(){
		var temp = 'data-' + $(this).attr('class');
		$(this).parent().attr(temp,$(this).val());
		$(this).attr('value',$(this).val());
		refresh();	});
	$('ol.serialization').on('click keypress','.fa-close',function(){
		$(this).parent().remove();
		refresh();
	});
	$('button.add').on('click keypress',function(){
		newid = 0;
		$('ol.serialization li').each(function(){
			if($(this).attr('data-id') >= newid){
				newid = $(this).attr('data-id');
			}
		})
		newid++;
		var newitem = "<li data-id='"+newid+"' data-menupos='8' data-title='New'><span class='fa fa-bars'></span><input class='title' value='New'><span tabindex='0' class='fa fa-close'></span><ol></ol></li>";
		$('#serialization > ol').prepend(newitem);
		refresh();
	});
	$('li').mouseover(function(e){
		e.stopPropagation();
		$(this).addClass('currentHover');
	});

	$('li').mouseout(function(){
		$(this).removeClass('currentHover');
	});
});
function refresh(){
	var data = $("ol.serialization").sortable("serialize").get();
	var jsonString = JSON.stringify(data, null, ' ');
	$('#output2').text(jsonString);
	$.ajax({
		type: "POST",
		data: {data:$('#output2').text()},
		url: 'create.php'
	})
	$('#output2').empty();
	$("ol.serialization").sortable("refresh");
}