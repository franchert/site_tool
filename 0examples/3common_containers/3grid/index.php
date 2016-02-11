<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = false;
$colorbox = false;
$layout = "generic_inner";

include_once($docroot."/.includes/director.php");
$g_two = array(
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg")
);
$g_three = array(
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg")
);
$g_four = array(
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg")
);
$g_five = array(
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg"),
	p_promo("linkimg","image","","LinkImg")
);
$p_content .= p_grid('horizontal',3,'horizontal 3',$g_three);
$p_content .= p_grid('horizontal right',3,'horizontal right 3',$g_three);
$p_content .= p_grid('vertical',3,'vertical 3',$g_three);
$p_content .= p_grid('vertical',5,'vertical 5',$g_five);
$p_content .= p_grid('offset',2,'offset 2',$g_two);
$p_content .= p_grid('offset right',2,'offset right 2',$g_two);
$p_content .= p_grid('offset',3,'offset 3',$g_three);
$p_content .= p_grid('offset',4,'offset 4',$g_four);
$p_content .= p_grid('offset right',4,'offset right 4',$g_four);
$p_content .= p_grid('offset',5,'offset 5',$g_five);
$p_content .= p_grid('offset right',5,'offset right 5',$g_five);

include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>