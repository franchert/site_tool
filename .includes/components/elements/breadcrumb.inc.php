<?php
/**
*	Function to include a breadcrumb
*/
function breadcrumb(){

	global $segments;
	global $crumb;
	global $fe_wrapper;
	global $fe_container;
	global $fe_region;
	$string = '<div class="'.$fe_wrapper.'"><div id="breadcrumb"><ul>';
	$i = -1;
	$count = count($segments);
	foreach($segments as $segment){
		if ($i !=-1){
			$crumb .=$segment."/";
		}
			$segment = titleFromSlug(substr($segment,1));
		if ($i ==-1){
			$segment = "<span class='fa fa-home'></span>";
			$crumb .= "/";
		}
		$i++;
		$string .= '<li>';
		if($count == $i+1){
			$string .= $segment;
		}else{
			$string .='<a href="'.$crumb.'">'.$segment.'</a>';
		}
		$string .='</li>';
	}
	$string .= '</ul></div></div>';

	return $string;
}
?>