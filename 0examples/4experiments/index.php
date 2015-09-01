<?php 
include_once("../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");
$p_content .= "This page shows components that are in the works and not yet complete.";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>