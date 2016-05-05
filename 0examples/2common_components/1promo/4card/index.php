<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";

include_once($docroot."/.includes/director.php");

$l_content .= p_promo(['type'=>"card",'promo_image'=>"image","title"=>"Card"]);
$l_content .= p_promo(['type'=>"card",'promo_image'=>"image",'extra_class'=>"light","title"=>"Card Light"]);
$l_content .= p_promo(['type'=>"card",'promo_image'=>"image",'extra_class'=>"dark","title"=>"Card Dark"]);
$l_content .= p_promo(['type'=>"card",'promo_image'=>"image","title"=>"Card with a list",'item'=>p_list([p_link(),p_link(),p_link()])]);
$l_content .= p_promo(['type'=>"card",'promo_image'=>"image","title"=>"Card with a list",'item'=>p_promo(["type"=>'button',"promo_image"=>'image',"extra_class"=>'dark',"title"=>'With a dark button!'))));

$l_promo_sidebar .= p_promo(['type'=>"card",'promo_image'=>"image","title"=>"Card"]);
$l_promo_sidebar .= p_promo(['type'=>"card",'promo_image'=>"image",'extra_class'=>"light","title"=>"Card Light"]);
$l_promo_sidebar .= p_promo(['type'=>"card",'promo_image'=>"image",'extra_class'=>"dark","title"=>"Card Dark"]);
$l_promo_sidebar .= p_promo(['type'=>"card",'promo_image'=>"image","title"=>"Card with a list",'item'=>p_list([p_link(),p_link(),p_link()])]);
$l_promo_sidebar .= p_promo(['type'=>"card",'promo_image'=>"image","title"=>"Card with a list",'item'=>p_promo(["type"=>'button',"promo_image"=>'image',"extra_class"=>'dark',"title"=>'With a dark button!'])));

include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>