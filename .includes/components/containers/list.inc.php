<?php
function p_list($arr = null,$class = ''){
	if(!is_null($arr)){
		$string = '<div class="p-list '.$class.'">';
		if($class == 'ordered'){
			$string .='<ol>';
		}else{
			$string .='<ul>';
		}
		foreach($arr as $k => $v){
			$string .= '<li>'.$v.'</li>';
		}
		if($class == 'ordered'){
			$string .='</ol>';
		}else{
			$string .='</ul>';
		}
		$string .= '</div>';
	}else{
		if($class == 'ordered'){
			$ltype ='ol';
		}else{
			$ltype ='ul';
		}
		$string ='
		<div class="p-list '.$class.'">
			<'.$ltype.'>
				<li>lorem ipsum</li>
				<li>lorem ipsum
					<div class="p-list '.$class.'">
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