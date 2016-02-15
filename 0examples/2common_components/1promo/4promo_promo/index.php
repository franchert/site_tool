<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$p_content .= p_promo("promo","image","","Promo");
$p_content .= p_promo("promo","image","light","Promo Light",'');
$p_content .= p_promo("promo","image","dark","Promo Dark");
$p_content .= p_promo("promo","image","","Promo with a list",p_list(array(p_link(),p_link(),p_link())));
$p_content .= p_promo("promo","image","","Promo with a list",p_promo('button','image','dark','With a dark button!'));

$p_promo_sidebar .= p_promo("promo","image","","Promo");
$p_promo_sidebar .= p_promo("promo","image","light","Promo Light");
$p_promo_sidebar .= p_promo("promo","image","dark","Promo Dark");
$p_promo_sidebar .= p_promo("promo","image","","Promo with a list",p_list(array(p_link(),p_link(),p_link())));
$p_promo_sidebar .= p_promo("promo","image","","Promo with a list",p_promo('button','image','dark','With a dark button!'));

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>