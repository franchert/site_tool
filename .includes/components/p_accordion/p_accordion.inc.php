<?php
/**
 *	Function to include an Accordion
 *
 *	@param string  $id = identification of this specific accordion
 *	@param array  $arr = array of items to display
 */
function p_accordion(
	$id,
	$arr = null){

	global $set_tings;
	$string = '';

	$string .='<div class="accordion" id="'.$id.'">';
	$string .= infoButton(
		array(
			'fields' => array('tab title','tab contents'),
			'needs' => array('hover tab','focus, active tab'),
			'intro' => 'The p_accordion promo is used to display related topics together in a small space in order to let the user compare and/or choose the best fit for their needs.',
			'other' => ''
		)
	);
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
		$acc_string .='<h3 tabindex="0">'.$v["t"].'</h3><div>'.$v["b"].'</div>';
	}
	$string .=$acc_string;
	$string .='</div>';
return $string;
}?>