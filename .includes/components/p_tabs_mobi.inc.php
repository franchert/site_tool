<?php
/**
 *	Function 
 *
 *	@param string  $arr = 
 *	@param string  $width = 
 */
function p_tabs_mobi(
	$id,
	$collapsable=true,
	$arr = null){

	$string = '<div class="container"><div id="'.$id.'">';
	if ($collapsable){
		$c = ' collapsable';
	}else{
		$c = '';
	}
	if($arr == null){
		$arr=array(
			1 => array(
				"t" => "Nunc tincidunt",
				"b" => p_paragraph(1,'short'),
			),
			2 => array(
				"t" => "Proin dolor",
				"b" => p_paragraph(1,'short'),
			),
			3 => array(
				"t" => "Aenean lacinia",
				"b" => p_paragraph(1,'short'),
			)
		);
	};
	$tab_string ='';
	$body_string = '';
	$o = 'open-desk';
	$string .='<div class="tabs-container'.$c.'"><ul class="tabheaders">';
	foreach($arr as $k => $v){
		$tab_string .='<li class="'.$o.'"><a href="#tabs-'.$k.' ">'.$v["t"].'</a></li>';
		$body_string .='<div class="contents '.$o.'" id="tabs-'.$k.'">'.$v["b"].'</div>';
		$o = '';
	}
	$string .=$tab_string . '</ul>' . $body_string .'</div>';
	$string .='</div></div>';
return $string;
}?>