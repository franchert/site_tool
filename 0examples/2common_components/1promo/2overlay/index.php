<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo("overlay","image",'',"Overlay");
$l_content .= p_promo("overlay hover","image",'',"Overlay Hover");
$l_content .= p_promo("overlayv2","image",'',"OverlayV2");

$l_promo_sidebar .= p_promo("overlay","image",'',"Overlay");
$l_promo_sidebar .= p_promo("overlay hover","image",'',"Overlay Hover");
$l_promo_sidebar .= p_promo("overlayv2","image",'',"OverlayV2");
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>