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
		<div class="'.$id.' owlCarousel carousel">
			<div>
				'.p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true).'
			</div>
			<div>
				'.p_promo("hovertext","","TextLink Promo",null,null,$img,"#",null,null,true).'
			</div>
		</div>';
	}else{
		$string .='
		<div class="'.$id.' owlCarousel">';
		foreach($arr as $k => $v){
			$string .='<div>';
			if ($v){
				$string .= $v;
			}else{
				$string .= p_promo("hovertext","","TextLink Promo");
			}
			$string .='</div>';
		}
		$string .='
		</div>';
	}
	return $string;
}?>
