<?php 
include_once("../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = true;
$feed_search = true;
$layout = 'generic_inner';
$instafeed = true;
$mini = true;
$depth = 2;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/
$p_featured_header .="<div class='wrapper featured'><img src='https://placehold.it/1600x600.png'/><div class='column'><h2>Explore. </br>Experience.</h2></div></div>";
$p_content .="<h2>Welcome</h2>".p_imgcaption('left',200,200,NULL).p_paragraph(2);

$p_promo_sidebar .= "<section><h2>Have Any Questions?</h2>".p_promo(
	"button light",
	"Chat Now",
	null,
	null,
	null,
	"#",
	"comments"
)."</section>";
$p_promo_sidebar .= "<section><h2>Admissions Calendar</h2>".p_list(
	array(
		p_event(),
		p_event(),
		p_event()
	),
	'events-listing nodisc'
)."<a href='#' class='read-more'>View Admissions Calendar</a></section>";
$p_content_footer .="<section><div class='wrapper'><div class='column'>".p_matrix(
	"ug-admissions-featured",
	array(
		p_promo("generic","Visit The Campus",'Your first step is to submit an application for admission online. After that, requirements vary depending on whether you are a recent high school graduate, student transferring from another institution or returning adult.',NULL,'https://placehold.it/800x600.png','#','','',array(p_link('','#','Open Houses'),p_link('','#','Enhanced Visits'),p_link('','#','Information Sessions & Campus Tours'))),
		p_promo("generic","How to Apply",'Your first step is to submit an application for admission online. After that, requirements vary depending on whether you are a recent high school graduate',NULL,'https://placehold.it/800x600.png','#','','',array(p_link('','#','The Application Process'),p_link('','#','Apply Now'))),
		p_promo("generic","Financial Aid & Costs",'Your first step is to submit an application for admission online. After that, requirements vary depending on whether you are a recent high school graduate',NULL,'https://placehold.it/800x600.png',"#",'','',array(p_link('','#','Learn More'))),
	)
).'</div></div></section>';
$p_content_footer .="<section><div class='wrapper'><div class='column'><h2>Quick Stats</h2>".p_matrix(
	"ug-factoids",
	array(
		p_factoid("4 : 1"),
		p_factoid(),
		p_factoid(),
		p_factoid()
	)
)."</div></div></section>";
$p_t_1[1]['t'] = "<span class='fa fa-instagram'></span>";
$p_t_1[1]['b'] = '<div id="instafeed-undergrad"></div>';
$p_t_1[2]['t'] = "<span class='fa fa-youtube'></span>";
$p_t_1[2]['b'] = '<iframe width="420" height="315" src="https://www.youtube.com/embed/XQu8TTBmGhA" frameborder="0" allowfullscreen></iframe>';
$p_t_1[3]['t'] = "<span class='fa fa-facebook'></span>";
$p_t_1[3]['b'] = '<div class="fb-page" data-href="https://www.facebook.com/unewhaven" data-width="500" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/newhaven"><a href="https://www.facebook.com/unewhaven">University of New Haven</a></blockquote></div></div>';
$p_t_1[4]['t'] = "<span class='fa fa-twitter'></span>";
$p_t_1[4]['b'] = "<a class='twitter-timeline' href='https://twitter.com/UNH' data-widget-id='618779030846836736'>Tweets by @UNH</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";

$p_content_footer .="<section><div class='wrapper'><div class='column'>".p_matrix("ug-admissions",array(
	p_promo("overlay","Student Spotlight","Seema Bhat, MBA","","/.includes/images/seema-bhat.jpg","#",'','spotlight'),
	p_tabs("tab-1",$p_t_1,'active:0,','false'),
	p_promo("promo wrap","Download the Explore UNH App","Get to know the University of New Haven before you even set foot on campus! Start exploring now!",NULL,"https://placehold.it/50x100.png")
	)
).'</div></div></section>';
$p_content_footer .="<section><div class='wrapper'><div class='column'><h2>Awards & Recognitions</h2>".p_matrix("ug-awards",array(
	p_promo('genericv2','Military Friendly School','','','/.includes/images/military-friendly.png'),
	p_promo('genericv2','Colleges of Distinction</br>2014-2015','','','/.includes/images/colleges-distinction.png'),
	p_promo('genericv2','US News</br>Best Colleges','','','/.includes/images/us-news.png'),
	p_promo('genericv2','Military Times</br>Best For Vets 2014','','','/.includes/images/military-times.png'),
	p_promo('genericv2','The Princeton Review</br>Best Regional Colleges 2015','','','/.includes/images/princeton-review.png')
	)
).'</div></div></section>';

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>