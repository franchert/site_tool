<?php 
include_once("../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'generic_inner';
$instafeed = false;
$colorbox = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/

$p_content_header .= "<div class='wrapper'><div class='column'>".p_slider_custom(
	"multi-frame",
	array(
		"<div class='slide slide-left'>".p_list(
			array(
				p_text_image_intro("overlay colorbox","#blossoms #pink #pretty #maxcyhall #unh by <span>heyItsmonicak</span> via Instagram","",NULL,"/.includes/images/unh-community01.jpg","/.includes/images/unh-community01.jpg",''),
				p_text_image_intro("overlay colorbox","Students Cheering on our Chargers at Ralph F. DellaCamera Stadium","",NULL,"/.includes/images/unh-news01.jpg","/.includes/images/unh-news01.jpg",''),
				p_text_image_intro("overlay colorbox","In front of South Campus by <span>Clarissa Jones</span> via Self Submit","",NULL,"/.includes/images/unh-community01.jpg",'/.includes/images/unh-community01.jpg','')
			),
			"nodisc"
		)."</div>",
		"<div class='slide slide-right'>".p_list(
			array(
				p_text_image_intro("overlay colorbox","#blossoms #pink #pretty #maxcyhall #unh by <span>heyItsmonicak</span> via Instagram","",NULL,"/.includes/images/unh-community01.jpg","/.includes/images/unh-community01.jpg",''),
				p_text_image_intro("overlay colorbox","Students Cheering on our Chargers at Ralph F. DellaCamera Stadium","",NULL,"/.includes/images/unh-news01.jpg","/.includes/images/unh-news01.jpg",''),
				p_text_image_intro("overlay colorbox","In front of South Campus by <span>Clarissa Jones</span> via Self Submit","",NULL,"/.includes/images/unh-community01.jpg",'/.includes/images/unh-community01.jpg','')
			),
			"nodisc"
		)."</div>",
		"<div class='slide slide-left'>".p_list(
			array(
				p_text_image_intro("overlay colorbox","#blossoms #pink #pretty #maxcyhall #unh by <span>heyItsmonicak</span> via Instagram","",NULL,"/.includes/images/unh-community01.jpg","/.includes/images/unh-community01.jpg",''),
				p_text_image_intro("overlay colorbox","Students Cheering on our Chargers at Ralph F. DellaCamera Stadium","",NULL,"/.includes/images/unh-news01.jpg","/.includes/images/unh-news01.jpg",''),
				p_text_image_intro("overlay colorbox","In front of South Campus by <span>Clarissa Jones</span> via Self Submit","",NULL,"/.includes/images/unh-community01.jpg",'/.includes/images/unh-community01.jpg','')
			),
			"nodisc"
		)."</div>",
		"<div class='slide slide-right'>".p_list(
			array(
				p_text_image_intro("overlay colorbox","#blossoms #pink #pretty #maxcyhall #unh by <span>heyItsmonicak</span> via Instagram","",NULL,"/.includes/images/unh-community01.jpg","/.includes/images/unh-community01.jpg",''),
				p_text_image_intro("overlay colorbox","Students Cheering on our Chargers at Ralph F. DellaCamera Stadium","",NULL,"/.includes/images/unh-news01.jpg","/.includes/images/unh-news01.jpg",''),
				p_text_image_intro("overlay colorbox","In front of South Campus by <span>Clarissa Jones</span> via Self Submit","",NULL,"/.includes/images/unh-community01.jpg",'/.includes/images/unh-community01.jpg','')
			),
			"nodisc"
		)."</div>",
		"<div class='slide slide-left'>".p_list(
			array(
				p_text_image_intro("overlay colorbox","#blossoms #pink #pretty #maxcyhall #unh by <span>heyItsmonicak</span> via Instagram","",NULL,"/.includes/images/unh-community01.jpg","/.includes/images/unh-community01.jpg",''),
				p_text_image_intro("overlay colorbox","Students Cheering on our Chargers at Ralph F. DellaCamera Stadium","",NULL,"/.includes/images/unh-news01.jpg","/.includes/images/unh-news01.jpg",''),
				p_text_image_intro("overlay colorbox","In front of South Campus by <span>Clarissa Jones</span> via Self Submit","",NULL,"/.includes/images/unh-community01.jpg",'/.includes/images/unh-community01.jpg','')
			),
			"nodisc"
		)."</div>",
		"<div class='slide slide-right'>".p_list(
			array(
				p_text_image_intro("overlay colorbox","#blossoms #pink #pretty #maxcyhall #unh by <span>heyItsmonicak</span> via Instagram","",NULL,"/.includes/images/unh-community01.jpg","/.includes/images/unh-community01.jpg",''),
				p_text_image_intro("overlay colorbox","Students Cheering on our Chargers at Ralph F. DellaCamera Stadium","",NULL,"/.includes/images/unh-news01.jpg","/.includes/images/unh-news01.jpg",''),
				p_text_image_intro("overlay colorbox","In front of South Campus by <span>Clarissa Jones</span> via Self Submit","",NULL,"/.includes/images/unh-community01.jpg",'/.includes/images/unh-community01.jpg','')
			),
			"nodisc"
		)."</div>"
	),
	"",
	false
).p_list(
	array(
		p_link('button light','#','All'),
		p_link('button','#','From the University'),
		p_link('button','#','From the Community'),
	),
	'nodisc filter-media'
)."<a href='#' class='submit-media'><span class='fa fa-plus-circle'></span>Submit a Photo or Video</a></div></div>";

$p_content .="<section><h3>Get Involved!</h3>".p_paragraph('1')."</section>";
$p_content .=p_matrix(
	"generic-cta",
	array(
		p_text_image_intro("generic","Athletics &amp; Recreation",null,null,"https://placehold.it/300x200.png","#","Online Programs",'',
			array(
				p_link('','#','Athletics'),
				p_link('','#','Campus Recreation'),
				p_link('','#','Student Activities'),
				p_link('','#','RECSports')
			)
		),
		p_text_image_intro("generic","Health and Wellness",null,null,"https://placehold.it/300x200.png","#","Resources",'',
			array(
				p_link('','#','Campus Access Services'),
				p_link('','#','Counseling &amp; Psychological Services'),
				p_link('','#','Health Services'),
				p_link('','#','Spiritual Life amp; Campus Ministry'),
				p_link('','#','Why You Should Get the Flu Vaccine'),
				p_link('','#','Eating Well')
			)
		),
		p_text_image_intro("generic","Safety",null,null,"https://placehold.it/300x200.png","#","Apply Today",'',
			array(
				p_link('','#','Campus Police'),
				p_link('','#','Violence Prevention and Intervention Center'),
				p_link('','#','Safe Zone Program'),
				p_link('','#','Campus Safety Resources and Training Programs'),
				p_link('','#','Sexual Misconduct, Relationship Abuse &amp; Stalking')
			)
		),
		p_text_image_intro("generic","Living and Dining",null,null,"https://placehold.it/300x200.png","#","Apply Today",'',
			array(
				p_link('','#','Dining Services'),
				p_link('','#','Commuter Resources'),
				p_link('','#','Office of Residential Life'),
				p_link('','#','Explore Our Residence Halls'),
				p_link('','#','Shuttle and Transportation Services'),
				p_link('','#','Bookstore'),
				p_link('','#','Off-Campus Living Guide')
			)
		),
		p_text_image_intro("generic","Get Involved",null,null,"https://placehold.it/300x200.png","#","Apply Today",'',
			array(
				p_link('','#','Community Service'),
				p_link('','#','First-Year Mentor Program'),
				p_link('','#','Diversity Peer Educators Program'),
				p_link('','#','Leadership Development'),
				p_link('','#','Leadership Positions in the Office of Residential Life'),
				p_link('','#','Programs and Events'),
				p_link('','#','Voter Education and Registration Information'),
				p_link('','#','Undergraduate Student Government Association (USGA)'),
				p_link('','#','Student Employment Clubs &amp; Organizations')
			)
		),
		p_text_image_intro("generic","Experience",null,null,"https://placehold.it/300x200.png","#","Apply Today",'',
			array(
				p_link('','#','Graduate Student Services'),
				p_link('','#','Intercultural Relations'),
				p_link('','#','International Services Office'),
				p_link('','#','Four-Year Checklists'),
				p_link('','#','International &amp; Experiential Learning'),
				p_link('','#','First Year Experience'),
				p_link('','#','Sophomore Experience')
			)
		)
	)
);
$p_promo_sidebar .="<section><h2>Find Us On</h2>".p_list(
	array(
		p_link(false,'#',"<span class='fa fa-facebook-square'></span>"),
		p_link(false,'#',"<span class='fa fa-instagram'></span>")
	),
	"social",
	""
)."</section>";
$p_promo_sidebar .="<section><h3>Division of Student Affairs</h3><p><a href='tel:203.932.7264'>203.932.7264</a></br>300 Boston Post Road</br>West Haven, CT 06516</section>";
$p_promo_sidebar .= "<section><h2>Important Links</h2>".p_list(
	array(
		p_link(),
		p_link(),
		p_link(),
		p_link()
	),
	"important-links"
	)."</section>";

$p_promo_sidebar .= "<section><h2>Events</h2>".p_slider(
	"upcoming-events",
	array(
		p_list(
			array(
				p_event('tall'),
				p_event('tall'),
				p_event('tall')
			),
			"nodisc events-listing"
		),
		p_list(
			array(
				p_event('tall'),
				p_event('tall'),
				p_event('tall')
			),
			"nodisc events-listing"
		),
		p_list(
			array(
				p_event('tall'),
				p_event('tall')
			),
			"nodisc events-listing"
		),
	),
	"",
	false
)."<a class='read-more' href='#'>View More Events</a></section>";
$p_promo_sidebar .= "<section>".p_text_image_intro(
		"linkimg",
		NULL,
		"Are you Positively Charged? Click here to get some positive energy about the UNH Community",
		NULL,
		"https://placehold.it/400x200.png"
	)."</section>";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>