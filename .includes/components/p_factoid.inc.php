<?php
/**
 *	Function 
 *
 *	@param string  $selector = 
 */
function p_factoid(
	$text='42',
	$title='lorem ipsums',
	$image=null){

	global $set_tings;
	if(is_null($image)){
		$image = p_image('400','300');
	}else{
		$image = "<img src='".$image."'/>";
	}
	$string = "\n<div class='factoid'>\n\t<div class='factoid-container'>\n\t\t".$image."<span>".$text."</span>".$title."\n\t</div>\n</div>\n";
	return $string;
}