<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = false;
$colorbox = false;
$template = "generic_inner";
$mini = true;
$depth = 2;
include_once($docroot."/.includes/director.php");
$l_content .= p_matrix(2);
$l_content .= p_matrix(3);
$l_content .= p_matrix(4);
$l_content .= p_matrix(5);
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>