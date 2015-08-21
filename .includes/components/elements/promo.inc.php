<?php 
/**
*	Function to include a text and image intro promo
*
*	@param string  p_wrapper_class = wrapper class around promo
*	@param string  p_title = title displayed on promo
*	@param string  p_intro = intro paragraph
*	@param string  p_link = URL string you're linking to
*/
function p_promo(
		$p_wrapper_class,
		$addl_class='',
		$p_title = "Promo Title",
		$p_intro = null,
		$p_tag = null,
		$p_img = null,
		$p_link = "#", 
		$p_link_title = null,
		$arr=null,
		$img_tag = false
	){
		//$image = "<img alt='placeholder' class='img-center' src='http://placehold.it/400x400.png'/>";
	if(is_null($p_img)){
		$image = p_image("400","300");
	}elseif(isset($image) && $image == ''){
		$image = "";
	}else{
		if(isset($img_tag) && $img_tag == true){
			$image = $p_img;
		}else{
			$image = "<img alt='".$p_title."' class='img-center' src='".$p_img."'/>";
		}
	}
	$string = '';
	$string .="<div class='p-promo ".$p_wrapper_class." ".$addl_class."'>";

	if(strrpos($p_wrapper_class,"overlayv2") !== false){
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
				$p_intro = file_get_contents('http://loripsum.net/api/1/short/plaintext');
			}
			$string .= "<p>".$p_intro."</p>";
		$string .= "</div>";
		if(!is_null($p_link)){
			$string .="</a>";
		}
	}else if(strrpos($p_wrapper_class,"overlay") !== false){
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
				$p_intro = file_get_contents('http://loripsum.net/api/1/short/plaintext');
			}
			$string .= "<p>".$p_intro."</p>";
		$string .= "</div>";
		if(!is_null($p_link)){
			$string .="</a>";
		}
	}else if(strrpos($p_wrapper_class,"imgtitle") !== false){
		if($p_link != null){
			$string .= "<a class='".$addl_class."' href='".$p_link."'>";
		}
		$string .=$image."<h2>".$p_title."</h2>";
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
		$string .=$image;
		if ($p_intro == ""){
			$p_intro = "";
		}else if(is_null($p_intro)){
			$p_intro = "<p>".file_get_contents('http://loripsum.net/api/1/short/plaintext')."</p>";
		}
		$string .= $p_intro;
		if($p_link != null){
			$string .= "</a>";
		}
	}else if(strrpos($p_wrapper_class,"hovertext") !== false){
		$string .= $image;
		$string .="<a href='".$p_link."'>";
		$string .="<h2>".$p_title."</h2>";
		if(is_null($p_link_title)){
			$string .= "<p>Read More</p>";
		}else if($p_link_title == ''){
			$string .='';
		}else{
			$string .= "<p>".$p_link_title."</p>";
		}
		$string .= "</a>";
	}else if(strrpos($p_wrapper_class,"genericv2") !== false){
		if($p_link != null){
			$string .= "<a href='".$p_link."'>";
		}
		$string .= $image;
		$string .= "<div class='container'>";
			$string .="<h2>".$p_title."</h2>";
			if(is_null($p_intro)){
				$p_intro = file_get_contents('http://loripsum.net/api/1/short/plaintext');
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
				$p_intro = file_get_contents('http://loripsum.net/api/1/short/plaintext');
			}
			$string .= "<p>".$p_intro."</p>";
			if(!is_null($arr)){
				$string .="<ul>";
				foreach($arr as $k => $v){
					$string .= '<li>'.$v.'</li>';
				}
				$string .="</ul>";
			}
			if(is_null($p_link_title)){
				$string .= "<a class='read-more' href='".$p_link."'>Read More</a>";
			}else if($p_link_title == ''){
				$string .="";
			}else{
				$string .= "<a class='read-more' href='".$p_link."'>".$p_link_title."</a>";
			}
		$string .= "</div>";
	}else if(strrpos($p_wrapper_class,"promo") !== false){
		if(!is_null($p_title)){
			$string .="<h4>".$p_title."</h4>";
		}
		if(strrpos($p_wrapper_class,"light") === false){$string .="<hr>";}
		if($p_img === ''){
			$string .='';
		}else{
			$string .= $image;
		}
		$string .= "<div class='container'>";
			if(is_null($p_intro)){
				$p_intro = "<p class='intro'>".file_get_contents('http://loripsum.net/api/1/short/plaintext')."</p>";
			} else if($p_intro == ''){
				$string .='';
			}
			$string .= $p_intro;
			if(is_null($p_link_title) || $p_link_title == ''){
				$string .= "";
			}else{
				$string .= "<a href='".$p_link."'>".$p_link_title."</a>";
			}
		$string .= "</div>";
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
	}else{
		$string .= "<p style='color:#222;padding:20px;border:2px solid red;border-radius:5px;background:rgba(255,0,0,0.2);'>The &lsquo;".$p_wrapper_class."&rsquo; promo type does not exist. Please try a different name.</p>";
	}
	$string .="</div>";
	return($string); 
}
?>