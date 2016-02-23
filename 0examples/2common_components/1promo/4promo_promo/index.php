<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo("promo","image","","Promo");
$l_content .= p_promo("promo","image","light","Promo Light",'');
$l_content .= p_promo("promo","image","dark","Promo Dark");
$l_content .= p_promo("promo","image","","Promo with a list",p_list(array(p_link(),p_link(),p_link())));
$l_content .= p_promo("promo","image","","Promo with a list",p_promo('button','image','dark','With a dark button!'));

$l_promo_sidebar .= p_promo("promo","image","","Promo");
$l_promo_sidebar .= p_promo("promo","image","light","Promo Light");
$l_promo_sidebar .= p_promo("promo","image","dark","Promo Dark");
$l_promo_sidebar .= p_promo("promo","image","","Promo with a list",p_list(array(p_link(),p_link(),p_link())));
$l_promo_sidebar .= p_promo("promo","image","","Promo with a list",p_promo('button','image','dark','With a dark button!'));

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>