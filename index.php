<?php 
include_once("./settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = true;
$feed_search = true;
$layout = 'one-column';
$instafeed = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/

/*array of slides for featured slider*/
$p_s = array(
	f_slide('featured',"Featured Story Headline","/.includes/images/unh-slider01-mobi.jpg","trophy","Body copy for teh featured story being showcased. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.",true),
	f_slide('featured',"Class of 2015 Looks to the Future","/.includes/images/unh-slider03-mobi.jpg","clock-o",'I cannot thank UNH enough for providing me the skills I needed in order to prepare for life after graduation, says Eric St. Amand, who was among the more than 1,300 students who accepted their degrees.',true),
	f_slide('featured',"Nation's First Master's in Forensic Technology","/.includes/images/unh-slider05-mobi.jpg","pagelines","UNH will offer a groundbreaking degree beginning in the fall that combines the in-depth science and technology aspects of law enforcement with standard police practices, equipping students with the skills to perform high-end laboratory work in the field.",true),
	f_slide('featured',"Featured Story Headline","/.includes/images/unh-slider04-mobi.jpg","pagelines","Body copy for teh featured story being showcased. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.",true)
);
/*add featured slider to page*/
$p_one .= p_slider('slide-0',$p_s,$type="featured");

/*news boxes*/
$p_one .= "<div class='column'>";
$p_one .= "<div class='variable-matrix'>";

/*news & events tabs*/
$p_n_1[1]['t'] = "News";
$p_n_1[1]['b'] = p_list(
	array(
		p_text_image_intro("imgtitle","Nearly 100 Students Inducted into society for experiential education","experiential education",NULL,"https://placehold.it/100x100.png","#"),
		p_text_image_intro("imgtitle","Jeknavorian chosen for distinguished service award in art education","experiential education",NULL,"https://placehold.it/100x100.png","#"),
		p_text_image_intro("imgtitle","Painter speaks at Lyme Academy College of Fine Arts commencement","experiential education",NULL,"https://placehold.it/100x100.png",NULL),
	),
	"news-listing nodisc"
);
$p_n_1[1]['b'] .= "<a class='read-more' href='#'>View all News Stories</a>";
$p_n_1[2]['t'] = "Events";
$p_n_1[2]['b'] = p_list(
	array(
		p_event('tall'),
		p_event('tall'),
		p_event('tall'),
		p_event('tall'),
		p_event('tall')
	),
	'events-listing nodisc'
);
$p_n_1[2]['b'] .= "<a class='read-more' href='#'>View all Events</a>";
$p_one .= "<div class='promo news-events'>";
$p_one .= p_tabs_mobi("tab-0",true,$p_n_1);
$p_one .= "</div>";
$p_one .= p_text_image_intro("overlay","Seema Bhat, MBA","Masters's in Business Administration","spotlight","/.includes/images/seema-bhat.jpg","#",'','spotlight');
$p_one .= "</div>";
$p_one .= p_matrix("overlay-cta",array(
		p_text_image_intro("overlay","Supporting Students Who Support the Community","","community","/.includes/images/unh-community01.jpg","#",''),
		p_text_image_intro("overlay","Ebola Virus Information","","news","/.includes/images/unh-news01.jpg","#",''),
		p_text_image_intro("overlay","Supporting Students Who Support the Community","","community","/.includes/images/unh-community01.jpg",'#','')
	));

/*virtual tour*/
$p_one .= "<div class='variable-matrix'><div class='virtual-tour'><h2>Take a Virtual Tour</h2>";
$p_one .= "<a href='http://www.newhaven.edu/admissions/ugrad/opportunities/virtual/'><img src='/.includes/images/unh-virt-tour01.jpg'></a></div>";

/*connect with us module*/
$p_t_1[1]['t'] = "<span class='fa fa-instagram'></span>";
$p_t_1[1]['b'] = '<div id="instafeed"></div>';
$p_t_1[2]['t'] = "<span class='fa fa-youtube'></span>";
$p_t_1[2]['b'] = p_video();
$p_t_1[3]['t'] = "<span class='fa fa-facebook'></span>";
$p_t_1[3]['b'] = '<div class="fb-page" data-href="https://www.facebook.com/unewhaven" data-width="500" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/newhaven"><a href="https://www.facebook.com/unewhaven">University of New Haven</a></blockquote></div></div>';
$p_t_1[4]['t'] = "<span class='fa fa-twitter'></span>";
$p_t_1[4]['b'] = "<a class='twitter-timeline' href='https://twitter.com/UNH' data-widget-id='618779030846836736' data-tweet-limit='5'>Tweets by @UNH</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
$p_one .= "<div class='social-feeds wrapper'>";
$p_one .= p_tabs("tab-1",$p_t_1,'active:0,','false');
$p_one .= "</div>"; //end social-wrapper
$p_one .= "</div>"; //end variable-matrix
$p_one .= "</div>"; //end column

/*end define promos*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>