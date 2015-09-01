<?php
// initialize promo regions per template so we can fill them out with elements on the template level
if ($layout == "generic_inner"){
	$p_featured_header = "";
	$p_content_header = "";
	$p_nav_sidebar = "";
	$p_content = "";
	$p_content_featured = "";
	$p_promo_sidebar = "";
	$p_content_footer = "";
}
if ($layout == "bio"){
	$p_featured_header = "";
	$p_content_header = "";
	$p_nav_sidebar = "";
	$p_content = "";
	$p_content_featured = "";
	$p_promo_sidebar = "";
	$p_content_footer = "";
}
if($layout == "two_column"){
	$p_content_header = "";
	$p_content_center = "";
	$p_content_right = "";
	$p_content_footer = "";
}
if($layout == "longscroll"){
	$p_longscroll_first = "";
	$p_longscroll_second = "";
	$p_longscroll_third = "";
	$p_longscroll_fourth = "";
}
if($layout == "one-column"){
	$p_one = "";
}

//include the subnav function
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/subnav.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/nav_fxns.php");

//include everything from the components folder
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/*.inc.php") as $filename){
	include_once($filename);
}
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/elements/*.inc.php") as $filename){
	include_once($filename);
}
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/containers/*.inc.php") as $filename){
	include_once($filename);
}

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/variables.php");

?>