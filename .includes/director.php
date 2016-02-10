<?php
include_once($docroot."/.includes/globals.php");
include_once($docroot."/.includes/variables.php");

/* sets some automatic variables based on the current directory and settings set in variables*/

$url = dirname($_SERVER['PHP_SELF']);
$path = parse_url($url, PHP_URL_PATH);
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
$crumb = '';

$client_slug = str_replace(' ','_',strtolower($client_name));

$init = "";
if(isset($demo) && $demo){$init = " ";}
/*initialize region string variables*/
if(isset($layout)){
	include($docroot.'/.includes/layouts/'. $layout.'/'.$layout.'.regions.php');
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
foreach (glob($docroot."/.includes/components/*.inc.php") as $filename){
	include_once($filename);
}
?>