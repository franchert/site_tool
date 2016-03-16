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

	global $set_tings;
	if($type != ''){
		if($idORclass == "id"){
			$value = ' id="'.$type.'"';
		}else if($idORclass == "class"){
			$value = ' class="'.$type.'"';
		}
	}else{
		$value = '';
	}
	if(!is_null($arr)){
		if($type == 'ordered'){
			$string .='<ol'.$value.'>
	';
		}else{
			$string .='<ul'.$value.'>
	';
		}
		foreach($arr as $k => $v){
			$string .= '	<li>'.$v.'</li>
	';
		}
		if($type == 'ordered'){
			$string .='</ol>
';
		}else{
			$string .='</ul>
';
		}
	}else{
		if($type == 'ordered'){
			$ltype ='ol';
		}else{
			$ltype ='ul';
		}
		$string ='
			<'.$ltype.$value.'>
				<li>lorem ipsum</li>
				<li>lorem ipsum
					<'.$ltype.$value.'>
						<li>lorem ipsum</li>
						<li>lorem ipsum</li>
						<li>lorem ipsum</li>
					</'.$ltype.'>
				</li>
				<li>lorem ipsum</li>
				<li>lorem ipsum</li>
			</'.$ltype.'>';
	}
	return $string;
}?>