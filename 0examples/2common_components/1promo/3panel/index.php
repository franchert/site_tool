<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo("panel","image","","panel");
$l_content .= p_promo("panel","image","dark","panel <span>Dark</span>",null,'');
$l_content .= p_promo("panel","image","light","panel <span>Light</span>");

$l_promo_sidebar .= p_promo("panel","image","","panel",null,'');
$l_promo_sidebar .= p_promo("panel","image","dark","panel <span>Dark</span>");
$l_promo_sidebar .= p_promo("panel","image","light","panel <span>Light</span>",null,'');
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>