<?php
//include the owl js on the page
$owl = true;
function p_slider_custom($id,$arr = null,$type="generic",$stagepadding=true,$width = 300,$height = 200){
	$string = 
	'<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $(".'.$id.'").owlCarousel({
	    	items:1,
	    	loop:true,
	    	dots:true,
	    	nav:true,
	    	navText:["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
	    	responsiveClass:true,
	    	    responsive:{
	    	        0:{
	    	        	items:1,
	    	        },
	    	        720:{
						items:2,
	    	        },
	    	        880:{
						items:2,
	    	        },
	    	        1120:{
	                    items:2,
	                }
	    	    }
	    })
	  });
	</script>';
	if($arr == null){
		$string .='
		<div class="'.$id.' owl-carousel '.$type.'">
			<div>
				<a href="#">
					<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
				</a>
				<p class="flex-caption">This image is wrapped in a link.</p>
			</div>
			<div>
				<a href="#">
					<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
				</a>
				<p class="flex-caption">This image is wrapped in a link.</p>
			</div>
			<div>
				<a href="#">
					<img alt="placeholder" src="http://placehold.it/'.$width.'x'.$height.'" />
				</a>
				<p class="flex-caption">This image is wrapped in a link.</p>
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
