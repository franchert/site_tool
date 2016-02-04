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

$p_content .= "<h2>Events</h2>";
$p_content .= p_event();
$p_content .= p_event('tall');
$p_content .= p_event('round');
$p_content .= p_event('basic');

$p_content .= "<h2>News</h2>";
$p_content .= p_news();
$p_content .= p_news('normal',null,'news item without read more','#',null,null,false);
$p_content .= p_news('normal','','removed image from default','#',null,null,true);
$p_content .= p_news('short');

$p_content .= "<h2>Factoid</h2>";
$p_content .= p_factoid();

$p_content .= "<h2>Page Intro</h2>";
$p_content .= p_page_intro("sample-page-intro");

$p_content .= "<h2>Profile</h2>";
$p_content .= p_profile();

$p_content .= "<h2>Spotlight</h2>";
$p_content .= p_spotlight('category');

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>