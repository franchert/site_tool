<?php
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/globals.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/variables.php");

/*	ADDED TO INDEX.PHP (per directory)
*		-creates some basic variables from the server for use building URL and page info
*		-initializes region string variables within layouts to populate with components
*		-includes all functions used to create components
*		-initializes any other global variable strings needed
*
*/

$url = dirname($_SERVER['PHP_SELF']);
$path = parse_url($url, PHP_URL_PATH);
$path = str_replace($file_base,'',$path);
$segments = explode('/', rtrim($path, '/'));
$segments[0] = 'Home';
$parent=basename(dirname(dirname(__FILE__)));
if($url === "/"){
	$page = 'home';
	$page_slug = 'home';
	$section = 'home';
	$section_slug = 'home';
}else{
	$page=basename($url);
	$page_slug=substr($page,1);
	$section = $segments[1];
	$section_slug = substr($segments[1],1);
}
$page_title = titleFromSlug($page_slug);
$section_title = titleFromSlug($section_slug);
$crumb = $file_base;

/*add a space if we're demoing regions*/
$init = "";
if(isset($demo) && $demo){$init = " ";}

/*initialize region string variables*/
if(isset($layout)){
	if ($layout == "generic_inner"){
		$p_featured_header = $init;
		$p_content_header = $init;
		$p_nav_sidebar = $init;
		$p_content = $init;
		$p_content_featured = $init;
		$p_promo_sidebar = $init;
		$p_content_footer = $init;
	}
	if($layout == "longscroll"){
		$p_longscroll_first = $init;
		$p_longscroll_second = $init;
		$p_longscroll_third = $init;
		$p_longscroll_fourth = $init;
	}
	if($layout == "one-column"){
		$p_one = $init;
	}
}

if(isset($fe_framework)){
	if($fe_framework == 'custom'){
		$fe_container = ' column';
		$fe_wrapper = ' wrapper';
		$fe_region = ' l-region';
	}
	if($fe_framework == 'bootstrap'){
		$fe_wrapper = ' container';
		$fe_container = ' container';
		$fe_region = ' row';
	}
}

/*initialize global variables*/
$script_var = '';
$active = '';


//include everything from the components directories
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/*.inc.php") as $filename){
	include_once($filename);
}
/*
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/elements/*.inc.php") as $filename){
	include_once($filename);
}
foreach (glob($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/components/containers/*.inc.php") as $filename){
	include_once($filename);
}
*/

?>