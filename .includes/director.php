<?php
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/globals.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/variables.php");
/*	ADDED TO INDEX.PHP (per directory)
*		-initializes region string variables within layouts to populate with components
*		-includes all functions used to create components
*		-initializes any other global variable strings needed
*
*/

/*initialize region string variables*/
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

/*initialize global variables*/
$script_var = '';
$active = '';
global $alert_on;
if($alert_on){
	$alert=array(
		'type' => array(
			'0' => "emgergency",
			'1' => "Campus Wide Alert"
		),
		'message' =>array(
			'0' =>"Evacuation Procedures in Place",
			'1' =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
		),
		'contact' => array(
			'0' => "Police - 911",
			'1' => "Campus Police - 555.555.5555"
		),
	);
}

//include the subnav function
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/subnav.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/nav_fxns.php");

//include everything from the components directories
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/*.inc.php") as $filename){
	include_once($filename);
}
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/elements/*.inc.php") as $filename){
	include_once($filename);
}
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/containers/*.inc.php") as $filename){
	include_once($filename);
}


?>