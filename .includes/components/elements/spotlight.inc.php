<?php
function p_spotlight($title = 'sample title',$cat = null,$date = null,$img = null){
	if(is_null($date)){
		$date = date("F j, Y");
	}
	$string = '<div class="promo-spotlight"><div class="container">';
	if(!is_null($cat)){
		$string .= "<div class='cat t-".$cat."'>".$cat."</div>";
	}
	if(is_null($img)){
		$string .= "<img alt='placeholder' src='http://placehold.it/300x200.png'/>";
	}else{
		$string .= "<img alt='".$title."' src='".$img."'/>";
	}
	$string .='<div class="date">'.$date.'</div>';
	$string .='<h3><a href="#">'.$title.'</a></h3>';
	$string .='</div></div>';
	return $string;
}