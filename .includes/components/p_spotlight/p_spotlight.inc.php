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

	global $set_tings;
	if(is_null($date)){
		$date = date("F j, Y");
	}
	$string = "\n<div class='spotlight'>\n\t";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	if(!is_null($type)){
		$string .= "<a href='#' class='cat t-".$type."'>".$type."</a>\n\t";
	}
	if(is_null($image)){
		$string .= p_image("400","300")."\n\t";
	}else{
		$string .= "<img alt='".$title."' src='".$image."'/>\n\t";
	}
	$string .="<p class='date'>".$date."</p>\n\t";
	$string .="<a href='#'><h3>".$title."</h3></a>\n";
	$string .="</div>\n";
	return $string;
}