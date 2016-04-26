<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo("card","image","","Card");
$l_content .= p_promo("card","image","light","Card Light",'');
$l_content .= p_promo("card","image","dark","Card Dark");
$l_content .= p_promo("card","image","","Card with a list",p_list(array(p_link(),p_link(),p_link())));
$l_content .= p_promo("card","image","","Card with a list",p_promo('button','image','dark','With a dark button!'));

$l_promo_sidebar .= p_promo("card","image","","Card");
$l_promo_sidebar .= p_promo("card","image","light","Card Light");
$l_promo_sidebar .= p_promo("card","image","dark","Card Dark");
$l_promo_sidebar .= p_promo("card","image","","Card with a list",p_list(array(p_link(),p_link(),p_link())));
$l_promo_sidebar .= p_promo("card","image","","Card with a list",p_promo('button','image','dark','With a dark button!'));

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>