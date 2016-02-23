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
include_once($docroot."/.includes/director.php");

$l_content .= p_slider_owl('example_generic');
$l_content .= p_carousel('example_carousel');

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>