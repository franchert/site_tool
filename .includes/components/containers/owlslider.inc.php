<?php
//include the owl js on the page
$owl = true;
function p_slider($id,$arr = null,$type="generic",$stagepadding=true,$width = 300,$height = 200){
	$string = 
	'<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $(".'.$id.'").owlCarousel({
	    	items:1,
	    	loop:true,
	    	dots:true,
	    	nav:true,
	    	navText:["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
	    	';
	if($stagepadding === true){
	$string .='responsiveClass:true,
	    	    responsive:{
	    	        0:{
	    	        },
	    	        880:{
						
	    	        },
	    	        1120:{
	                    stagePadding: 140
	                }
	    	    }';
	}
	$string .='
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
