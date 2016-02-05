<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$layout = 'generic_inner';
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($docroot."/.includes/director.php");
/*define promos here*/
/*end define promos*/
include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>