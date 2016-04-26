<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo("generic","image","","Generic");
$l_content .= p_promo("generic","image","left","Generic Left");
$l_content .= p_promo("generic","image","right","Generic Right");
$l_content .= p_promo("generic","image","right hover","Generic Hover");

$l_promo_sidebar .= p_promo("generic","image","","Generic");
$l_promo_sidebar .= p_promo("generic","image","left","Generic Left");
$l_promo_sidebar .= p_promo("generic","image","right","Generic Right");
$l_promo_sidebar .= p_promo("generic","image","hover","Generic Hover");



$l_content .= p_promo("generic","comp","","Generic",p_promo("panel","image","","TextLink",null,''));
$l_content .= p_promo("generic","comp","left","Generic Left",p_promo("panel","image","","TextLink",null,''));
$l_content .= p_promo("generic","comp","right","Generic Right",p_promo("panel","image","","TextLink",null,''));
$l_content .= p_promo("generic","comp","hover","Generic Hover",p_promo("panel","image","","TextLink",null,''));

$l_promo_sidebar .= p_promo("generic","comp","","Generic",p_promo("panel","image","","TextLink",null,''));
$l_promo_sidebar .= p_promo("generic","comp","left","Generic Left",p_promo("panel","image","","TextLink",null,''));
$l_promo_sidebar .= p_promo("generic","comp","right","Generic Right",p_promo("panel","image","","TextLink",null,''));
$l_promo_sidebar .= p_promo("generic","comp","hover","Generic Hover",p_promo("panel","image","","TextLink",null,''));

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>