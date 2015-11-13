<?php
/**
 *	Function to include a list
 *
 *	@param array  $arr = 
 *	@param string  $type = 
 *	@param string  $idORclass = 
 */
function p_list(
	$arr = null,
	$type = '',
	$idORclass='class'){

	if(!is_null($arr)){
		if($idORclass == "id"){
			$value = '" id="'.$type;
		}else if($idORclass == "class"){
			$value = ' '.$type;
		}
		$string = '<div class="p-list'.$value.'">';
		if($type == 'ordered'){
			$string .='<ol>';
		}else{
			$string .='<ul>';
		}
		foreach($arr as $k => $v){
			$string .= '<li>'.$v.'</li>';
		}
		if($type == 'ordered'){
			$string .='</ol>';
		}else{
			$string .='</ul>';
		}
		$string .= '</div>';
	}else{
		if($type == 'ordered'){
			$ltype ='ol';
		}else{
			$ltype ='ul';
		}
		$string ='
		<div class="p-list '.$type.'">
			<'.$ltype.'>
				<li>lorem ipsum</li>
				<li>lorem ipsum
					<div class="p-list '.$type.'">
						<'.$ltype.'>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
							<li>lorem ipsum</li>
						</'.$ltype.'>
					</div>
				</li>
				<li>lorem ipsum</li>
				<li>lorem ipsum</li>
			</'.$ltype.'>
		</div>';
	}
	return $string;
}?>