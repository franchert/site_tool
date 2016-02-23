<?php
/**
 *	Function 
 *
 *	@param string  $arr = 
 *	@param string  $width = 
 */
function p_tabs(
	$id,
	$arr = null,
	$selected = 'active:0,',
	$tabs = 'false',
	$tabs_o = 'false'){

	global $set_tings;
	$set_tings['script_var'] .= '
$(function() {
	$( "#'.$id.'" ).tabs({
		collapsible:'.$tabs.',
		'.$selected.'
	});
});';
	$string = '<div class="container"><div id="'.$id.'">';
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
	$string .='<ul>';
	foreach($arr as $k => $v){
		$tab_string .='<li><a href="#tabs-'.$k.' "><h3>'.$v["t"].'</h3></a></li>';
		$body_string .='<div id="tabs-'.$k.'">'.$v["b"].'</div>';
	}
	$string .=$tab_string . '</ul>' . $body_string;
	$string .='</div></div>';
return $string;
}?>