var baseURL = '/';
var feedLoc = '/.includes/js/feed/feed.json';
var max_return = 10;
var sobj = {
	feeddata: [],
	init: function(){
		$.getJSON(feedLoc, function(data){
			sobj.feeddata = data;
		});
		$('#searchterm').keyup(function(e){
			if (e.keyCode == 40) {
				if ($('#results li.active').length == 0){
					$('#results ul li:first-child').addClass('active');
				}else {
					$('#results li.active').addClass('prev').removeClass('active').next().addClass('active');
					$('#results li.prev').removeClass('prev');
				}
			} else if (e.keyCode == 38){
				if ($('#results li.active').length == 0){
					$('#results ul li:last-child').addClass('active');
				}else{
					$('#results li.active').addClass('prev').removeClass('active').prev().addClass('active');
					$('#results li.prev').removeClass('prev');
				}
			} else if (e.keyCode == 13){
				if ($('#results li.active').length == 0) return;
				else $('#results li.active a').click();
			} else {
				if (typeof sobj.qto == "number") {
					window.clearTimeout(sobj.qto);
					delete sobj.qto;
				}
				sobj.searchFeed($(this).val());
			}
		});
		
		$('#searchclear').click(function(){
			if ($(this).hasClass('clear')) $('#searchterm').val('').keyup().focus();
		});
	},
	searchFeed: function(query) {
		var regexp = eval('/'+query+'/gi');
		var results = [];
		if (query != "") {
			$.each(sobj.feeddata, function(){
				if (this.title.search(regexp) != -1 || 
					(typeof this.keywords != "undefined" && this.keywords != null && this.keywords.search(regexp) != -1) ||
					(typeof this.tags != "undefined" && this.tags.search(regexp) != -1) ||
					(typeof this.categories != "undefined" && this.categories.search(regexp) != -1)
					){
					var result = {
						'type':'item',
						'url_slug':this.url_slug,
						'title':this.title,
						'programs':this.programs
					};
					result.ord = sobj.getOrder(this, query, 'item');
					results.push(result);
				}
			});
		}
		results.sort(function(a,b){
			if (a.ord > b.ord) return 1;
			else if (a.ord < b.ord) return -1;
			else {
				if (a.title.toLowerCase() > b.title.toLowerCase()) return 1;
				else return -1;
			}
		});
		sobj.displayResults(results, regexp);
	},
	getOrder: function(result, query, type) {
		var regexp = eval('/'+query+'/gi');
		var regexp2 = eval('/\\s'+query+'/gi');
		if (type == 'item') {
			var regexp_pos = result.title.search(regexp);
			if (regexp_pos == 0) return 1;
			else if (result.title.search(regexp2) != -1) return 2;
			else if (regexp_pos != -1) return 3;
			else if (typeof result.tags != "undefined" && result.tags.search (regexp) != -1) return 4;
			else if (typeof result.categories != "undefined" && result.categories.search (regexp) != -1) return 5;
			else if (typeof result.keywords != "undefined" && result.keywords.search (regexp) != -1) return 6;
			else return 7;
		}
	},
	displayResults: function(results, regexp) {
		if ($.isEmptyObject(results)){
			var html = '';
			$('#results').html(html);
			var query = $('#searchterm').val();
			if (query != "") {
				sobj.qto = window.setTimeout(sobj,1000);
			}
		} else {
			var html = '<ul>';
			if (regexp == '') {
				html += "<li class='back'><a href='javascript:;'>Back</a></li>";
			}
			var count = 0;
			$.each(results, function() {
				if (regexp != '' && count >= max_return) return;
				var program = this.programs.split(',');
				var string = '';
				for (var i = 0 ; i < program.length ; i++){
					string += '<span class="program-tag">'+program[i]+'</span>';
				}
				if (this.type == 'tag') var data = this.title;
				else var data = this.url_slug;
				if (regexp == '') html += "<li class='" + this.type + "' data-value='" + data + "'><a href='"+baseURL+data+"'>" + this.title + "</a></li>";
				else html += "<li class='" + this.type + "' data-value='" + data + "'><a href='"+baseURL+data+"'>" + this.title.replace(regexp, "<strong>" + '$&' + "</strong>") + string + "</a></li>";
				count++;
			});
			html += "</ul>";
			$('#results').html(html);
			$('#results ul li:first-child').addClass('active');
			$('#results li a').click(function(){
				window.location = baseURL+$(this).parent().attr('data-value');
			});
		}
	},
	trackEvent: function(key, value) {
		if (typeof _gaq != "undefined") {
			_gaq.push(['_trackEvent', 'Search', key, value]);
		}
	}
}
$(document).ready(function(){
	sobj.init();
});