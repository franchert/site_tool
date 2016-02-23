<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= "<h2>Events</h2>";
$l_content .= p_event();
$l_content .= p_event('tall');
$l_content .= p_event('round');
$l_content .= p_event('basic');

$l_content .= "<h2>News</h2>";
$l_content .= p_news();
$l_content .= p_news('normal',null,'news item without read more','#',null,null,false);
$l_content .= p_news('normal','','removed image from default','#',null,null,true);
$l_content .= p_news('short');

$l_content .= "<h2>Factoid</h2>";
$l_content .= p_factoid();

$l_content .= "<h2>Page Intro</h2>";
$l_content .= p_page_intro("sample-page-intro");

$l_content .= "<h2>Profile</h2>";
$l_content .= p_profile();

$l_content .= "<h2>Spotlight</h2>";
$l_content .= p_spotlight('category');

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>