<?php 
function p_module(
	$id,
	$title,
	$image='https://placehold.it/1200x800.jpg',
	$item=null,
	$links=null,
	$full=false){
	$string = "<div id='".$id."' class='wrapper module'><h2>".$title."</h2>";
	if($full == true){
		$string .="";
	}else{
		$string .="<img class='img-center' alt='".$title."' src='".$image."'/>";
		$string .="<div class='column'>";
	}
	if($item != null){
		$string .=$item;
	}
	if($links != null){
		$string .= $links;
	}
	if($full == true){
		$string .="";
	}else{
		$string .="</div>";
	}
	$string .="</div>";
	return $string;
}