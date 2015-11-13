<?php
/**
*	Function 
*
*	@param string  $type = 
*	@param string  $title = 
*	@param string  $date = 
*	@param string  $image = 
*/
function p_spotlight(
	$type = null,
	$title = 'sample title',
	$date = null,
	$image = null){

	if(is_null($date)){
		$date = date("F j, Y");
	}
	$string = '<div class="promo-spotlight">';
	if(!is_null($type)){
		$string .= "<div class='cat t-".$type."'>".$type."</div>";
	}
	if(is_null($image)){
		$string .= p_image("400","300");
	}else{
		$string .= "<img alt='".$title."' src='".$image."'/>";
	}
	$string .='<div class="date">'.$date.'</div>';
	$string .='<h3><a href="#">'.$title.'</a></h3>';
	$string .='</div>';
	return $string;
}