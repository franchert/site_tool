<?php
/**
 *	Function 
 *
 *	@param string  $selector = 
 */
function p_news(
	$type="",
	$img=null,
	$title=null,
	$link="#",
	$cat = null,
	$date=null,
	$text=null,
	$readmore = true){

	global $set_tings;
	if(is_null($img)){
		$image = p_image('300','300');
		$width = "";
	}elseif(isset($img) && $img == ""){
		$image = '';
		$width = " fullwidth";
	}
	if (is_null($date)){
		$date = date("F d,Y");
	}
	if (is_null($title)){
		$title = "lorem ipsum dolor sit amet";
	}
	if(!is_null($cat)){
		if(is_array($cat)){
			$category = "<ul class='categories'>";
			foreach($cat as $k => $v){
				$category .="<li><a href='#' class='cat t-".$v."'>".$v."</a>\n\t</li>";
			}
			$category .= "</ul>";
		}else{
			$category = "<a href='#' class='cat t-".$cat."'>".$cat."</a>\n\t";
		}
	}
	$string = "\n<div class='news_article ".$type."'>\n\t";
		if(strrpos($type,'short') !== false){
			$string .= $category;
			$string .="<a href='".$link."'>\n\t\t";
				$string .=$image."\n\t\t";
				$string .="<div class='news-container".$width."'>\n\t\t\t";
					$string .="<h5>".$date."</h5>\n\t\t\t";
					if ($title != ""){
						$string .="<h2>".$title."</h2>\n\t\t\t";
					}
					if (is_null($text)){
						$string .= p_paragraph(1)."\n\t\t";
					}else{
						$string .="<p>".$text."</p>\n\t";
					}
				$string .= "</div>\n\t";
			$string .="</a>\n\t";
		}else if(strrpos($type,'normal') !== false){
			$string .= $image."\n\t";
			$string .="<div class='news-container".$width."'>\n\t\t";
				$string .="<h5>".$date."</h5>\n\t\t";
				if(!is_null($link)){
					$string .="<a href='".$link."'>\n\t\t\t";
				}
				if ($title != ""){
					$string .="<h2>".$title."</h2>\n\t\t";
				}
				if(!is_null($link)){
					$string .="</a>\n\t\t";
				}
				if (is_null($text)){
					$string .= p_paragraph(1)."\n";
				}else{
					$string .="<p>".$text."</p>\n";
				}
				$string .= $category;
				if($readmore){
					$string .="\t\t<a class='read-more' href='".$link."'>Read More</a>\n";
				}
			$string .= "\t</div>\n";
		}else{
			$string .= $category;
			$string .= $image."\n\t";
			$string .="<div class='news-container".$width."'>\n\t\t";
				if(!is_null($link)){
					$string .="<a href='".$link."'>\n\t\t\t";
				}
				if ($title != ""){
					$string .="<h2>".$title."</h2>\n\t\t\t";
				}
				$string .="<h5>".$date."</h5>\n\t\t";
				if(!is_null($link)){
					$string .="</a>\n\t\t";
				}
					if (is_null($text)){
						$string .= p_paragraph(1)."\n\t\t";
					}else{
						$string .="<p>".$text."</p>\n\t";
					}
				if($readmore){
					$string .="<a class='read-more' href='".$link."'>Read More</a>\n\t";
				}
			$string .= "</div>\n";
		}
	$string .= "</div>\n";
	return $string;
}
?>