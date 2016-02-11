<?php
/**
 	NOT READY, still in development
 *	Function to include a grid of components
 *
 *	@param string  $type = 
 *	@param string  $width = 
 *	@param string  $title = 
 *	@param array  $arr = 
 *	@param string  $morelink = 
 */
function p_grid(
	$type='vertical',
	$width=0,
	$title = null,
	$arr=null,
	$morelink='',
	$addl_class='',
	$subtitle=null){

	$string = '';
	if(isset($title) && $title !=''){
		$string .= '<div class="h2-wrap"><h2 class="'.$addl_class.'">'.$title.'</h2></div>';
	}
	if(isset($subtitle) && $subtitle !=''){
		$string .= '<p class="home-h2-sub">'.$subtitle.'</p>';
	}
	if(!is_null($arr) && is_array($arr)){
		$len = count($arr);
	}else{
		if($width == 0){
			$width = 3;
		}
		$len = $width;
	}
	$addclass='';
	if ($len % 5 == 0 || $width == 5){
		$addclass = ('five');
	}else if ($len % 4 == 0 || $width == 4){
		$addclass = ('four');
	}else if ($len % 3 == 0 || $width == 3){
		$addclass = ('three');
	}else if ($len % 2 == 0 || $width == 2){
		$addclass = ('two');
	}else{
		$addclass = ('one');
	}
	$string .='<div class="c-grid '.$type.' '.$addclass.'">';
	if(is_null($arr)){
		while ($len > 0){
			$string .='<div><span style="background:#ccc;width:100%;height:100%;"></span></div>';
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
