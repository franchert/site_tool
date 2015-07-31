<?php
function p_stat($stat,$byline,$category = null,$class = ''){
	$string = '<div class="promo-stat '.$class.'"><div class="container">';
	if($category != null){
		$string .='<div class="category">'.$category.'</div>';
	}
	if($stat != null){
		$string .='<div class="stat">'.$stat.'</div>';
	}
	$string .='<div class="byline">'.$byline.'</div>';
	$string .='</div></div>';
	return $string;
}