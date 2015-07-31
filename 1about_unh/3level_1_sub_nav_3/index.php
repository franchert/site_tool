<?php 
include_once("../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'generic_inner';
$instafeed = false;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/

$p_content .="<section>".p_imgcaption().p_paragraph().p_link('button read-more dark',"#","Read More")."</section>";
$p_content .="<section><h3>Sub Title / H3 Header</h3>".p_imgcaption('left','300','200').p_paragraph('2')."</section>";
$p_promo_sidebar .="<section><h2>Find Us On</h2>".p_list(
	array(
		p_link(false,'#',"<span class='fa fa-facebook-square'></span>"),
		p_link(false,'#',"<span class='fa fa-instagram'></span>")
	),
	"social",
	""
)."</section>";
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

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>