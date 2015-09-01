<?php 
include_once("../../../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");

$p_content .= p_promo("generic","","Generic Promo");
$p_content .= p_promo("generic","left","Generic Promo Left");
$p_content .= p_promo("generic","right","Generic Promo Right");
$p_content .= p_promo("generic hover","","Generic Hover Promo");

$p_promo_sidebar .= p_promo("generic","","Generic Promo");
$p_promo_sidebar .= p_promo("generic","left","Generic Promo Left");
$p_promo_sidebar .= p_promo("generic","right","Generic Promo Right");
$p_promo_sidebar .= p_promo("generic hover","","Generic Hover Promo");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>