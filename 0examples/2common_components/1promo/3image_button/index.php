<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$p_content .= p_promo("linkimg","image","","LinkImg");
$p_content .= p_promo("linkimg","image","dark","LinkImg <span>Dark</span>");
$p_content .= p_promo("linkimg","image","light","LinkImg <span>Light</span>");

$p_promo_sidebar .= p_promo("linkimg","image","","LinkImg");
$p_promo_sidebar .= p_promo("linkimg","image","dark","LinkImg <span>Dark</span>");
$p_promo_sidebar .= p_promo("linkimg","image","light","LinkImg <span>Light</span>");
include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>