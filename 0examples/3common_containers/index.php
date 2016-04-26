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

$l_content .= "<h2>Sample UI Accordion</h2>";
$l_content .= p_accordion_ui("sample-acc");
$l_content .= "<h2>Sample Basic Accordion</h2>";
$l_content .= p_accordion("new_acc");
$l_content .= "<h2>TabAccordion (mobile accordion desktop tabs)</h2>";
$l_content .= p_tabaccordion("tabacc");
$l_content .= "<h2>TabAccordion (mobile anchor desktop tabs)</h2>";
$l_content .= p_tabaccordion("tabacc-v2",null,1,'anchor','anchor');
$l_content .= "<h2>Sample UI Tabs</h2>";
$l_content .= p_tabs('sample-tabs');
$l_content .= "<h2>Desktop Tabs to Mobile</h2>";
$l_content .= p_tabs_mobi('sample-tabs-mobi');
$l_content .= "<h2>Sample Mobile Table</h2>";
$l_content .= p_table('sample-table');

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>