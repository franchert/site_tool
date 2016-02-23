<?php
/**
 *	Function 
 *
 *	@param string  $selector = 
 */
function p_link(
	$link="#",
	$text="lorem ipsum",
	$type=false){

	global $set_tings;
	$string = "<a";
	if($type != false){
		$string .=" class='".$type."'";
	}
	$string .=" href='".$link."'>".$text."</a>";
	return $string;
}