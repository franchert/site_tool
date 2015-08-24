<?php 
include_once("../../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");

$p_content .= p_promo("overlay","","Overlay Promo");
$p_content .= p_promo("overlay hover","","Overlay Hover Promo");
$p_content .= p_promo("overlayv2","","OverlayV2 Promo");

$p_promo_sidebar .= p_promo("overlay","","Overlay Promo");
$p_promo_sidebar .= p_promo("overlay hover","","Overlay Hover Promo");
$p_promo_sidebar .= p_promo("overlayv2","","Overlay Promo");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>