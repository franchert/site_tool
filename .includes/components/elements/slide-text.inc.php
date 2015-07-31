<?php
function t_slide(
	$type='s-text',
	$title="lorem ipsum dolor sit amet, consectetur adipiscing elit.",
	$intro="lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu."){
$string =
'<div class="slide '.$type.'">
	<div class="container">
		<h2>'.$title.'</h2>
		<p>'.$intro.'</p>
	</div>
</div>';
 return $string;
}