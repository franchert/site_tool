<?php
//include the owl js on the page
$owl = true;
//$bS = Small Breakpoint
//$bM = Medium Breakpoint
//$bL = Large Breakpoint
function p_carousel($id,$arr = null,$bS='479,1',$bM='768,2',$bL='1199,3',$width = 200,$height = 200){
	$string = 
	'<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$(".'.$id.'").owlCarousel({
				items:4,
				itemsDesktop : ['.$bL.'],
				itemsDesktopSmall : false,
				itemsTablet: ['.$bM.'],
				itemsTabletSmall: false,
				itemsMobile : ['.$bS.'],
				navigation:true,
				pagination:true,
				navigationText : false
			});
		});
	</script>';
	if($arr == null){
		$string .='
		<div class="'.$id.' owlCarousel">
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
			</div>
			<div>
				<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
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
				$string .= '<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />';
			}
			$string .='</div>';
		}
		$string .='
		</div>';
	}
	return $string;
}?>
