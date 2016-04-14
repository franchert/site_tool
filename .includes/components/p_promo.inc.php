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
	$comp_type = "image",
	$addl_class='',
	$title = "Promo Title",
	$item = null,
	$text = null,
	$tag = null,
	$link = "#", 
	$link_title = null,
	$arr=null){

	global $set_tings;

	$alt = (strip_tags($title) == '') ? "placeholder alt text" : strip_tags($title);

	if($comp_type == "image"){
		$img = p_image("400","300");
	}else if($comp_type == "image_url"){
		$img = "<img alt='".$alt."' src='".$item."'/>";
	}else if($comp_type == "comp"){
		$img = ($item === null) ? '':$item;
	}else{
		$img = '';
	}

	if(is_null($text)){
		$text = p_paragraph('1','short',true);
	}else if ($text == ''){
		$text='';
	}else{
		$text = "<p>".$text."</p>";
	}

	$string = "\n<div class='p-promo ".$type." ".$addl_class."'>\n\t";

		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			),'p_promo - '.$type
		);
	if(strrpos($type,"overlayv2") !== false){
		if(!is_null($link)){
			$string .="<a href='".$link."'>\n\t\t";
		}
		$string .= "<div class='item'>".$img."</div>\n\t\t";
		if(!is_null($tag)){
			$string .="<div class='tag'><h3>".$tag."</h3></div>\n\t\t";
		}
		$string .= "<div class='promo-container'>
			";
			$string .="<h2>".$title."</h2>
			";
			$string .= $text."\n\t\t";
		$string .= "</div>\n\t";
		if(!is_null($link)){
			$string .="</a>\n";
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
		$string .= $text;
		$string .= "</div>";
		if(!is_null($link)){
			$string .="</a>";
		}
	}else if(strrpos($type,"panel") !== false){
		if($link != null){
			$string .= "<a href='".$link."'>";
		}
		$string .="<div class='item'>";
		if(!is_null($title)){
			$string .= "<h3>".$title."<span class='sub-text'>".$text."</span></h3>";
		}
		$string.=$img."</div>";
		if($link != null){
			$string .= "</a>";
		}
	}else if(strrpos($type,"reveal") !== false){
		$string .= "<div class='item'>\n\t\t".$img."\n\t</div>\n\t";
		$string .="<a href='".$link."'>\n\t\t";
		$string .="<h2>".$title."</h2>\n\t\t";
		if(is_null($link_title)){
			$string .= "<p>Read More</p>\n\t";
		}else if($link_title == ''){
			$string .='';
		}else{
			$string .= "<p>".$link_title."</p>\n";
		}
		$string .= "</a>\n";
	}else if(strrpos($type,"generic") !== false){
		$string .= "<div class='item'>".$img."</div>\n\t";
		$string .= "<div class='promo-container'>\n\t\t";
			$string .="<h2>".$title."</h2>\n\t\t";
			$string .= $text."\n\t\t";
			if(!is_null($arr)){
				$string .="<ul>";
				foreach($arr as $k => $v){
					$string .= '<li>'.$v.'</li>';
				}
				$string .="</ul>\n\t\t";
			}
			if(is_null($link_title)){
				$string .= "<a class='read-more' href='".$link."'>Read More</a>\n\t";
			}else if($link_title == ''){
				$string .="\n\t";
			}else{
				$string .= "<a class='read-more' href='".$link."'>".$link_title."</a>\n\t";
			}
		$string .= "</div>\n";
	}else if(strrpos($type,"card") !== false){
		if(!is_null($title)){
			$string .="<h4>".$title."</h4>\n\t";
		}
		if(strrpos($type,"light") === false){$string .="<hr>\n\t";}
		$string .= "<div class='item'>".$img."</div>\n\t";
		$string .= "<div class='promo-container'>\n\t\t";
		$string .= $text."\n\t";
		$string .= $item;
		$string .= "</div>\n";
		if(is_null($link_title) || $link_title == ''){
			$string .= "";
		}else{
			$string .= "<a href='".$link."'>".$link_title."</a>\n\t";
		}
	}else if(strrpos($type,"button") !== false){
		$string .="<a href='".$link."'>\n\t\t";
		if(!is_null($item)){
			$string .= $img;
		}
		$string .= "<div class='promo-container'>\n\t\t\t";
			if(is_null($link_title)){
				$string .= "<span class='fa fa-circle'></span>\n\t\t\t";
			}else if($link_title == ''){
				$string .='';
			}else{
				$string .= "<span class='fa fa-".$link_title."'></span>\n\t\t\t";
			}
			$string .="<p>".$title."</p>\n\t\t";
		$string .= "</div>\n\t</a>\n";
	}else{
		$string .= "<p style='color:#222;padding:20px;border:2px solid red;border-radius:5px;background:rgba(255,0,0,0.2);'>The &lsquo;".$type."&rsquo; promo type does not exist. Please try a different name.</p>\n";
	}
	$string .="</div>\n";
	return($string); 
}
?>