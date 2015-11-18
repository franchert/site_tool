<?php 
include_once("../settings.php");
/*page-specific variables*/
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$feed_search = true;
/*end page-specific variables*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");

/*actual on-page content*/
	$p_nav_sidebar .= p_promo("button","image","","Button Promo");
	$p_nav_sidebar .= p_promo("button","image","light","Button Promo Light");
	$p_nav_sidebar .= p_promo("button","image","dark","Button Promo Dark");
	$p_featured_header .= "<div class='banner'>".p_image('1200','300','sample banner')."</div>";
	$p_content_featured .= p_slider_owl('example_header');
	$p_content .= "<h2>Sample Content Area</h2>".p_paragraph(1).p_image("200","150",null,null,'ccc','444','padding-right:20px;').p_paragraph(2).p_video().p_program_search().p_paragraph(1).p_carousel('example_carousel').p_paragraph(1);
	$p_promo_sidebar .= p_promo("linkimg","image");
/*end actual on-page content*/

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>