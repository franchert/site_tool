<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
$mini = true;
$depth = 2;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");

$p_content .= "<h1>Heading Level 1</h1>";
$p_content .= "<h2>Heading Level 2</h2>";
$p_content .= "<h3>Heading Level 3</h3>";
$p_content .= "<h4>Heading Level 4</h4>";
$p_content .= "<h5>Heading Level 5</h5>";
$p_content .= "<h6>Heading Level 6</h6>";
$p_content .= p_paragraph(3);
$p_content .= p_link();
$p_content .= "<h2>Unordered List</h2>".p_list(null);
$p_content .= "<h2>Ordered List</h2>".p_list(null,"ordered");
$p_content .= p_dropdown("dark","lorem ipsum",p_list());
$p_content .= "<h2>Blockquote</h2>"."<blockquote>".p_paragraph(1,true,false)."</blockquote>";
$p_content .= p_image();
$p_content .= p_image("1600","900","16:9",null,"aa2","fff");
$p_content .= p_image("400","300","overwriting the placeholder image text","This is a caption that will show up below the image","123",'cab');
$p_content .= p_video();
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>