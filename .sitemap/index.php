<?php 
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.util/redirect_install.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");
	$dirs =array_filter(glob('*'), 'is_dir');
	$subnav = expandDirectories($_SERVER['DOCUMENT_ROOT']);
	$key_values = array_combine(array_values($subnav), array_values($subnav));
	//print_r(explodeTree($key_values, "/",true));
	$tree = plotTree(explodeTree($key_values, "/",true,$starting),false,null,true,false,false);
	echo $tree;
	$under = "";
	$string = "";
?>