<?php
//include the owl js on the page
$owl = true;
function p_slider_owl($id,$arr = null,$type="generic",$width = 1600,$height = 900){
	$string = 
	'<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$(".'.$id.'").owlCarousel({
				items:1,
				loop:true,
				dots:true,
				nav:true,
				navText:["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
			})
		});
	</script>';
	if($arr == null){
		$img = p_image($width,$height);
		$string .='
		<div class="'.$id.' owl-carousel '.$type.'">
			<div>
				'.p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("overlayv2","","Promo Title",null,null,$img,"#",null,null,true).'
			</div>
		</div>';
	}else{
		$string .='
		<div class="'.$id.' owl-carousel '.$type.'">';
		foreach($arr as $k => $v){
			$string .='<div>'.$v.'</div>';
		}
		$string .='</div>';
	}
	return $string;
}?>
