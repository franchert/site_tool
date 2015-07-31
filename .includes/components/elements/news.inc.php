<?php
function p_news($id,$img=null,$title='lorem ipsum dolor sit amet',$link='#',$date=null,$intro=null){
	$string = '<div class="news_article '.$id.'">';
	if (is_null($date)){
		$date = date('F d,Y');
	}
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
	if(!is_null($img)){
		$string .="<img src='".$img."'/>";
	}
	if (is_null($intro)){
		$string .= p_paragraph(1);
	}else{
		$string .='<p>'.$intro.'</p>';
	}
	$string .= '</div>';
	return $string;
}
?>