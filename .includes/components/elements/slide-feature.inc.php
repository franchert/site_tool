<?php
function f_slide(
	$type ='featured',
	$title="sample title",
	$image="https://placehold.it/1173x522.jpg",
	$icon="cog",
	$tag="slide description should be 8-10 words",
	$mobi_img=null){
$string =
'<div class="slide '.$type.'">
	<img ';
if($mobi_img === true){
	$string .='class="mobile-image" ';
}
$string .='alt="'.strip_tags($tag).'" src="'.$image.'" />
	<div class="wrapper">
		<div class="container">
			<div class="column">
				<h2>'.$title.'</h2>
				<p>'.$tag.'</p>
			</div>
		</div>
	</div>
</div>';
 return $string;
}