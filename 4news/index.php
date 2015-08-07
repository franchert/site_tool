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
$p_t[0]['t'] = 'New Releases';
$p_t[0]['b'] = p_list(
	array(
		p_news('','https://placehold.it/200x200.png'),
		p_news(''),
		p_news(''),
		p_news('','https://placehold.it/200x200.png'),
		p_news('')
	),
	'nodisc'
).p_promo('button light more-news','Read More News',null,null,null,"#",'');
$p_t[1]['t'] = 'UNH in the Media';
$p_t[1]['b'] = p_list(
	array(
		p_news(''),
		p_news(''),
		p_news('','https://placehold.it/200x200.png'),
		p_news(''),
		p_news('','https://placehold.it/200x200.png')
	),
	'nodisc'
).p_promo('button light more-news','Read More News',null,null,null,"#",'');
$p_t[2]['t'] = 'Lectures &amp; Events';
$p_t[2]['b'] = p_list(
	array(
		p_news('','https://placehold.it/200x200.png'),
		p_news('','https://placehold.it/200x200.png'),
		p_news(''),
		p_news('','https://placehold.it/200x200.png'),
		p_news('')
	),
	'nodisc'
).p_promo('button light more-news','Read More News',null,null,null,"#",'');
$p_content .=p_tabs_mobi("tab-3",true,$p_t);
$p_promo_sidebar .= p_promo(
	"button dark",
	"Send Us Your News",
	null,
	null,
	null,
	"#",
	"paper-plane"
);
$p_promo_sidebar .= p_promo(
	"button dark",
	"Find Faculty Experts",
	null,
	null,
	null,
	"#",
	"search"
);
$p_promo_sidebar .="<section><h3>Communications and Public Affairs Office</h3><p><a href='tel:203.932.7264'>203.932.7264</a></br>300 Boston Post Road</br>West Haven, CT 06516</section>";

$p_promo_sidebar .= "<section><h2>Important Links</h2>".p_list(
	array(
		p_link(),
		p_link()
	),
	"important-links"
	)."</section>";
$p_promo_sidebar .= "<section>".p_promo(
		"promo",
		"Online Newsletter",
		"UNH Today is e-mailed every Monday during the academic year to students, faculty, staff and the Board of Governors",
		NULL,
		"https://placehold.it/400x100.png"
	)."</section>";
$p_promo_sidebar .= "<section>".p_promo(
		"promo",
		"Alumni Magazine",
		"The University of New Haven Magazine highlights individuals, news and events significant to the University.",
		NULL,
		"https://placehold.it/150x200.png"
	)."</section>";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>