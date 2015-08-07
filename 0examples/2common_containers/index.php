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
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");

$p_content .= "<h2>Sample Accordion</h2>";
$p_content .= p_accordion("sample-acc");
$p_content .= "<h2>Sample UI Tabs</h2>";
$p_content .= p_tabs('sample-tabs');
$p_content .= "<h2>Sample Mobile Tabs</h2>";
$p_content .= p_tabs_mobi('sample-tabs-mobi');
$p_content .= "<h2>Sample Table</h2>";
$p_content .= p_table_mobile('sample-table');

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>