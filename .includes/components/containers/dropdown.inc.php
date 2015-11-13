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

	$string = "
	<div class='drop-container ".$type."'>
		<button class='drop-toggle'>".$text."</button>
		<div class='drop-item'>".$item."</div>
	</div>
	";
	return $string;
}