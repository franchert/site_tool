<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*page-specific variables*/
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";
$demo = false;
/*end page-specific variables*/
include_once($docroot."/.includes/director.php");


/*actual on-page content*/
$l_content .= "This page shows components that are in the works and not yet complete.";
/*end actual on-page content*/

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>