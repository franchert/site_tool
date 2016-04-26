<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo("reveal","image","","Reveal");
$l_content .= p_promo("button","image","","Button");
$l_content .= p_promo("button","image","light","Button Light");
$l_content .= p_promo("button","image","dark","Button Dark");
$l_content .= p_promo("something_else","image","","Not Found");
$l_content .= p_promo("media","image", "media-left");
$l_content .= p_promo("media","image", "media-left media-middle");
$l_content .= p_promo("media","image", "media-left media-bottom");
$l_content .= p_promo("media","image", "media-right");
$l_content .= p_promo("media");
$l_content .= p_promo("media");

$l_promo_sidebar .= p_promo("reveal","image","","Reveal");
$l_promo_sidebar .= p_promo("button","image","","Button");
$l_promo_sidebar .= p_promo("button","image","light","Button Light");
$l_promo_sidebar .= p_promo("button","image","dark","Button Dark");
$l_promo_sidebar .= p_promo("something_else","image","","Not Found");

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>