<?php
/**
 *	Function to include a dropdown
 *
 *	@param string  $type = selected version of the dropdown. 
 *		"dark","light" and "" are currently built
 *	@param string  $text = text inside the button dropdown
 *	@param string  $item = contents under the dropdown
 */
function p_dropdown(
	$type="dark",
	$text="sample dropdown",
	$item=null){

	$string = "\n<div class='drop-container ".$type."'>\n\t<button class='drop-toggle'>".$text."</button>\n\t<div class='drop-item'>\n".$item."\n\t</div>\n</div>\n\t";
	return $string;
}