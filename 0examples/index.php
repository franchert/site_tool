<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*page-specific variables*/
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$feed_search = true;
/*end page-specific variables*/
include_once($docroot."/.includes/director.php");

/*actual on-page content*/
	$l_nav_sidebar .= p_promo("button","image","","Button Promo");
	$l_nav_sidebar .= p_promo("button","image","light","Button Promo Light");
	$l_nav_sidebar .= p_promo("button","image","dark","Button Promo Dark");
	$l_featured_header .= "<div class='banner'>".p_image('1200','300','sample banner')."</div>";
	$l_content_featured .= p_slider_owl('example_header');
	$l_content .= "<h2>Sample Content Area</h2>".p_paragraph(1).p_image("200","150",null,null,'ccc','444','padding-right:20px;').p_paragraph(2).p_video().p_program_search().p_paragraph(1).p_carousel('example_carousel').p_paragraph(1);
	$l_promo_sidebar .= p_promo("linkimg","image");
/*end actual on-page content*/

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>