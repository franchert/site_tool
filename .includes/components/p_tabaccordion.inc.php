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
	$active = 1,
	$class = 'acc left',
	$type = 'tab'){

	global $set_tings;
	$string = '';
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
	$string .= '<div class="tabaccordion '.$class.'" id="'.$id.'">';
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	$acc_string ='';
	if($type == 'anchor'){
		$string .='<ul class="ta_tabs">';
		foreach($arr as $k => $v){
			$acc_string .='<li';
			if ($active == $count){
				$acc_string .= ' class="tab-active"';
			}
			$count++;
			$acc_string .='><a href="#ta_'.str_replace(' ','_',strtolower($v["t"])).'" tabindex="0"><h3>'.$v["t"].'</h3></a></li>';
		}
		$string .= $acc_string;
		$acc_string ='';
		$string .='</ul><ul class="ta_container">';
		$count = 1;
		foreach($arr as $k => $v){
			$acc_string .='<li id="ta_'.str_replace(' ','_',strtolower($v["t"])).'"';
			if ($active == $count){
				$acc_string .= ' class="tab-active"';
			}
			$count++;
			$acc_string .='><div>'.$v["b"].'</div></li>';
		}
		$string .=$acc_string;
	}else if($type == 'tab'){
		$string .='<ul>';
		foreach($arr as $k => $v){
			$acc_string .='<li';
			if ($active == $count){
					$acc_string .= ' class="tab-active"';
			}
			$count++;
			$acc_string .='><h3 tabindex="0">'.$v["t"].'</h3><div>'.$v["b"].'</div></li>';
		}
		$string .=$acc_string;
	}
	$string .='</ul></div>';
	return $string;
}?>