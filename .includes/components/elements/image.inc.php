<?php
function p_image(
	$h = '400',
	$w = '300',
	$phtext = null,
	$caption = null,
	$fill = 'ccc',
	$color = '444',
	$inline_css = ''
	){
	$size = max($w,$h)/30;
	if($size < 20){
		$size = 20;
	}
	if(is_null($phtext)){
		$phtext = 'ph_default_text';
	}
	$string = '';
	if(!is_null($caption)){
		$string .= '<div class="caption" style="width:'.$h.'px;'.$inline_css.'">';
	}
	$string .='<img src="/.includes/images/placeholder-svg.php?wh='.$h.'x'.$w.'&color='.$color.'&fill='.$fill.'&font=Arial&size='.$size.'&txt='.$phtext.'"';
	if(is_null($caption)){
		$string .=' style="'.$inline_css.'"';
	}
	$string .='/>';
	if(!is_null($caption)){
		$string .='<p>'.$caption.'</p>';
		$string .= '</div>';
	}
	return $string;
}