<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");
$p_matrix_item = p_promo('linkimg',"image");
$p_content .= p_matrix(2,$p_matrix_item);
$p_content .= p_matrix(3,$p_matrix_item);
$p_content .= p_matrix(4,$p_matrix_item);
$p_content .= p_matrix(5,$p_matrix_item);
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>