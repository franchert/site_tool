<?php
/**
*	Function to include a structure that functions as an Accordion on mobile and tabs on desktop
*
*	@param string  $id = unique ID of structure being displayed
*	@param array  $arr = array of items to display. 
*		Each item should contain two keys, [t] for contents of tab and [b] for contents of body
*/
function p_tabaccordion(
	$id,
	$arr = null,
	$active = 1){

	$string = '<ul class="tabaccordion" id="'.$id.'">';
	$count = 1;
	if($arr == null){
		$arr=array(
			1 => array(
				"t" => "Section 1",
				"b" => p_paragraph(1,'short'),
			),
			2 => array(
				"t" => "Section 2",
				"b" => p_paragraph(1,'short'),
			),
			3 => array(
				"t" => "Section 3",
				"b" => p_paragraph(1,'short'),
			)
		);
	};
	$acc_string ='';
	foreach($arr as $k => $v){
		$acc_string .='<li';
		if ($active == $count){
			$acc_string .= ' class="tab-active"';
		}
		$count++;
		$acc_string .='><h3 tabindex="0">'.$v["t"].'</h3><div>'.$v["b"].'</div></li>';
	}
	$string .=$acc_string;
	$string .='</ul>';
return $string;
}?>