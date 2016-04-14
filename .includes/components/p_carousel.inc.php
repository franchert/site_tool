<?php
/**
 *	Function to include a carousel
 *
 *	@param string  $id = unique ID of structure being displayed
 *	@param array  $arr = array of items to display. Each array item should be a complete slide
 *	@param string  $bS = Small Breakpoint pixel value
 *	@param string  $bM = Medium Breakpoint pixel value
 *	@param string  $bL = Large Breakpoint pixel value
 */
function p_carousel(
	$id,
	$arr = null,
	$bS=479,
	$bM=768,
	$bL=1199,
	$width = 200,
	$height = 200){

	$owl = true;
	global $set_tings;
	$set_tings['script_var'] .='
$(window).load(function() {
	$(".'.$id.'").owlCarousel({
		resopnsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			'.$bS.':{
				items:2
			},
			'.$bM.':{
				items:3
			},
			'.$bL.':{
				items:3
			}
		},
		nav:true,
		pagination:true,
		loop:true,
		navText:["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"]
	});
});
	';
	$string = '';
	$img = p_image($width,$height,'');
	if($arr == null){
		$string .='
		<div class="'.$id.' owlCarousel carousel">'
			.p_slide(p_promo("reveal","image",'',"Reveal",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("reveal","image",'',"Reveal",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("reveal","image",'',"Reveal",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("reveal","image",'',"Reveal",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("reveal","image",'',"Reveal",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("reveal","image",'',"Reveal",null,null,$img,"#",null,null,true))
		.'</div>
		';
	}else{
		$string .='
		<div class="'.$id.' owlCarousel carousel">';
		foreach($arr as $k => $v){
			if ($v){
				$slide = $v;
			}else{
				$slide = p_promo("reveal","image",'',"Reveal");
			}
			$string .= p_slide($slide);
		}
		$string .='
		</div>';
	}
	return $string;
}?>
