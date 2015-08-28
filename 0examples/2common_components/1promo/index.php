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

$p_content .= p_promo("linkimg","","LinkImg Promo");
$p_content .= p_promo("imgtitle","","ImgTitle Promo");
$p_content .= p_promo("promo","","Promo Promo");
$p_content .= p_promo("promo","light","Promo Promo Light");
$p_content .= p_promo("promo","dark","Promo Promo Dark");
$p_content .= p_promo("hovertext","","TextLink Promo");
$p_content .= p_promo("button","","Button Promo");
$p_content .= p_promo("button","light","Button Promo Light");
$p_content .= p_promo("button","dark","Button Promo Dark");
$p_content .= p_promo("something_else","","Not Found Promo");

$p_promo_sidebar .= p_promo("linkimg","","LinkImg Promo");
$p_promo_sidebar .= p_promo("imgtitle","","ImgTitle Promo");
$p_promo_sidebar .= p_promo("promo","","Promo Promo");
$p_promo_sidebar .= p_promo("promo","light","Promo Promo Light");
$p_promo_sidebar .= p_promo("promo","dark","Promo Promo Dark");
$p_promo_sidebar .= p_promo("hovertext","","TextLink Promo");
$p_promo_sidebar .= p_promo("button","","Button Promo");
$p_promo_sidebar .= p_promo("button","light","Button Promo Light");
$p_promo_sidebar .= p_promo("button","dark","Button Promo Dark");
$p_promo_sidebar .= p_promo("something_else","","Not Found Promo");

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>