<?php
/**
 		DEPRECIATED, use accordiontab or accordion if possible
 *	Function to include a jQuery UI Accordion
 *
 *	@param string  $id = identification of this specific accordion
 *	@param array  $arr = array of items to display
 */
function p_accordion_ui(
	$id,
	$arr = null){

	global $set_tings;
	$string = '';
	$set_tings['script_var'] .= '
$(function() {
	$( "#'.$id.'" ).accordion({
		heightStyle: "content"
	});
});
	';
	$string .= infoButton(
		array(
			'fields' => array('tab title','tab contents'),
			'needs' => array('hover tab','focus, active tab'),
			'intro' => 'The p_accordion_ui is a jquery UI accordion option',
			'other' => ''
		)
	);
	$string .='<div id="'.$id.'">';
	if($arr == null){
		$arr=array(
			1 => array(
				"t" => "Section 1",
				"b" => p_paragraph(1,'short'),
			),
			2 => array(
				"t" => "Section 2",
				"b" => p_paragraph(2,'short'),
			),
			3 => array(
				"t" => "Section 3",
				"b" => p_paragraph(2,'short'),
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