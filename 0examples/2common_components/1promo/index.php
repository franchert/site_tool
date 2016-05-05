<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo(['type'=>"reveal",'promo_image'=>"image",'title'=>"Reveal"]);
$l_content .= p_promo(['type'=>"button",'promo_image'=>"image",'title'=>"Button"]);
$l_content .= p_promo(['type'=>"button",'promo_image'=>"image",'extra_class'=>"light",'title'=>"Button Light"]);
$l_content .= p_promo(['type'=>"button",'promo_image'=>"image",'extra_class'=>"dark",'title'=>"Button Dark"]);
$l_content .= p_promo(['type'=>"something_else",'promo_image'=>"image","Not Found"]);
$l_content .= p_promo(['type'=>"media",'promo_image'=>"image", 'extra_class'=>"media-left"]);
$l_content .= p_promo(['type'=>"media",'promo_image'=>"image", 'extra_class'=>"media-left media-middle"]);
$l_content .= p_promo(['type'=>"media",'promo_image'=>"image", 'extra_class'=>"media-left media-bottom"]);
$l_content .= p_promo(['type'=>"media",'promo_image'=>"image", 'extra_class'=>"media-right"]);
$l_content .= p_promo(['type'=>"media"]);
$l_content .= p_promo(['type'=>"media"]);

$l_promo_sidebar .= p_promo(['type'=>"reveal",'promo_image'=>"image",'title'=>"Reveal"]);
$l_promo_sidebar .= p_promo(['type'=>"button",'promo_image'=>"image",'title'=>"Button"]);
$l_promo_sidebar .= p_promo(['type'=>"button",'promo_image'=>"image",'extra_class'=>"light",'title'=>"Button Light"]);
$l_promo_sidebar .= p_promo(['type'=>"button",'promo_image'=>"image",'extra_class'=>"dark",'title'=>"Button Dark"]);
$l_promo_sidebar .= p_promo(['type'=>"something_else",'promo_image'=>"image",'title'=>"Not Found"]);

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>