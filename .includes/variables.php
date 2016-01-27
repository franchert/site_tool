<?php
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/"."settings.php");
/**
 *	ADDED TO DIRECTOR.PHP
 *
 *Site-Specific variables that should be changed based on client
 *	@param string	$client_name	Plain text name of client
 *	@param string	$site_logo		URL of site logo
 *	@param string	$alert_on		boolean to turn on and off the alert. Only used within this file
 *	@param string	$demo			demonstration of layout region shapes.
 *	@param string	$header			Type of header to use on the site. See headers directory for more information
 *	@param string	$fe_framework	Type of framework used to put toegether the grid. Some layouts and headers may behave differently with different frameworks chosen.
 *		$fe_container, $fe_wrapper, $fe_region		variables used in creation of the grid
 *
 *Variables based on directory or other static value:
 *	@param string	$url			Overall URL (homepage is / )
 *	@param string	$page			URL segment of current page (last segment of URL, homepage is empty string)
 *	@param string	$page_slug		Removes the first character of $page to form a readable URL
 *	@param string	$page_title		$page_segment turned into readable, capitalized text
 *	@param string	$segments		Array holding each segment of the URL
 *	@param string	$section		Top level section of current page (just under home)
 *	@param string	$section_slug	Removes the first character of $section to form a readable URL
 *	@param string	$section_title	Top level turned into capitalized text
 *	@param string	$parent			URL segemtnt of direct parent of current page
 *	@param string	$crumb			Used to build breadcrumb dynamically
 *
 */

	$client_name = 'Client Name';
	$site_logo = $file_base."/.includes/images/placeholder-svg.php?wh=600x100&color=111111&fill=cccccc&font=Arial&txt=Site Logo";
	$alert_on = false;
	$demo = false;
	$google_CSE_cx = '007701188165887638683:9z5n0yvnab4';

/*choose a header type in the .includes/header folder*/
	$header = 'sticky-h';

/*choose one front-end framework. Make sure the matching css file is located in stylesheets*/
	$fe_framework = 'custom';
	//$fe_framework = 'bootstrap';
	//$fe_framework = 'skeleton'; /*not implemented*/
	//$fe_framework = 'foundation' /*not implemented*/

/*choose the CMS this project is going to be implemented into*/
	$cms = 'ou';
	//$cms = 't4';
	//$cms = 'perc';

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
?>