<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo(['type'=>"panel",'promo_image'=>"image",'title'=>"panel"]);
$l_content .= p_promo(['type'=>"panel",'promo_image'=>"image",'extra_class'=>"dark",'title'=>"panel <span>Dark</span>"]);
$l_content .= p_promo(['type'=>"panel",'promo_image'=>"image",'extra_class'=>"light",'title'=>"panel <span>Light</span>"]);

$l_promo_sidebar .= p_promo(['type'=>"panel",'promo_image'=>"image",'title'=>"panel"]);
$l_promo_sidebar .= p_promo(['type'=>"panel",'promo_image'=>"image",'extra_class'=>"dark",'title'=>"panel <span>Dark</span>"]);
$l_promo_sidebar .= p_promo(['type'=>"panel",'promo_image'=>"image",'extra_class'=>"light",'title'=>"panel <span>Light</span>"]);
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>