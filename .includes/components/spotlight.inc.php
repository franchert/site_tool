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
	$string = "\n<div class='promo-spotlight'>\n\t";
	if(!is_null($type)){
		$string .= "<div class='cat t-".$type."'>".$type."</div>\n\t";
	}
	if(is_null($image)){
		$string .= p_image("400","300")."\n\t";
	}else{
		$string .= "<img alt='".$title."' src='".$image."'/>\n\t";
	}
	$string .="<div class='date'>".$date."</div>\n\t";
	$string .="<h3><a href='#'>".$title."</a></h3>\n";
	$string .="</div>\n";
	return $string;
}