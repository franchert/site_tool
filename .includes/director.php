<?php
include_once($docroot."/.includes/globals.php");
include_once($docroot."/.includes/variables.php");

/* sets some automatic variables based on the current directory and settings set in variables*/

$url = dirname($_SERVER['PHP_SELF']);
$path = parse_url($url, PHP_URL_PATH);
$segments = explode('/', rtrim($path, '/'));
$segments[0] = 'Home';
$parent = basename(dirname(dirname(__FILE__)));
if($url === "/"){
	$page = 'home';
	$page_slug = 'home';
	$section = 'home';
	$section_slug = 'home';
}else{
	$page = basename($url);
	$page_slug = substr($page,1);
	$section = $segments[1];
	$section_slug = substr($segments[1],1);
}
$page_title = titleFromSlug($page_slug);
$section_title = titleFromSlug($section_slug);

$client_slug = str_replace(' ','_',strtolower($client_name));

$init = "";

/*	no longer need to show empty regions that don't exist in demo mode 
 *	because pages rely on excluding the region
 */
//if(isset($demo) && $demo){$init = "";}


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
		$fe_container = '';
		$fe_wrapper = ' column';
		$fe_region = ' ';
	}
}

/*initialize global variables*/
$script_var= '';
$active = '';
/*set all the global variables in an array*/
$set_tings = compact(array(
	'docroot',
	'base_site',
	'base_url',
	'url_remove',
	'starting',
	'cms',
	'fe_framework',
	'layout',
	'alert',
	'header',
	'script_var',
	'active',
	'url',
	'path',
	'segments',
	'parent',
	'page',
	'page_slug',
	'page_title',
	'section',
	'section_slug',
	'section_title',
	'site_logo',
	'client_name',
	'client_slug',
	'demo'
));
//print_r($set_tings);
//include everything from the components directories
foreach (glob($docroot."/.includes/components/*.inc.php") as $filename){
	include_once($filename);
}
?>