<?php
function p_dropdown($type="dark",$text="lorem ipsum",$item=null){
	$string = "<div class='drop-container ".$type."'><button class='dropdown'>".$text."</button><div>".$item."</div></div>";
	return $string;
}