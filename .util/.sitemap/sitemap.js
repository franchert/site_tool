$(function  () {
	$('ol.serialization').on('click keypress','.fa-close',function(){
/*		var deleted = $(this).parent().attr('data-id');
		$.ajax({
			type: "POST",
			data: {data:deleted},
			url: 'delete.php'
		})*/
		$(this).parent().remove();
		$('button.save').addClass('unsaved');
	});
	var oldContainer;
	var group = $("ol.serialization").sortable({
		group: 'serialize',
		delay: 10,
		afterMove: function (placeholder, container) {
			if(oldContainer != container){
				if(oldContainer)
					oldContainer.el.removeClass("active");
				container.el.addClass("active");
				oldContainer = container;
			}
		},
		onDrop: function ($item, container, _super) {
			$('button.save').addClass('unsaved');
			_super($item, container);
		}
	});
	$('ol.serialization').on('change','input',function(){
		var temp = 'data-' + $(this).attr('class');
		$(this).parent().attr(temp,$(this).val());
		$(this).attr('value',$(this).val());
		$('button.save').addClass('unsaved');
	});
	$('button.add').on('click keypress',function(){
		newid = 0;
		$('ol.serialization li').each(function(){
			if($(this).attr('data-id') >= newid){
				newid = $(this).attr('data-id');
			}
		})
		newid++;
		var newitem = "<li data-id='"+newid+"' data-gen='' data-menupos='0' data-title='New'><span class='fa fa-bars'></span><input class='title' value='New'><span tabindex='0' class='fa fa-close'></span><ol></ol></li>";
		$('#serialization > ol').prepend(newitem);
		$('button.save').addClass('unsaved');
	});
	$('button.save').on('click keypress',function(){
		save();
	});
	$('button.generate').on('click keypress',function(){
		generate();
		alert("Structure generated!");
	});
	$('li').mouseover(function(e){
		e.stopPropagation();
		$(this).addClass('currentHover');
	});

	$('li').mouseout(function(){
		$(this).removeClass('currentHover');
	});
});
function save(){
	var data = $("ol.serialization").sortable("serialize").get();
	var jsonString = JSON.stringify(data, null, ' ');
	$('#output2').text(jsonString);
	$.ajax({
		type: "POST",
		data: {data:$('#output2').text()},
		url: 'create.php'
	})
	//$('#output2').empty();
	$("ol.serialization").sortable("refresh");
	$('button.save').removeClass('unsaved');
}
function generate(){
	save();
	$.ajax({
		type: "POST",
		url: 'generate.php'
	})
	//location.reload();
}