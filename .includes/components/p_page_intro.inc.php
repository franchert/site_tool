<?php 
/**
 *	Function to include a text and image intro promo
 *
 *	@param string  type = wrapper class around promo
 *	@param string  title = title displayed on promo
 *	@param string  text = intro paragraph
 *	@param string  arr = list of links to be displayed under the intro
 */
function p_page_intro(
	$type,
	$title = "Sample Page Intro",
	$text = NULL,
	$image = NULL,
	$arr = null,
	$item = null){

	global $set_tings;
	$string = '';
	$string .="\n<div class='page-intro ".$type."'>\n\t";
	$string .= "<h2>".$title."</h2>\n\t";
	if(is_null($image)){
		$image = p_image("400","300");
	}else{
		$image = "<img alt='".$title."' src='".$image."'/>";
	}
	$string .= $image."\n\t";
	if(is_null($text)){
		$text = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci,</p>";
	}
	$string .= $text."\n";
	if(!is_null($item)){
		$string .= "<div class='extra'>";
		if(is_array($item)){
			foreach($item as $k => $v){
				$string .= "<ul>";
					$string .='<li><a href="'.$v['l'].'">'.$v['t'].'</a></li>';
				}
			$string .= "</ul>";
		}else{
			$string .= $item;
		}
		$string .= "</div>";
	}
	if($type == "search"){
		$string .= "<div class='search-container'><input type='text' placeholder='What do you want to study?'><input type='submit' value='submit'><span>OR</span><a href='#'>View All Academic Programs</a></div>";
	}else{
		if(is_null($arr)){}else{
			$string .= "<ul>";
			foreach($arr as $k => $v){
				$string .='<li><a href="'.$v['l'].'">'.$v['t'].'</a></li>';
			}
			$string .= "</ul>";
		}
	}
	$string .="</div>\n";
	return($string); 
}
?>