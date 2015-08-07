<?php 
include_once("../../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'generic_inner';
$instafeed = false;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/
$p_content_featured .= p_slider_b("test",
array(
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.')
));
$temp = array(
			p_link(),
			p_link(),
			p_link(),
			p_link(),
			p_link(),
			p_link(),
			p_link(),
			p_link(),
			p_link()
		);
$p_content .="<section><h2>Explore Our Programs</h2>".p_matrix(
	"dropdown",
	array(
		p_dropdown('dark','Undergraduate',$temp),
		p_dropdown('dark','Graduate',$temp),
		p_dropdown('dark','Minors',$temp)
	)
)."</section>";
$p_content .="<section>".p_paragraph(2)."</section>";
$p_content .=p_matrix(
	"generic-cta",
	array(
		p_promo("generic","Undergraduate",null,null,"https://placehold.it/300x200.png","#","Online Programs"),
		p_promo("generic","Graduate",null,null,"https://placehold.it/300x200.png","#","Resources"),
		p_promo("generic","International Undergrad &amp; Grad",null,null,"https://placehold.it/300x200.png","#","Apply Today")
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
$p_promo_sidebar .= p_promo(
	"button light",
	"Apply Now",
	null,
	null,
	null,
	"#",
	"file"
);
$p_promo_sidebar .= p_promo(
	"button dark",
	"Contact Us",
	null,
	null,
	null,
	"#",
	"phone"
);
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
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>