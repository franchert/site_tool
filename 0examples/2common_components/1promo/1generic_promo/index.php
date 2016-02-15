<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$p_content .= p_promo("generic","image","","Generic");
$p_content .= p_promo("generic","image","left","Generic Left");
$p_content .= p_promo("generic","image","right","Generic Right");
$p_content .= p_promo("generic hover","image","right","Generic Hover");

$p_promo_sidebar .= p_promo("generic","image","","Generic");
$p_promo_sidebar .= p_promo("generic","image","left","Generic Left");
$p_promo_sidebar .= p_promo("generic","image","right","Generic Right");
$p_promo_sidebar .= p_promo("generic hover","image","","Generic Hover");



$p_content .= p_promo("generic","comp","","Generic",p_promo("linkimg","image","","TextLink"));
$p_content .= p_promo("generic","comp","left","Generic Left",p_promo("linkimg","image","","TextLink"));
$p_content .= p_promo("generic","comp","right","Generic Right",p_promo("linkimg","image","","TextLink"));
$p_content .= p_promo("generic hover","comp","","Generic Hover",p_promo("linkimg","image","","TextLink"));

$p_promo_sidebar .= p_promo("generic","comp","","Generic",p_promo("linkimg","image","","TextLink"));
$p_promo_sidebar .= p_promo("generic","comp","left","Generic Left",p_promo("linkimg","image","","TextLink"));
$p_promo_sidebar .= p_promo("generic","comp","right","Generic Right",p_promo("linkimg","image","","TextLink"));
$p_promo_sidebar .= p_promo("generic hover","comp","","Generic Hover",p_promo("linkimg","image","","TextLink"));

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>