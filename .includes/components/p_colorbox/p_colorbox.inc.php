<?php
/**
 *	Function 
 *
 *	@param string  $selector = 
 */
function p_colorbox(
	$selector){

	global $set_tings;
	$string = '';
	$set_tings['script_var'] .='
	$(document).ready(function(){
		$("'.$selector.'").colorbox({
			photo:true,
		});
	});';
	return $string;
}?>