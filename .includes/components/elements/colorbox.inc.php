<?php
/**
 *	Function 
 *
 *	@param string  $selector = 
 */
function p_colorbox(
	$selector){

	global $script_var;
	$string = '';
	$script_var ='
	$(document).ready(function(){
		$("'.$selector.'").colorbox({
			photo:true,
		});
	});';
	return $string;
}?>