<?php
function p_list($arr,$class = '',$title = ''){
	$string = '<div class="p-list '.$class.'">';
	if($class == 'ordered'){
		$string .='<ol>';
	}else{
		$string .='<ul>';
	}
	if ($title != ''){
		$string .="<h2>".$title."</h2>";
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
	return $string;
}?>