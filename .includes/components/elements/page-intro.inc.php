<?php 
/**
*	Function to include a text and image intro promo
*
*	@param string  p_wrapper_class = wrapper class around promo
*	@param string  p_title = title displayed on promo
*	@param string  p_intro = intro paragraph
*	@param string  p_array = list of links to be displayed under the intro
*/
function p_page_intro($p_wrapper_class,$p_title = "Promo Title",$p_intro = NULL,$p_img = NULL,$p_array = null,$p_add = null){
	$string = '';
	$string .="<div class='page-intro ".$p_wrapper_class."'>";
	$string .= "<div class='container'><h2>".$p_title."</h2>";
	if(is_null($p_img)){
		$string .= "<img alt='placeholder' src='http://placehold.it/120x120.png'/>";
	}else{
		$string .= "<img alt='".$p_title."' src='".$p_img."'/>";
	}
	if(is_null($p_intro)){
		$p_intro = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci,</p>";
	}
	$string .= $p_intro;
	if(is_null($p_add)){

	}else{
		$string .= "<div class='extra'>";
		if(is_array($p_add)){
			foreach($p_add as $k => $v){
				$string .= "<ul>";
					$string .='<li><a href="'.$v['l'].'">'.$v['t'].'</a></li>';
				}
			$string .= "</ul>";
		}else{
			$string .= $p_add;
		}
		$string .= "</div>";
	}
	if($p_wrapper_class == "search"){
		$string .= "<div class='search-container'><input type='text' placeholder='What do you want to study?'><input type='submit' value='submit'><span>OR</span><a href='#'>View All Academic Programs</a></div>";
	}else{
		if(is_null($p_array)){}else{
			$string .= "<ul>";
			foreach($p_array as $k => $v){
				$string .='<li><a href="'.$v['l'].'">'.$v['t'].'</a></li>';
			}
			$string .= "</ul>";
		}
	}
	$string .="</div>";
	return($string); 
}
?>