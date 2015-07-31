<?php 
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$flexslider = true;
$colorbox = true;
$layout = "generic_inner";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");

//add static promos to regions
$p_promo_sidebar .= p_text_image_intro("left");
$p_promo_sidebar .= p_text_image_intro("right");
$p_promo_sidebar .= p_text_image_intro("center");
//set contents of tabs module
$p_m = array(
	p_event('jan',21),
	p_event('feb',18),
	p_event('mar',1),
);
$p_t = array();
$p_t[1]['t'] = "First Tab";
$p_t[1]['b'] = p_text_image_intro("left");
$p_t[2]['t'] = "Second Tab";
$p_t[2]['b'] = p_text_image_intro("right");
$p_t[3]['t'] = "Upcoming Events";
$p_t[3]['b'] = p_matrix("matrix",$p_m,null,'',0,"View Calendar");
//add tabs module to a region
$p_above_content .= p_tabs("tab-0",$p_t);
//set matrix items
$p_m = array(
	p_text_image_intro("imglink"),
	p_text_image_intro("imglink"),
	p_text_image_intro("imglink"),
	p_text_image_intro("imglink"),
	p_text_image_intro("imglink"),
	p_text_image_intro("imglink"),
	p_text_image_intro("imglink"),
	p_text_image_intro("imglink"),
);
//add matrix to region
$p_above_content .= p_matrix("matrix",$p_m,null,"Title",1);

//set contents of accordion
$p_a = array();
$p_a[1]['t'] = "Accordion 1";
$p_a[1]['b'] = p_text_image_intro("left");
$p_a[2]['t'] = "Accordion 2";
$p_a[2]['b'] = p_text_image_intro("right");
$p_a[3]['t'] = "Accordion 3";
$p_a[3]['b'] = p_text_image_intro("imglink",null,"http://placehold.it/620x220.png");
//add accordion to region
$p_below_content .= p_accordion("acc-0",$p_a);
$p_below_content .= p_carousel('carousel-0',3,null,100,100);
//set contents of links array

//create link list
$p_l = array();
$p_l[1]['url'] = "#";
$p_l[1]['title'] = "link 1";
$p_l[2]['url'] = "#";
$p_l[2]['title'] = "link 2";
$p_l[3]['url'] = "#";
$p_l[3]['title'] = "link 3";
//create events listing matrix
$p_s_m = array(
	p_event('jan',21),
	p_event('feb',18),
	p_event('mar',1),
	p_event('mar',1),
);
//build slider
$p_s = array(
	p_text_image_intro("left"),
	p_text_image_intro("right"),
	p_links("list",$p_l,"Helpful Links"),
	p_matrix("matrix",$p_s_m,2,'',0)
);
//add slider to page
$p_featured_content .= p_slider('slide-0',$p_s);


include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>