<?php 
/**
*	Function to include a profile promo
*
*	@param string  
*	@param string  
*	@param string  
*	@param string  
*/
function p_profile($p_wrapper_class = '',$p_name = "John Smith",$p_title = "Descriptive Title",$p_intro = NULL,$p_img = NULL){
	$string = '';
	$string .="<div class='profile ".$p_wrapper_class."'>";
	if(is_null($p_img)){
		$string .= "<img alt='placeholder' src='http://placehold.it/100x100.png'/>";
	}else{
		$string .= "<img alt='".$p_title."' src='".$p_img."'/>";
	}
	$string .= "<div class='container'><h4>".$p_name."</h4>";
	$string .= "<p>".$p_title."</p>";
	if(is_null($p_intro)){
		$p_intro = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci,</p>";
	}
	$string .= $p_intro;
	$string .="</div></div>";
	return($string); 
}
?>