<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo(['type'=>"overlay",'image_type'=>"image",'title'=>"Overlay"]);
$l_content .= p_promo(['type'=>"overlay",'extra_class'=>'hover','image_type'=>"image",'title'=>"Overlay Hover"]);
$l_content .= p_promo(['type'=>"overlayv2",'image_type'=>"image",'title'=>"OverlayV2"]);

$l_promo_sidebar .= p_promo(['type'=>"overlay",'image_type'=>"image",'title'=>"Overlay"]);
$l_promo_sidebar .= p_promo(['type'=>"overlay",'extra_class'=>'hover','image_type'=>"image",'title'=>"Overlay Hover"]);
$l_promo_sidebar .= p_promo(['type'=>"overlayv2",'image_type'=>"image",'title'=>"OverlayV2"]);
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>