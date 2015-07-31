<?php
function p_subsection(
	$image="https://placehold.it/1200x800.jpg",
	$title=null,
	$intro="lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
	$cta=null,
	$subsection_hidden=null){
$string =
'<div class="subsection">';
if(!is_null($image)){
	$string .='<img src="'.$image.'" />';
}
$string .='<div class="container">';
if(!is_null($title)){
	$string .='<h3>'.$title.'</h3>';
}
	$string.='<p>'.$intro.'</p>';
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