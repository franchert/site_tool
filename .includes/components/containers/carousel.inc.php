<?php
//$bS = Small Breakpoint,number of elements visible
//$bM = Medium Breakpoint,number of elements visible
//$bL = Large Breakpoint,number of elements visible
function p_carousel($id,$arr = null,$bS=479,$bM=768,$bL=1199,$width = 200,$height = 200){
	//include the owl js on the page
	$owl = true;
	$string = 
	'<script type="text/javascript" charset="utf-8">
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
						items:4
					},
					'.$bL.':{
						items:4
					}
				},
				nav:true,
				pagination:true,
				loop:true,
				navText:["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"]
			});
		});
	</script>';
	$img = p_image($width,$height,'');
	if($arr == null){
		$string .='
		<div class="'.$id.' owlCarousel carousel">'
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
			.p_slide(p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true))
		.'</div>';
	}else{
		$string .='
		<div class="'.$id.' owlCarousel">';
		foreach($arr as $k => $v){
			if ($v){
				$slide = $v;
			}else{
				$slide = p_promo("hovertext","","TextLink Promo");
			}
			$string .= p_slide($slide);
		}
		$string .='
		</div>';
	}
	return $string;
}?>
