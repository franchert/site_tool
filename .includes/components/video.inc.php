<?php
/**
 *	Function to include a video
 *
 *	@param string  url = Link to video
 */
function p_video(
	$url="https://www.youtube.com/embed/XQu8TTBmGhA"){

	$string ='<div class="videoWrapper"><iframe width="420" height="315" src="'.$url.'" frameborder="0" allowfullscreen></iframe></div>';
	return $string;
}
?>