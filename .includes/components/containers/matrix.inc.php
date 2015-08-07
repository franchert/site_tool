<?php
/**
*	Function to include a text and image intro promo
*
*	@param string  $id = wrapper class around promo
*	@param string  $arr = array of items to display in matrix
*	@param string  $width = set the width manually, null gives dynamic
*	@param string  $offset = set to 1 to use the first space for title
*/
function p_matrix($id,$arr,$width=null,$title = null,$offset=0,$morelink=''){
	if(isset($width)){
		$len = $width + $offset;
	}else{
		$len = count($arr) + $offset;
	}
	$addclass='';
	if ($len == 1){
		
	}else if ($len % 5 == 0 || $width == 5){
		$addclass = ('fifths');
	}else if ($len % 4 == 0 || $width == 4){
		$addclass = ('fourths');
	}else if ($len % 3 == 0 || $width == 3){
		$addclass = ('thirds');
	}else if ($len % 2 == 0 || $width == 2){
		$addclass = ('halves');
	}else{
		$addclass = ('fifths');
	}
	if ($offset == 1){
		$addclass .= ' offset';
	}
	$string ='<div class="matrix '.$id.' '.$addclass.'">';
		if(isset($title) && $title !=''){
			$string .= '<div><h2>'.$title.'</h2></div>';
		}
		foreach($arr as $k => $v){
			$string .='<div>'.$v.'</div>';
		}
		if($morelink != ''){
			$string .= "<a href='#'>".$morelink."</a>";
		}
	$string .='</div>';
	return $string;
}?>
