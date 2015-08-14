<?php
function p_link($link="#",$text="lorem ipsum",$class=false){
	$string = "<a";
	if($class != false){
		$string .=" class='".$class."'";
	}
	$string .=" href='".$link."'>".$text."</a>";
	return $string;
}