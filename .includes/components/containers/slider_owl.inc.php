<?php
/**
 *	Function to include a slider
 *
 *	@param string  $arr = 
 *	@param string  $width = 
 */
$owl = true;
function p_slider_owl(
	$id,
	$arr = null,
	$type="generic",
	$width = 1600,
	$height = 900){

	global $script_var;
	$script_var .= '
$(window).load(function() {
	$(".'.$id.'").owlCarousel({
		items:1,
		loop:true,
		dots:true,
		nav:true,
		navText:["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
	})
});
	';
	$string = '';
	if($arr == null){
		$img = p_image($width,$height);
		$string .='
		<div class="'.$id.' owl-carousel '.$type.'">'
			.p_slide(p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true))
		.'</div>';
	}else{
		$string .='
		<div class="'.$id.' owl-carousel '.$type.'">';
		foreach($arr as $k => $v){
			$string .=p_slide($v);
		}
		$string .='</div>';
	}
	return $string;
}?>
