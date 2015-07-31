<?php 
/**
*	Function to include a text and image intro promo
*
*	@param string  p_wrapper_class = wrapper class around promo
*	@param string  p_title = title displayed on promo
*	@param string  p_intro = intro paragraph
*	@param string  p_link = URL string you're linking to
*/
function p_text_image_intro(
		$p_wrapper_class,
		$p_title = "Promo Title",
		$p_intro = NULL,
		$p_tag = NULL,
		$p_img = NULL,
		$p_link = "#", 
		$p_link_title = null,
		$addl_class='',
		$arr=null
	){
	if(is_null($p_img)){
		$image = "<img alt='placeholder' class='img-center' src='http://placehold.it/120x120.png'/>";
	}else{
		$image = "<img alt='".$p_title."' class='img-center' src='".$p_img."'/>";
	}
	$string = '';
	$string .="<div class='text-image-intro ".$p_wrapper_class." ".$addl_class."'>";
	if(strrpos($p_wrapper_class,"overlay") !== false){
		if(!is_null($p_link)){
			$string .="<a href='".$p_link."'>";
		}
			$string .= $image;
			if(!is_null($p_tag)){
				$string .="<div class='tag'><h3>".$p_tag."</h3></div>";
			}
			$string .= "<div class='container'>";
				$string .="<h2>".$p_title."</h2>";
			if(is_null($p_intro)){
				$p_intro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci";
			}
			$string .= "<p>".$p_intro."</p>";
			if(!is_null($arr)){
				$string .="<ul>";
				foreach($arr as $k => $v){
					$string .= '<li>'.$v.'</li>';
				}
				$string .="</ul>";
			}
			$string .= "</div>";
		if(!is_null($p_link)){
			$string .="</a>";
		}
	}else if(strrpos($p_wrapper_class,"imgtitle") !== false){
			if($p_link != null){
			$string .= "<a href='".$p_link."'>";
			}
			$string .="<img alt='".$p_intro."' src='".$p_img."'/><h2>".$p_title."</h2>";
			if($p_link != null){
				$string .= "</a>";
			}
	}else if(strrpos($p_wrapper_class,"linkimg") !== false){
			if(!is_null($p_title)){
				$string .= "<h4>".$p_title."</h4>";
			}
			if($p_link != null){
				$string .= "<a href='".$p_link."'>";
			}
			$string .="<img alt='".$p_intro."' src='".$p_img."'/>";
			if($p_intro != null){
				$string .= "<p>".$p_intro."</p>";
			}
			if($p_link != null){
				$string .= "</a>";
			}
	}else if(strrpos($p_wrapper_class,"genericv2") !== false){
			if($p_link != null){
				$string .= "<a href='".$p_link."'>";
			}
			$string .= $image;
			$string .= "<div class='container'>";
			$string .="<h2>".$p_title."</h2>";
			if(is_null($p_intro)){
				$p_intro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci.";
			}
			$string .= "<p>".$p_intro."</p>";
			if(!is_null($arr)){
				$string .="<ul>";
				foreach($arr as $k => $v){
					$string .= '<li>'.$v.'</li>';
				}
				$string .="</ul>";
			}
			$string .= "</div>";
			if($p_link != null){
				$string .= "</a>";
			}
	}else if(strrpos($p_wrapper_class,"generic") !== false){
			$string .= $image;
			$string .= "<div class='container'>";
			$string .="<h2>".$p_title."</h2>";
			if(is_null($p_intro)){
				$p_intro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci.";
			}
			$string .= "<p>".$p_intro."</p>";
			if(!is_null($arr)){
				$string .="<ul>";
				foreach($arr as $k => $v){
					$string .= '<li>'.$v.'</li>';
				}
				$string .="</ul>";
			}
			$string .= "</div>";
	}else if(strrpos($p_wrapper_class,"promo") !== false){
			if(!is_null($p_title)){
				$string .="<h4>".$p_title."</h4>";
			}
			if(strrpos($p_wrapper_class,"light") === false){$string .="<hr>";}
			if(is_null($p_img)){
				$string .='';
			}else{
				$string .= $image;
			}
			$string .= "<div class='container'>";
			if(is_null($p_intro)){
				$p_intro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci.";
			} else if($p_intro == ''){
				$string .='';
			}else{
				$string .= "<p class='intro'>".$p_intro."</p>";
			}
			if(is_null($p_link_title) || $p_link_title == ''){
				$string .= "";
			}else{
				$string .= "<a href='".$p_link."'>".$p_link_title."</a>";
			}
			$string .= "</div>";
	}else if(strrpos($p_wrapper_class,"textlink") !== false){
			$string .="<a href='".$p_link."'>";
			$string .="<h4>".$p_title."</h4>";
			$string .= "</a>";
			$string .=$p_intro;
	}else if(strrpos($p_wrapper_class,"button") !== false){
			$string .="<a href='".$p_link."'>";
			if(!is_null($p_img)){
				$string .= $image;
			}
			$string .= "<div class='container'>";
			if(is_null($p_link_title)){
				$string .= "<span class='fa fa-circle'></span>";
			}else if($p_link_title == ''){
				$string .='';
			}else{
				$string .= "<span class='fa fa-".$p_link_title."'></span>";
			}
			$string .="<p>".$p_title."</p>";
			$string .= "</div></a>";
	}else if(strpos($p_wrapper_class,"spotlight") !== false){
		$string .="<img alt='".$p_title."' src='".$p_img."'/>";
		$string .="<h4>".$p_title."</h4>";
		$string .="<strong><p>".$p_tag."</p></strong>";
		$string .="<p>".$p_intro."</p>";
		$string .="<a class='read-more' href='".$p_link."'>Read their story</a>";
	}else{
			$string .= "<div class='container'>";
			$string .= "<h2><a href='".$p_link."'>".$p_title."</a></h2>";
			$string .= $image;
			if(is_null($p_intro)){
				$p_intro = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci,</p>";
			}
			$string .= $p_intro;
			$string .= "<a href='".$p_link."'>Read More</a></div>";
	}
	$string .="</div>";
	return($string); 
}
?>