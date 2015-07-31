<?php 
include_once("../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = true;
$feed_search = true;
$layout = 'one-column';
$instafeed = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/
	$page_h1 = $page_title;
	$p_one .= "<div class='wrapper'><div class='column'>
<!-- BEGIN LivePerson Monitor. -->
<script type='text/javascript'>
window.lpTag={site:'45915321',_v:'1.1',protocol:location.protocol,events:{bind:function(app,ev,fn){lpTag.defer(function(){lpTag.events.bind(app,ev,fn);});},trigger:function(app,ev,json){lpTag.defer(function(){lpTag.events.trigger(app,ev,json);});}},defer:function(fn){this._defL=this._defL||[];this._defL.push(fn);},load:function(src,chr,id){var t=this;setTimeout(function(){t._load(src,chr,id);},0);},_load:function(src,chr,id){var url=src;if(!src){url=this.protocol+'//'+((this.ovr&&this.ovr.domain)?this.ovr.domain:'lptag.liveperson.net')+'/tag/tag.js?site='+this.site;}var s=document.createElement('script');s.setAttribute('charset',chr?chr:'UTF-8');if(id){s.setAttribute('id',id);}s.setAttribute('src',url);document.getElementsByTagName('head').item(0).appendChild(s);},init:function(){this._timing=this._timing||{};this._timing.start=(new Date()).getTime();var that=this;if(window.attachEvent){window.attachEvent('onload',function(){that._domReady('domReady');});}else{window.addEventListener('DOMContentLoaded',function(){that._domReady('contReady');},false);window.addEventListener('load',function(){that._domReady('domReady');},false);}if(typeof(window._lptStop)=='undefined'){this.load();}},_domReady:function(n){if(!this.isDom){this.isDom=true;this.events.trigger('LPT','DOM_READY',{t:n});}this._timing[n]=(new Date()).getTime();}};lpTag.init();
</script>
<!-- END LivePerson Monitor. -->
<div id='LP_DIV_1343834916570' style='width:163px;height:49px;position:absolute;right:0;top:20px;z-index:0;'></div>
<h1>".$page_h1."</h1></div></div>";
	$p_one .= breadcrumb();
	$p_one .="<section><div class='wrapper'><div class='column'><div class='subsection'>".p_paragraph()."<h2>Applying online is easy! Choose from the options below to get started.</h2></div></div></div></section>";
	$p_one .="<section><div class='wrapper'><div class='column'>".p_subsection(
		'https://placehold.it/400x200.png',
		"Undergraduate Degrees",
		"Whether you're still in high school or are transferring from another college, we offer full and part-time opportunities for undergraduates from inside the U.S. and abroad. The admission process can begin as early as the end of your high school junior year. Click the 'Apply Now' button to find out more and get started.",
		"<button class='apply-now'>Apply Now</button>",
		"<h4>Student Type</h4>".p_list(
			array(
				p_subsection(
					null,
					'Full and Part-Time Graduate Students (U.S. Citizens)',
					p_paragraph('2',true,false),
					p_link('button',"#","Start My Application")
				),
				p_subsection(
					null,
					'International Graduate Students (Not U.S. Citizens)',
					p_paragraph('1',true,false),
					p_link('button',"#","Start My Application")
				),
				p_subsection(
					null,
					'Master of Engineering in Big Data (San Francisco)',
					p_paragraph('1',true,false),
					p_link('button',"#","Start My Application")
				),
			),
			"nodisc"
		)
	)."</div></div></section>";
	$p_one .="<section><div class='wrapper'><div class='column'>".p_subsection(
		'https://placehold.it/400x200.png',
		"Graduate Degrees",
		"Whether you're still in high school or are transferring from another college, we offer full and part-time opportunities for undergraduates from inside the U.S. and abroad. The admission process can begin as early as the end of your high school junior year. Click the 'Apply Now' button to find out more and get started.",
		"<button class='apply-now'>Apply Now</button>",
		"<h4>Student Type</h4>".p_list(
			array(
				p_subsection(
					null,
					'Full and Part-Time Graduate Students (U.S. Citizens)',
					p_paragraph('2',true,false),
					p_link('button',"#","Start My Application")
				),
				p_subsection(
					null,
					'International Graduate Students (Not U.S. Citizens)',
					p_paragraph('1',true,false),
					p_link('button',"#","Start My Application")
				),
				p_subsection(
					null,
					'Master of Engineering in Big Data (San Francisco)',
					p_paragraph('1',true,false),
					p_link('button',"#","Start My Application")
				),
			),
			"nodisc"
		)
	)."</div></div></section>";
	$p_one .="<section><div class='wrapper'><div class='column'>".p_subsection(
		'https://placehold.it/400x200.png',
		"Online Degree Programs",
		"Whether you're still in high school or are transferring from another college, we offer full and part-time opportunities for undergraduates from inside the U.S. and abroad. The admission process can begin as early as the end of your high school junior year. Click the 'Apply Now' button to find out more and get started.",
		"<button class='apply-now'>Apply Now</button>",
		"<h4>Student Type</h4>".p_list(
			array(
				p_subsection(
					null,
					'Full and Part-Time Graduate Students (U.S. Citizens)',
					p_paragraph('2',true,false),
					p_link('button',"#","Start My Application")
				),
				p_subsection(
					null,
					'International Graduate Students (Not U.S. Citizens)',
					p_paragraph('1',true,false),
					p_link('button',"#","Start My Application")
				),
				p_subsection(
					null,
					'Master of Engineering in Big Data (San Francisco)',
					p_paragraph('1',true,false),
					p_link('button',"#","Start My Application")
				),
			),
			"nodisc"
		)
	)."</div></div></section>";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>