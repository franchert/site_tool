<?php
/**
 *	Function to include a text and image intro promo
 *
 *	@param string  $arr = array of items to display in matrix
 *	@param string  $width = set the width manually, null gives dynamic
 *	@param string  $offset = set to 1 to use the first space for title
 */
function p_matrix(
	$width=0,
	$arr=null,
	$title = null,
	$offset=0,
	$morelink=''){

	global $set_tings;
	if(isset($title) && $title !=''){
		$string .= '<div><h2>'.$title.'</h2></div>';
	}
	if(!is_null($arr) && is_array($arr) && $width == 0){
		$len = count($arr) + $offset;
	}else{
		if($width == 0){
			$width = 3;
		}
		$len = $width + $offset;
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
			$addclass = ('thirds');
	}
	if ($offset == 1){
		$addclass .= ' offset';
	}
	$string ='<div class="matrix '.$addclass.'">';
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	if(is_null($arr)){
		while ($len > 0){
			$string .='<div>'.p_promo('generic').'</div>';
			$len --;
		}
	}else if (is_array($arr)){
		foreach($arr as $k => $v){
			$string .='<div>'.$v.'</div>';
		}
	}else{
		while ($len > 0){
			$string .='<div>'.$arr.'</div>';
			$len --;
		}
	}
	if($morelink != ''){
		$string .= "<a href='#'>".$morelink."</a>";
	}
	$string .='</div>';
	return $string;
}?>
