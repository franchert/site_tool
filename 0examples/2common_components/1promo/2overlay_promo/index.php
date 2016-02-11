<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$p_content .= p_promo("overlay","image","","Overlay");
$p_content .= p_promo("overlay hover","image","","Overlay Hover");
$p_content .= p_promo("overlayv2","image","","OverlayV2");

$p_promo_sidebar .= p_promo("overlay","image","","Overlay");
$p_promo_sidebar .= p_promo("overlay hover","image","","Overlay Hover");
$p_promo_sidebar .= p_promo("overlayv2","image","","OverlayV2");
include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>