<?php
//file base takes into account the path from the web root to the homepage.
$docroot = $_SERVER['DOCUMENT_ROOT'];
$base_site = $docroot.'/';
//base url is what you would type in your browser to visit the site
$base_url="";
$url_remove="";
$starting = 1;
//VPMDEV defaults
	//$base_site="";
	//$url_remove="/home/vpadmin/url.vpmdev.com/";
	//$starting = 4;


	//remaining bugs to be solved

	/*========================================================================================================

	-relative/absolute paths to resources in sass files (can't use php variables)
	.includes/sass/_typography

	  - Added ../../ to font URLs

	========================================================================================================*/

?>
