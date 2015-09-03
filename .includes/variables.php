<?php
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/"."settings.php");
/*		ADDED TO HEADER.PHP
*	provides a few variables to use for breadcrumbs and navigation
*		$client_name	Plain text name of client
*		$site_logo		URL of site logo
*		$page			URL segment of current page
*		$page_title		URL segment of current page turned into capitalized text
*		$parent			URL segemtnt of direct parent
*		$crumb			Used to build breadcrumb dynamically
*		$section		Top level section of current page (just under root)
*		$section_title	Top level turned into capitalized text
*/

/*Manually set variables*/
	$client_name = 'Client Name';
	$site_logo = "/.includes/images/placeholder-svg.php?wh=600x100&color=111111&fill=cccccc&font=Arial&txt=Site Logo";
	/*choose a header type in the .includes/header folder*/
	$header = 'sticky-h';
	$alert_on = false;

/*Automatically Set Variables*/
	$url = dirname($_SERVER['PHP_SELF']);
	$path = parse_url($url, PHP_URL_PATH);
	$path = str_replace($file_base,'',$path);
	$segments = explode('/', rtrim($path, '/'));
	$segments[0] = 'Home';
	$parent=basename(dirname(dirname(__FILE__)));
	$page=basename($url);
	$page_slug=substr($page,1);
	if($page){
		$section = $segments[1];
		//substr 1 removes the number used for placement in the menu system
		$section_slug = substr($segments[1],1);
		$section_title = titleFromSlug($section_slug);
	}else{
		$page = 'home';
		$page_slug = 'home';
		$section = 'home';
		$section_slug = 'home';
	}
	$page_title = titleFromSlug(substr($page,1));
	$crumb = $file_base;
	$active="";
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
?>