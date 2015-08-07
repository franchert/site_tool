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
$p_content_featured .= p_slider_b("test",
array(
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.'),
	g_slide('featured','Tropical Marine Ecology 2015','Eight students will be leaving for San Salvador to study Marine Ecology and will be taking turns blogging about their field adventures.')
));
$p_content .="<section>".p_imgcaption().p_paragraph().p_link('button read-more dark',"#","Read More")."</section>";
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
	"Give to UNH",
	null,
	null,
	null,
	"#",
	"gift"
);
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>