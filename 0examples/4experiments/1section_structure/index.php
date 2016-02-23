<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = false;
$colorbox = false;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= "<h2>Large - Tabs : Small - Accordion</h2>";
$l_content .= p_section_structure('first','accs','tabs');
$l_content .= "<h2>Large - Accordion : Small - Accordion</h2>";
$l_content .= p_section_structure('second','accs','accs');
$l_content .= "<h2>Large - Anchors : Small - Accordion</h2>";
$l_content .= p_section_structure('third','accs','anchor');
$l_content .= "<h2>Large - Tabs : Small - Tabs</h2>";
$l_content .= p_section_structure('fourth','tabs','tabs');
$l_content .= "<h2>Large - Accordion : Small - Tabs</h2>";
$l_content .= p_section_structure('fifth','tabs','accs');
$l_content .= "<h2>Large - Anchor : Small - Tabs</h2>";
$l_content .= p_section_structure('sixth','tabs','anchor');
$l_content .= "<h2>Large - Tabs : Small - Anchor</h2>";
$l_content .= p_section_structure('seventh','anchor','tabs');
$l_content .= "<h2>Large - Accordion : Small - Anchor</h2>";
$l_content .= p_section_structure('eighth','anchor','accs');
$l_content .= "<h2>Large - Anchor : Small - Anchor</h2>";
$l_content .= p_section_structure('ninth','anchor','anchor');


include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>