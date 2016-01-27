<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = false;
$colorbox = false;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");
$p_content .= p_grid('horizontal',3,'horizontal 3');
$p_content .= p_grid('horizontal right',3,'horizontal right 3');
$p_content .= p_grid('vertical',3,'vertical 3');
$p_content .= p_grid('vertical',5,'vertical 5');
$p_content .= p_grid('offset',2,'offset 2');
$p_content .= p_grid('offset right',2,'offset right 2');
$p_content .= p_grid('offset',3,'offset 3');
$p_content .= p_grid('offset',4,'offset 4');
$p_content .= p_grid('offset right',4,'offset right 4');
$p_content .= p_grid('offset',5,'offset 5');
$p_content .= p_grid('offset right',5,'offset right 5');

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>