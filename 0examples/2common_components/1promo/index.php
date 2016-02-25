<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo("hovertext","image","");
$l_content .= p_promo("button","image","","Promo");
$l_content .= p_promo("button","image","light","Promo Light");
$l_content .= p_promo("button","image","dark","Promo Dark");
$l_content .= p_promo("something_else","image","","Not Found");

$l_promo_sidebar .= p_promo("hovertext","image","","TextLink");
$l_promo_sidebar .= p_promo("button","image","","Promo");
$l_promo_sidebar .= p_promo("button","image","light","Promo Light");
$l_promo_sidebar .= p_promo("button","image","dark","Promo Dark");
$l_promo_sidebar .= p_promo("something_else","image","","Not Found");

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>