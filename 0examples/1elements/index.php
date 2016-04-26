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

$l_content .= "<h1>Heading Level 1</h1>";
$l_content .= "<h2>Heading Level 2</h2>";
$l_content .= "<h3>Heading Level 3</h3>";
$l_content .= "<h4>Heading Level 4</h4>";
$l_content .= "<h5>Heading Level 5</h5>";
$l_content .= "<h6>Heading Level 6</h6>";
$l_content .= p_paragraph(3);
$l_content .= p_link();
$l_content .= "<h2>Unordered List</h2>".p_list(null);
$l_content .= "<h2>Ordered List</h2>".p_list(null,"ordered");
$l_content .= p_dropdown("dark","lorem ipsum",p_list());
$l_content .= "<h2>Blockquote</h2>"."<blockquote>".p_paragraph(1,true,false)."</blockquote>";
$l_content .= p_image();
$l_content .= p_image("1600","900","16:9",null,"aa2","fff");
$l_content .= p_image("400","300","overwriting the placeholder image text","This is a caption that will show up below the image","123",'cab');
$l_content .= p_video();
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>