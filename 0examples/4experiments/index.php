<?php 
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.util/redirect_install.php");
/*page-specific variables*/
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$demo = false;
/*end page-specific variables*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");


/*actual on-page content*/
$p_content .= "This page shows components that are in the works and not yet complete.";
/*end actual on-page content*/

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>