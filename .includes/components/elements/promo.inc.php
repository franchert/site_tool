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
	$img_type = "image",
	$addl_class='',
	$title = "Promo Title",
	$item = null,
	$text = null,
	$tag = null,
	$link = "#", 
	$link_title = null,
	$arr=null){

	if($img_type == "image"){
		$img = p_image("400","300");
	}else if($img_type == "comp"){
		$img = $item;
	}else if($img_type == "image_url"){
		$img = "<img alt='".$title."' src='".$item."'/>";
	}else{
		$img = '';
	}

	$string = '';
	$string .="<div class='p-promo ".$type." ".$addl_class."'>";

	if(strrpos($type,"overlayv2") !== false){
		if(!is_null($link)){
			$string .="<a href='".$link."'>";
		}
		$string .= "<div class='item'>".$img."</div>";
		if(!is_null($tag)){
			$string .="<div class='tag'><h3>".$tag."</h3></div>";
		}
		$string .= "<div class='promo-container'>";
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
		$string .= "<div class='item'>".$img."</div>";
		if(!is_null($tag)){
			$string .="<div class='tag'><h3>".$tag."</h3></div>";
		}
		$string .= "<div class='promo-container'>";
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
		$string .="<div class='item'>".$img."</div><h2>".$title."</h2>";
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
		$string .="<div class='item'>".$img."</div>";
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
		$string .= "<div class='item'>".$img."</div>";
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
	}else if(strrpos($type,"generic") !== false){
		$string .= "<div class='item'>".$img."</div>";
		$string .= "<div class='promo-container'>";
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
		if($item === ''){
			$string .='';
		}else{
			$string .= "<div class='item'>".$img."</div>";
		}
		$string .= "<div class='promo-container'>";
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
		if(!is_null($item)){
			$string .= $img;
		}
		$string .= "<div class='promo-container'>";
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