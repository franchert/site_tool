<?php
function p_subsection(
	$image=null,
	$title=null,
	$text=null,
	$cta=null,
	$subsection_hidden=null){
$string =
'<div class="subsection">';
if(is_null($image)){
	$image = p_image("400","300");
}else{
	$image .='<img src="'.$image.'" />';
}
$string .= $image;
$string .='<div class="container">';
if(!is_null($title)){
	$string .='<h3>'.$title.'</h3>';
}
if(is_null($text)){
	$string .= p_paragraph();
}else if($text == ''){
	$string .= '';
}else{
	$string .='<p>'.$text.'</p>';
}
if(!is_null($cta)){
	$string .='<div>'.$cta.'</div>';
}
$string .='</div>';
if(!is_null($subsection_hidden)){
	$string .='<div class="subsection-hidden">'.$subsection_hidden.'</div>';
}
$string .='</div>';
return $string;
}