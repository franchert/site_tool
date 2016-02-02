<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/**
 *	ADDED TO DIRECTOR.PHP
 *
 *Site-Specific variables that should be changed based on client
 *	@param string	$client_name	Plain text name of client
 *	@param string	$site_logo		URL of site logo
 *	@param string	$alert_on		boolean to turn on and off the alert. Only used within this file
 *	@param string	$demo			demonstration of layout region shapes.
 *	@param string	$google_CSE_cx	Google custom search engine key.
 *	@param string	$header			Type of header to use on the site. See headers directory for more information
 *	@param string	$fe_framework	Type of framework used to put toegether the grid. Some layouts and headers may behave differently with different frameworks chosen.
 *	@param string	$cms			CMS the final product will be built for. When in doubt, go with "custom"
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
	//$fe_framework = 'skeleton'; /*not yet implemented*/
	//$fe_framework = 'foundation' /*not yet implemented*/

/*choose the CMS this project is going to be implemented into*/
	$cms = 'custom';
	//$cms = 't4';
	//$cms = 'ou'; /*not yet implemented*/
	//$cms = 'perc'; /*not yet implemented*/

/*when the alert is on, the information will be pulled from this array*/
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