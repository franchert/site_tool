<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$layout = 'one-column';
$feed_search = true;
$instafeed = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($docroot."/.includes/director.php");
$p_one .="<div class='wrapper'><div class='column'>";
$p_one .="<h1>Build-o-Tron Utilities</h1>";
$p_one .= p_promo('generic','comp','left','Server Variables',p_promo('button','image','dark','Variable Check',null,null,null,'.server','check-square-o'),"Check server variables for this page (only if you're having any issues with them)",null,null,'');
$p_one .= p_promo('generic','comp','left','Build the Sitemap',p_promo('button','image','dark','Generate Structure',null,null,null,'.generate','building-o'),"Generate a new Page Structure from the sitemap json file located in the .generate folder.",null,null,'');
$p_one .= p_promo('generic','comp','left','Check Usage',p_promo('button','image','dark','Components',null,null,null,'.usage','cubes'),"Check usage of components</a> so we can start pruning down only to what's actually used. This doesn't measure components used within other components, so make absolute certain components aren't being used before removal.",null,null,'');
$p_one .= p_promo('generic','comp','left','Publish',p_promo('button','image','dark','Publish Now',null,null,null,'.publish','book'),"Publish php files into html for delivery to the client. This could take several minutes, depending on the size of the files to be packaged. This will produce a temporary folder with the client name containing a static version of the site. It will automatically zip these files into a corresponding zip in the root of the project and then delete the temporary folder.",null,null,'');

$p_one .="</div></div>";


include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>