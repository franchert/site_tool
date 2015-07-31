<?php
function p_imgcaption($type="full",$width="800",$height="400",$caption="This is a caption positioned off a photo"){
	$string = '<div class="caption"';
	if($type == "left" || $type == "right"){
		$string .= " style='display:block;float:".$type.";width:".$width."px;margin:0 20px;margin-".$type.":0;'";
	}
	$string .='><img src="http://placehold.it/'.$width.'x'.$height.'.png"/>';
	if($caption != null){
		$string.='<p>'.$caption.'</p>';
	}
	$string .='</div>';
	return $string;
}