<?php
/**
 *	Function to include an Accordion
 *
 *	@param string  $id
 *	@param array  $arr = array of items to display
 */
function p_accordion(
	$id,
	$arr = null){

	global $script_var;
	$string = '';

	$string .='<div class="accordion" id="'.$id.'">';
	if($arr == null){
		$arr=array(
			1 => array(
				"t" => "Section 1",
				"b" => p_paragraph(1,true),
			),
			2 => array(
				"t" => "Section 2",
				"b" => "second".p_paragraph(1,true),
			),
			3 => array(
				"t" => "Section 3",
				"b" => "third".p_paragraph(1,true),
			)
		);
	};
	$acc_string ='';
	foreach($arr as $k => $v){
		$acc_string .='<h3>'.$v["t"].'</h3><div>'.$v["b"].'</div>';
	}
	$string .=$acc_string;
	$string .='</div>';
return $string;
}?>