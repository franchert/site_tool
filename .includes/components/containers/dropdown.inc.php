<?php
function p_dropdown($type="dark",$text="lorem ipsum",$arr=null){
	$string = "<div class='drop-container ".$type."'><button class='dropdown'>".$text."</button>";
	if($arr != null){
		$string .="<ul>";
		foreach($arr as $k => $v){
			$string .="<li>".$v."</li>";
		}
		$string .="</ul></div>";
	}
	return $string;
}