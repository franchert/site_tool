<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/**
 *	ADDED TO DIRECTOR.PHP
 *
 *Site-Specific variables that should be changed based on client
 *	@param string	$client_name	Plain text name of client
 *	@param string	$site_logo		URL of site logo
 *	@param string	$alert_on		boolean to turn on and off the alert. Only used within this file
 *	@param string	$demo			demonstration of template region shapes.
 *	@param string	$google_CSE_cx	Google custom search engine key.
 *	@param string	$header			Type of header to use on the site. See headers directory for more information
 *	@param string	$fe_framework	Type of framework used to put toegether the grid. Some templates and headers may behave differently with different frameworks chosen.
 *	@param string	$cms			CMS the final product will be built for. When in doubt, go with "custom"
 *
 */

$client_name = 'Client Name';
$site_logo = "/.includes/images/placeholder-svg.php?wh=200x60&color=111111&fill=cccccc&font=Arial&txt=Site Logo&size=20";
$alert_on = false;
$google_CSE_cx = '007701188165887638683:9z5n0yvnab4';

/* demo shows the button to toggle demo mode and adds the html info hovers */
$demo = true;

/*	$header
 *	choose a header type in the .includes/header folder
 *	when creating new header types, be sure to include a js file, php file
 *	and scss file compiled into the screen.css file. Each of these files needs
 *	to match the directory and the variable set below.
 */
	$header = 'generic';
	//$header = 'sticky-h';
	//$header = 'fold-out';
	//$header = 'nav-plus';
/*end header*/

/*	$fe_framework
 *	choose one front-end framework. setting up new frameworks requires 
 *	compiling
 *	impacts:
 *	 - the container/wrapper classes set in director.php
 *	 - the region classes set in each template php
 *	 - js file added from .includes/js/
 *	 - scss file added from .includes/sass/ (compiled to the stylesheets)
 */

	$fe_framework = 'custom';
	//$fe_framework = 'bootstrap'; /*not fully tested*/
	//$fe_framework = 'skeleton'; /*not yet implemented*/
	//$fe_framework = 'foundation'; /*not yet implemented*/
/*end $fe_framework*/

/*	$cms
 *	choose the CMS this project is going to be implemented into
 *	 - structure of main navigation
 *	 - type of subnav tree generated
 *	 - if body classes can be added or not
 */

	$cms = 'custom';
	//$cms = 't4';
	//$cms = 'ou'; /*not yet implemented*/
	//$cms = 'perc'; /*not yet implemented*/
/*end $cms*/

/*when the alert is on, the information will be pulled from this array*/
	$alert=array(
		'type' => array(
			'0' => "emergency",
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
		'updated' => '1459273439'
	);

?>