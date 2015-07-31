<?php
function h_slide(
	$type='1',
	$title="lorem ipsum dolor sit amet, consectetur adipiscing elit.",
	$image="https://placehold.it/1200x800.jpg",
	$intro="lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
	$date = '0000-0000'){
$string =
'<div class="slide v-'.$type.'">';
$string .='	<div class="image"><img alt="'.$title.'" src="'.$image.'" /></div>';
$string .='<div class="container">';
if($type=='1'){
	$string .='<h2>'.$title.'</h2><div><hr><p class="date">'.$date.'</p><hr></div>';
}else if($type=='2'){
	$string .='<div><p>'.$date.'</p></div><h2>'.$title.'</h2><span><hr></span>';
}
$string .='</div><p>'.$intro.'</p></div>';

return $string;
}