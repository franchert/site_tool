<?php
function p_list($arr = null,$type = ''){
	if(!is_null($arr)){
		$string = '<div class="p-list '.$type.'">';
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