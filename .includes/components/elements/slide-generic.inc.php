<?php
function g_slide(
	$type='featured',
	$title="lorem ipsum dolor sit amet, consectetur adipiscing elit.",
	$intro="lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
	$image="https://placehold.it/1200x800.jpg",
	$l_link="#",
	$l_text="lorem ipsum",
	$addl=null){
$string =
'<div class="slide">
	<img alt="'.$title.'" src="'.$image.'" />
	<div class="container">
		<h2>'.$title.'</h2>
		<hr>
		<p>'.$intro.'</p>
		<a href="'.$l_link.'">'.$l_text.'</a>
	</div>
	'.$addl.'
</div>';
 return $string;
}