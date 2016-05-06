<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo(['type'=>"generic",'image_type'=>"image",'title'=>"Generic"]);
$l_content .= p_promo(['type'=>"generic",'image_type'=>"image",'extra_class'=>"left",'title'=>"Generic Left"]);
$l_content .= p_promo(['type'=>"generic",'image_type'=>"image",'extra_class'=>"right",'title'=>"Generic Right"]);
$l_content .= p_promo(['type'=>"generic",'image_type'=>"image",'extra_class'=>"right hover",'title'=>"Generic Hover"]);

$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"image",'title'=>"Generic"]);
$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"image",'extra_class'=>"left",'title'=>"Generic Left"]);
$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"image",'extra_class'=>"right",'title'=>"Generic Right"]);
$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"image",'extra_class'=>"hover",'title'=>"Generic Hover"]);



$l_content .= p_promo(['type'=>"generic",'image_type'=>"item",'title'=>"Generic","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);
$l_content .= p_promo(['type'=>"generic",'image_type'=>"item",'extra_class'=>"left",'title'=>"Generic Left","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);
$l_content .= p_promo(['type'=>"generic",'image_type'=>"item",'extra_class'=>"right",'title'=>"Generic Right","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);
$l_content .= p_promo(['type'=>"generic",'image_type'=>"item",'extra_class'=>"hover",'title'=>"Generic Hover","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);

$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"item",'title'=>"Generic","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);
$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"item",'extra_class'=>"left",'title'=>"Generic Left","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);
$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"item",'extra_class'=>"right",'title'=>"Generic Right","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);
$l_promo_sidebar .= p_promo(['type'=>"generic",'image_type'=>"item",'extra_class'=>"hover",'title'=>"Generic Hover","item"=>p_promo(['type'=>"panel",'image_type'=>"image",'title'=>"Panel"])]);

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>