<?php
/*
*		global functions
*
*/

function titleFromSlug($slug){
	$return = 
		str_replace(" * ","-",
		str_replace("To ","to ",
		str_replace("Of ","of ",
		str_replace("The ","the ",
		str_replace("And","&amp;",
		ucwords(
			str_replace("-"," * ",
			str_replace("_"," ",$slug)
	)))))));
	return $return;
}
?>