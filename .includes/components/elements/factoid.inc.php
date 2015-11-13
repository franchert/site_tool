<?php
/**
 *	Function 
 *
 *	@param string  $selector = 
 */
function p_factoid(
	$text="42",
	$title="lorem ipsums",
	$image=null){

	if(is_null($image)){
		$image = p_image("400","300");
	}else{
		$image = '<img src="'.$image.'"/>';
	}
	$string = '<div class="factoid"><div class="factoid-container">'.$image.'<span>'.$text.'</span>'.$title.'</div></div>';
	return $string;
}