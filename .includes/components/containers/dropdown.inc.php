<?php
function p_dropdown($type="dark",$text="sample dropdown",$item=null){
	$string = "<div class='drop-container ".$type."'><button class='drop-toggle'>".$text."</button><div class='drop-item'>".$item."</div></div>";
	return $string;
}