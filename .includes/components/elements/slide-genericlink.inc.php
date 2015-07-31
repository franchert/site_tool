<?php
function gl_slide($title="lorem ipsum dolor sit amet.",
	$image="https://placehold.it/1200x800.jpg",
	$intro="lorem ipsum dolor sit amet.",
	$l_link="#",
	$l_text="lorem ipsum"){
$string =
'<div class="slide">
	<img alt="'.$title.'" src="'.$image.'" />
	<div class="container">
		<hr><h2><span>&ldquo;</span>'.$title.'<span>&rdquo;</span></h2><hr>
		<a href="'.$l_link.'">'.$l_text.'</a>
	</div>
</div>';
 return $string;
}