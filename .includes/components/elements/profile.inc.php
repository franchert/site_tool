<?php 
/**
*	Function to include a profile promo
*
*	@param string  
*	@param string  
*	@param string  
*	@param string  
*/
function p_profile($type = '',$name = "John Smith",$title = "Descriptive Title",$text = NULL,$image = NULL){
	$string = '';
	$string .="<div class='profile ".$type."'>";
	if(is_null($image)){
		$image = p_image("400","300");
	}else{
		$string .= "<img alt='".$title."' src='".$image."'/>";
	}
	$string .= "<div class='container'><h4>".$name."</h4>";
	$string .= "<p>".$title."</p>";
	if(is_null($text)){
		$text = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci,</p>";
	}
	$string .= $text;
	$string .="</div></div>";
	return($string); 
}
?>