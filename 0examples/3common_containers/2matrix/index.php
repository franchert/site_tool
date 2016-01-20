<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = false;
$colorbox = false;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");
$p_content .= p_matrix(2);
$p_content .= p_matrix(3);
$p_content .= p_matrix(4);
$p_content .= p_matrix(5);
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>