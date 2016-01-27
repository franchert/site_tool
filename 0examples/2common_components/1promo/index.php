<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");

$p_content .= p_promo("linkimg","image","","LinkImg Promo");
$p_content .= p_promo("imgtitle","image","","ImgTitle Promo");
$p_content .= p_promo("promo","image","","Promo Promo");
$p_content .= p_promo("promo","image","light","Promo Promo Light");
$p_content .= p_promo("promo","image","dark","Promo Promo Dark");
$p_content .= p_promo("hovertext","image","","TextLink Promo");
$p_content .= p_promo("button","image","","Button Promo");
$p_content .= p_promo("button","image","light","Button Promo Light");
$p_content .= p_promo("button","image","dark","Button Promo Dark");
$p_content .= p_promo("something_else","image","","Not Found Promo");

$p_promo_sidebar .= p_promo("linkimg","image","","LinkImg Promo");
$p_promo_sidebar .= p_promo("imgtitle","image","","ImgTitle Promo");
$p_promo_sidebar .= p_promo("promo","image","","Promo Promo");
$p_promo_sidebar .= p_promo("promo","image","light","Promo Promo Light");
$p_promo_sidebar .= p_promo("promo","image","dark","Promo Promo Dark");
$p_promo_sidebar .= p_promo("hovertext","image","","TextLink Promo");
$p_promo_sidebar .= p_promo("button","image","","Button Promo");
$p_promo_sidebar .= p_promo("button","image","light","Button Promo Light");
$p_promo_sidebar .= p_promo("button","image","dark","Button Promo Dark");
$p_promo_sidebar .= p_promo("something_else","image","","Not Found Promo");

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>