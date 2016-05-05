<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$template = "generic_inner";
$mini = true;
$depth = 2;
include_once($docroot."/.includes/director.php");
$p_matrix_item = p_promo(["type"=>'panel','promo_image'=>"image");
$l_content .= p_matrix(2,$p_matrix_item);
$l_content .= p_matrix(3,$p_matrix_item);
$l_content .= p_matrix(4,$p_matrix_item);
$l_content .= p_matrix(5,$p_matrix_item);
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>