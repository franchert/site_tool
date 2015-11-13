<?php
/**
 *	Function 
 *
 *	@param string  $selector = 
 */
function p_news(
	$type='',
	$img=null,
	$title=null,
	$link='#',
	$date=null,
	$text=null,
	$readmore = true){

	if(is_null($img)){
		$image = p_image("300","300");
		$width = '';
	}elseif(isset($img) && $img == ''){
		$image = "";
		$width = ' fullwidth';
	}
	if (is_null($date)){
		$date = date('F d,Y');
	}
	if (is_null($title)){
		$title = 'lorem ipsum dolor sit amet';
	}
	$string = '<div class="news_article '.$type.'">';
		if(strrpos($type,"short") !== false){
			$string .="<a href='".$link."'>";
				$string .=$image;
				$string .='<div class="news-container'.$width.'">';
					$string .='<h5>'.$date.'</h5>';
					if ($title != ''){
						$string .='<h2>'.$title.'</h2>';
					}
					if (is_null($text)){
						$string .= p_paragraph(1);
					}else{
						$string .='<p>'.$text.'</p>';
					}
				$string .= '</div>';
			$string .="</a>";
		}else if(strrpos($type,"normal") !== false){
			$string .=$image;
			$string .='<div class="news-container'.$width.'">';
				$string .='<h5>'.$date.'</h5>';
				if(!is_null($link)){
					$string .="<a href='".$link."'>";
				}
				if ($title != ''){
					$string .='<h2>'.$title.'</h2>';
				}
				if(!is_null($link)){
					$string .="</a>";
				}
					if (is_null($text)){
						$string .= p_paragraph(1);
					}else{
						$string .='<p>'.$text.'</p>';
					}
				if($readmore){
					$string .='<a class="read-more" href="'.$link.'">Read More</a>';
				}
			$string .= '</div>';
		}else{
			$string .=$image;
			$string .='<div class="news-container'.$width.'">';
				if(!is_null($link)){
					$string .="<a href='".$link."'>";
				}
				if ($title != ''){
					$string .='<h2>'.$title.'</h2>';
				}
				$string .='<h5>'.$date.'</h5>';
				if(!is_null($link)){
					$string .="</a>";
				}
					if (is_null($text)){
						$string .= p_paragraph(1);
					}else{
						$string .='<p>'.$text.'</p>';
					}
				if($readmore){
					$string .='<a class="read-more" href="'.$link.'">Read More</a>';
				}
			$string .= '</div>';
		}
	$string .= '</div>';
	return $string;
}
?>