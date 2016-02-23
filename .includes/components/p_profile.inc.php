<?php 
/**
 *	Function 
 *
 *	@param string  $count = 
 *	@param string  $short = 
 *	@param string  $tags = 
 */
function p_profile(
	$type = '',
	$name = "John Smith",
	$title = "Role or Job Title",
	$text = NULL,
	$image = NULL){

	global $set_tings;
	$string = '';
	$string .="\n<div class='profile ".$type."'>\n\t";
	if(is_null($image)){
		$image = p_image("400","600");
	}else{
		$image = "<img alt='".$title."' src='".$image."'/>";
	}
	$string .= $image."\n\t";
	$string .= "<div class='profile-container'>\n\t\t<h4>".$name."</h4>\n\t\t";
	$string .= "<p>".$title."</p>\n\t\t";
	if(is_null($text)){
		$text = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci,</p>";
	}
	$string .= $text."\n\t";
	$string .="</div>\n</div>\n";
	return($string); 
}
?>