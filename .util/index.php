<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$template = 'one-column';
$feed_search = true;
$instafeed = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($docroot."/.includes/director.php");

$l_one_col .="<div class='wrapper'><div class='column'>";
$l_one_col .="<h1>Build-o-Tron Utilities</h1>";
$l_one_col .= p_promo([
	"type"=>'generic',
	"image_type"=>'item',
	"link_title"=>'',
	"extra_class"=>'left',
	"title"=>'Drag and Drop Sitemap Builder',
	"item"=>p_promo([
		"type"=>'button',
		"image_type"=>'image',
		"extra_class"=>'dark',
		"title"=>'Sitemap',
		"link"=>'.sitemap',
		"link_title"=>'bookmark-o'
	]),
	'text'=>"Build the sitemap here first."
]);
$l_one_col .= p_promo(["type"=>'generic',
	"image_type"=>'item',
	"extra_class"=>'left',
	"link_title"=>'',
	"title"=>'Global Variables',
	"item"=>p_promo([
		"type"=>'button',
		"image_type"=>'image',
		"extra_class"=>'dark',
		"title"=>'Global Variables',
		"link"=>'.server',
		"link_title"=>'check-square-o'
	]),
	'text'=>"Check global variables for this page and sitewide (only needed if you're having any issues with them)"
]);
$l_one_col .= p_promo(["type"=>'generic',
	"image_type"=>'item',
	"extra_class"=>'left',
	"title"=>'Check Usage',
	"link_title"=>'',
	"item"=>p_promo([
		"type"=>'button',
		"image_type"=>'image',
		"extra_class"=>'dark',
		"title"=>'Components',
		"link"=>'.usage',
		"link_title"=>'cubes'
	]),
	'text'=>"Check usage of components</a> so we can start pruning down only to what's actually used. This doesn't measure components used within other components, so make absolute certain components aren't being used before removal."
]);
$l_one_col .= p_promo(["type"=>'generic',
	"image_type"=>'item',
	"extra_class"=>'left',
	"title"=>'Publish',
	"link_title"=>'',
	"item"=>p_promo([
		"type"=>'button',
		"image_type"=>'image',
		"extra_class"=>'dark',
		"title"=>'Publish Now',
		"link"=>'.publish',
		"link_title"=>'book'
	]),
	'text'=>"Publish php files into html for delivery to the client. This could take several minutes, depending on the size of the files to be packaged. This will produce a temporary folder with the client name containing a static version of the site. It will automatically zip these files into a corresponding zip in the root of the project."
]);
$l_one_col .="</div></div>";

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>