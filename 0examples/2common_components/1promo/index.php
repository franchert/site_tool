<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$p_content .= p_promo("hovertext","image","","TextLink");
$p_content .= p_promo("button","image","","Button");
$p_content .= p_promo("button","image","light","Button Light");
$p_content .= p_promo("button","image","dark","Button Dark");
$p_content .= p_promo("something_else","image","","Not Found");

$p_promo_sidebar .= p_promo("hovertext","image","","TextLink");
$p_promo_sidebar .= p_promo("button","image","","Button");
$p_promo_sidebar .= p_promo("button","image","light","Button Light");
$p_promo_sidebar .= p_promo("button","image","dark","Button Dark");
$p_promo_sidebar .= p_promo("something_else","image","","Not Found");

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>