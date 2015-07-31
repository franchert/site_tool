<?php 
include_once("../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'generic_inner';
$instafeed = false;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/
$p_content_header .= '<div class="wrapper"><div class="column"><img src="https://placehold.it/1200x600.png" alt="placeholder image"/></div></div>';
$p_content_featured .= p_slider_b("test",
array(
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.')
));
$p_content .="<section>".p_imgcaption().p_paragraph().p_link('button read-more dark',"#","Read More")."</section>";
$p_content .="<section><h3>Sub Title / H3 Header</h3>".p_imgcaption('left','300','200').p_paragraph('2')."</section>";
$p_content .="<section><h3>UNH Video Tour</h3>".p_video()."</section>";
$p_content .=p_tabs_mobi("tab-2",true);
$p_content .=p_accordion("acc-0");
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
$p_content .="<section><h3>Sub Title / H3 Header</h3><blockquote>This is an example of a pull quote. Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</blockquote>".p_paragraph().p_matrix("dropdown",array(p_dropdown('dark','Undergraduate',$temp),p_dropdown('dark','Graduate',$temp),p_dropdown('dark','Minors',$temp)))."</section>";
$p_content .=p_matrix(
	"generic-cta",
	array(
		p_text_image_intro("generic","Undergraduate",null,null,"https://placehold.it/300x200.png","#","Online Programs"),
		p_text_image_intro("generic","Graduate",null,null,"https://placehold.it/300x200.png","#","Resources"),
		p_text_image_intro("generic","International Undergrad &amp; Grad",null,null,"https://placehold.it/300x200.png","#","Apply Today")
	)
);
$p_content.="<section><h3>Effective June 1, 2015</h3>".p_table_mobile("sample")."</section>";
$p_content.="<h3>Comments or Questions?</h3><form><div class='required'><input name='name' type='text' placeholder='Name' required></input></div><div class='required'><input name='email' type='email' placeholder='Email' required></input></div><div class='required'><textarea name='comments' placeholder='Comments / Questions / Concerns' required></textarea></div><input type='submit' value='submit' class='submit'></input>";

$p_promo_sidebar .="<section><h2>Find Us On</h2>".p_list(
	array(
		p_link(false,'#',"<span class='fa fa-facebook-square'></span>"),
		p_link(false,'#',"<span class='fa fa-instagram'></span>")
	),
	"social",
	""
)."</section>";
$p_promo_sidebar .= p_text_image_intro(
	"button light",
	"Apply Now",
	null,
	null,
	null,
	"#",
	"file"
);
$p_promo_sidebar .= p_text_image_intro(
	"button dark",
	"Give to UNH",
	null,
	null,
	null,
	"#",
	"gift"
);
$p_promo_sidebar .= p_text_image_intro(
	"button dark",
	"Contact Us",
	null,
	null,
	null,
	"#",
	"phone"
);
$p_promo_sidebar .= "<section><h2>Important Links</h2>".p_list(
	array(
		p_link(),
		p_link(),
		p_link(),
		p_link(),
		p_link(),
		p_link(),
		p_link(),
		p_link()
	),
	"important-links"
	)."</section>";
$p_promo_sidebar .= "<section><h2>Sub Header / H2 Header</h2>".p_list(
	array(
		"lorem ipsum",
		"lorem ipsum".
		p_list(
			array(
				"lorem ipsum",
				"lorem ipsum",
				"lorem ipsum",
			),
			"unordered"
		),
		"lorem ipsum",
		"lorem ipsum"
	),
	"unordered"
	)."</section>";
$p_promo_sidebar .= "<section><h2>Sub Header / H2 Header</h2>".p_list(
	array(
		"lorem ipsum",
		"lorem ipsum".
		p_list(
			array(
				"lorem ipsum",
				"lorem ipsum",
				"lorem ipsum",
			),
			"ordered"
		),
		"lorem ipsum",
		"lorem ipsum"
	),
	"ordered"
	)."</section>";
$p_promo_sidebar .= "<section>".p_text_image_intro(
		"promo dark",
		"Sub Header / H4 Header",
		"This is how page specific info will be shown, such as library hours or fast facts."
	)."</section>";
$p_promo_sidebar .= "<section>".p_text_image_intro(
		"promo dark",
		"Sub Header / H4 Header",
		"This is how page specific info will be shown, such as library hours or fast facts.",
		NULL,
		NULL,
		"#",
		"View more fast facts"
	)."</section>";
$p_promo_sidebar .= "<section>".p_text_image_intro(
		"promo",
		"Communications and Public Affairs Office",
		"203.932.7264</br>300 Boston Post Road</br>West Haven, CT 06516"
	)."</section>";
$p_promo_sidebar .= "<section>".p_text_image_intro(
		"promo",
		"Online Newsletter",
		"UNH Today is e-mailed every Monday during the academic year to students, faculty, staff and the Board of Governors",
		NULL,
		"https://placehold.it/400x100.png",
		"#",
		"Sign Up Today"
	)."</section>";
$p_promo_sidebar .= "<section>".p_text_image_intro(
		"promo",
		"Alumni Magazine",
		"The University of New Haven Magazine highlights individuals, news and events significant to the University.",
		NULL,
		"https://placehold.it/150x200.png",
		"#",
		"Read the Magazine"
	)."</section>";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>