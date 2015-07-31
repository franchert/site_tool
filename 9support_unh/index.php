<?php 
include_once("../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'generic_inner';
$instafeed = false;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/
$p_content_header .= '<div class="wrapper"><div class="column"><img src="https://placehold.it/1200x600.png" alt="placeholder image"/></div></div>';
$p_content .= '<img src="https://placehold.it/650x160.png"/><p>Dear Fellow Alumni and Friends,</p>';
$p_content .= '<p>As a fellow UNH graduate and president of the University Alumni Association, I ask that you join me in making a most meaningful investment in our students. Your gift - of any amount - will help todays students achieve their goals, develop their leadership potential and make a positive change in their communities and around the world.</p>';
$p_content .= '<img style="display:block;float:right;" src="https://placehold.it/200x200.png"/>';
$p_content .= '<p>Every gift makes a difference, and I am grateful for your generosity. Please join me and affirm your commitment today.</p>';
$p_content .= '<p>Thank you for making a lasting difference in the lives of deserving UNH students</p>';
$p_content .= '<img style="float:left;display:block;margin-right:10px;" src="https://placehold.it/100x125.png"/>';
$p_content .= '<p><a href="#">Click Here to make your gift today</a></p>';
$p_content .= '<p>Warmest Regards,</p>';
$p_content .= '<p>Paula-Marie Uscilla &rsquo;99</br>President,</br>UNH Alumni Association Board of Directors</p>';
$arr[1]['t'] = "How to Give";
$arr[2]['t'] = "Why Give?";
$arr[3]['t'] = "Impact of Giving";
$arr[1]['b'] = "<h3>Three Easy Ways to Make Your Gift</h3>".p_paragraph(2);
$arr[2]['b'] = "<h3>Tab 2</h3>".p_paragraph(2);
$arr[3]['b'] = "<h3>Tab 3</h3>".p_paragraph(2);
$p_content .=p_tabs("tab-3",$arr);
$p_promo_sidebar .= "<section><h2>Make A Gift</h2>".p_text_image_intro(
	"button light",
	"Donate Now",
	null,
	null,
	null,
	"#",
	"usd"
)."</section>";
$p_promo_sidebar .="<section><h2>Thank You!</h2>".p_paragraph().p_video()."</section>";
$p_promo_sidebar .="<section><h2>Donor Spotlight</h2>".p_text_image_intro(
	"spotlight",
	"Mark Ceccorulli",
	"Mark remembers what it was like to work full time, attend school and take care of a family. Several years ago, he put his son through law school. I'm amazed at the debt some of the students have to take on, he says. If we all gave back, we could make it easier on those kids.",
	"89 MBA Director of Precision Optics, Goodrich Corporation",
	"https://placehold.it/200x200.png"
	)."</section>";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>