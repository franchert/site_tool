<?php 
/**
*	Function to include a text and image intro promo
*
*	@param string  type = wrapper class around promo
*	@param string  title = title displayed on promo
*	@param string  intro = intro paragraph
*	@param string  link = URL string you're linking to
*/
function p_promo(
		$type,
		$addl_class='',
		$title = "Promo Title",
		$text = null,
		$tag = null,
		$image = null,
		$link = "#", 
		$link_title = null,
		$arr=null,
		$img_tag = false
	){
	if(is_null($image)){
		$img = p_image("400","300");
	}elseif(isset($image) && $image == ''){
		$img = "";
	}else{
		//if the <img> tag is already included
		if(isset($img_tag) && $img_tag == true){
			$img = $image;
		}else{
			$img = "<img alt='".$title."' src='".$image."'/>";
		}
	}
	$string = '';
	$string .="<div class='p-promo ".$type." ".$addl_class."'>";

	if(strrpos($type,"overlayv2") !== false){
		if(!is_null($link)){
			$string .="<a href='".$link."'>";
		}
		$string .= $img;
		if(!is_null($tag)){
			$string .="<div class='tag'><h3>".$tag."</h3></div>";
		}
		$string .= "<div class='container'>";
			$string .="<h2>".$title."</h2>";
			if(is_null($text)){
				$text = file_get_contents('http://loripsum.net/api/1/short/plaintext');
			}
			$string .= "<p>".$text."</p>";
		$string .= "</div>";
		if(!is_null($link)){
			$string .="</a>";
		}
	}else if(strrpos($type,"overlay") !== false){
		if(!is_null($link)){
			$string .="<a href='".$link."'>";
		}
		$string .= $img;
		if(!is_null($tag)){
			$string .="<div class='tag'><h3>".$tag."</h3></div>";
		}
		$string .= "<div class='container'>";
			$string .="<h2>".$title."</h2>";
			if(is_null($text)){
				$text = file_get_contents('http://loripsum.net/api/1/short/plaintext');
			}
			$string .= "<p>".$text."</p>";
		$string .= "</div>";
		if(!is_null($link)){
			$string .="</a>";
		}
	}else if(strrpos($type,"imgtitle") !== false){
		if($link != null){
			$string .= "<a class='".$addl_class."' href='".$link."'>";
		}
		$string .=$img."<h2>".$title."</h2>";
		if($link != null){
			$string .= "</a>";
		}
	}else if(strrpos($type,"linkimg") !== false){
		if(!is_null($title)){
			$string .= "<h4>".$title."</h4>";
		}
		if($link != null){
			$string .= "<a href='".$link."'>";
		}
		$string .=$img;
		if ($text == ""){
			$text = "";
		}else if(is_null($text)){
			$text = "<p>".file_get_contents('http://loripsum.net/api/1/short/plaintext')."</p>";
		}
		$string .= $text;
		if($link != null){
			$string .= "</a>";
		}
	}else if(strrpos($type,"hovertext") !== false){
		$string .= $img;
		$string .="<a href='".$link."'>";
		$string .="<h2>".$title."</h2>";
		if(is_null($link_title)){
			$string .= "<p>Read More</p>";
		}else if($link_title == ''){
			$string .='';
		}else{
			$string .= "<p>".$link_title."</p>";
		}
		$string .= "</a>";
	}/*else if(strrpos($type,"genericv2") !== false){
		if($link != null){
			$string .= "<a href='".$link."'>";
		}
		$string .= $img;
		$string .= "<div class='container'>";
			$string .="<h2>".$title."</h2>";
			if(is_null($text)){
				$text = file_get_contents('http://loripsum.net/api/1/short/plaintext');
			}
			$string .= "<p>".$text."</p>";
			if(!is_null($arr)){
				$string .="<ul>";
				foreach($arr as $k => $v){
					$string .= '<li>'.$v.'</li>';
				}
				$string .="</ul>";
			}
		$string .= "</div>";
		if($link != null){
			$string .= "</a>";
		}
	}*/else if(strrpos($type,"generic") !== false){
		$string .= $img;
		$string .= "<div class='container'>";
			$string .="<h2>".$title."</h2>";
			if(is_null($text)){
				$text = file_get_contents('http://loripsum.net/api/1/short/plaintext');
			}
			$string .= "<p>".$text."</p>";
			if(!is_null($arr)){
				$string .="<ul>";
				foreach($arr as $k => $v){
					$string .= '<li>'.$v.'</li>';
				}
				$string .="</ul>";
			}
			if(is_null($link_title)){
				$string .= "<a class='read-more' href='".$link."'>Read More</a>";
			}else if($link_title == ''){
				$string .="";
			}else{
				$string .= "<a class='read-more' href='".$link."'>".$link_title."</a>";
			}
		$string .= "</div>";
	}else if(strrpos($type,"promo") !== false){
		if(!is_null($title)){
			$string .="<h4>".$title."</h4>";
		}
		if(strrpos($type,"light") === false){$string .="<hr>";}
		if($image === ''){
			$string .='';
		}else{
			$string .= $img;
		}
		$string .= "<div class='container'>";
			if(is_null($text)){
				$text = "<p class='intro'>".file_get_contents('http://loripsum.net/api/1/short/plaintext')."</p>";
			} else if($text == ''){
				$string .='';
			}
			$string .= $text;
			if(is_null($link_title) || $link_title == ''){
				$string .= "";
			}else{
				$string .= "<a href='".$link."'>".$link_title."</a>";
			}
		$string .= "</div>";
	}else if(strrpos($type,"button") !== false){
		$string .="<a href='".$link."'>";
		if(!is_null($image)){
			$string .= $img;
		}
		$string .= "<div class='container'>";
			if(is_null($link_title)){
				$string .= "<span class='fa fa-circle'></span>";
			}else if($link_title == ''){
				$string .='';
			}else{
				$string .= "<span class='fa fa-".$link_title."'></span>";
			}
			$string .="<p>".$title."</p>";
		$string .= "</div></a>";
	}else{
		$string .= "<p style='color:#222;padding:20px;border:2px solid red;border-radius:5px;background:rgba(255,0,0,0.2);'>The &lsquo;".$type."&rsquo; promo type does not exist. Please try a different name.</p>";
	}
	$string .="</div>";
	return($string); 
}
?>