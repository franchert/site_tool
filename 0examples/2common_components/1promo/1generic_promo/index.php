<?php 
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");

$p_content .= p_promo("generic","image","","Generic Promo");
$p_content .= p_promo("generic","image","left","Generic Promo Left");
$p_content .= p_promo("generic","image","right","Generic Promo Right");
$p_content .= p_promo("generic hover","image","","Generic Hover Promo");

$p_promo_sidebar .= p_promo("generic","image","","Generic Promo");
$p_promo_sidebar .= p_promo("generic","image","left","Generic Promo Left");
$p_promo_sidebar .= p_promo("generic","image","right","Generic Promo Right");
$p_promo_sidebar .= p_promo("generic hover","image","","Generic Hover Promo");



$p_content .= p_promo("generic","comp","","Generic Promo",p_promo("hovertext","image","","TextLink Promo"));
$p_content .= p_promo("generic","comp","left","Generic Promo Left",p_promo("hovertext","image","","TextLink Promo"));
$p_content .= p_promo("generic","comp","right","Generic Promo Right",p_promo("hovertext","image","","TextLink Promo"));
$p_content .= p_promo("generic hover","comp","","Generic Hover Promo",p_promo("hovertext","image","","TextLink Promo"));

$p_promo_sidebar .= p_promo("generic","comp","","Generic Promo",p_promo("hovertext","image","","TextLink Promo"));
$p_promo_sidebar .= p_promo("generic","comp","left","Generic Promo Left",p_promo("hovertext","image","","TextLink Promo"));
$p_promo_sidebar .= p_promo("generic","comp","right","Generic Promo Right",p_promo("hovertext","image","","TextLink Promo"));
$p_promo_sidebar .= p_promo("generic hover","comp","","Generic Hover Promo",p_promo("hovertext","image","","TextLink Promo"));

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>