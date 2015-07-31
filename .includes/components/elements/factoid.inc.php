<?php
function p_factoid($number="42",$title="lorem ipsums",$image='http://placehold.it/400x300.png'){
	$string = '<div class="factoid"><div class="container"><img src="'.$image.'"/><span>'.$number.'</span>'.$title.'</div></div>';
	return $string;
}