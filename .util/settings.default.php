<?php
//base site takes into account the path from the server root to the web root.
$base_site="/var/www/cf-9/";
//file base takes into account the path from the web root to the homepage.
$file_base="";
//base url is what you would type in your browser to visit the site
$base_url="";
$url_remove="";
$starting = 1;
//VPMDEV defaults
	//$base_site="";
	//$url_remove="/home/vpadmin/url.vpmdev.com/";
	//$starting = 4;
// apache default setup (is this working?)
	//$base_site="/var/www/html/sitename";
	//$file_base="/sitename";
	//$url_remove="/html/";
	//$starting = 2;
	//ALSO, /sitename needs to be added to file calls through htaccess



	//remaining bugs to be solved

	/*========================================================================================================

	-relative/absolute paths to resources in sass files (can't use php variables)
	.includes/sass/_typography

	  - Added ../../ to font URLs

	========================================================================================================*/

?>
