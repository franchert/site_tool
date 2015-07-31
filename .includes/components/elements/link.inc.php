<?php
function p_link($class=false,$link="#",$text="lorem ipsum"){
	$string = "<a";
	if($class != false){
		$string .=" class='".$class."'";
	}
	$string .=" href='".$link."'>".$text."</a>";
	return $string;
}