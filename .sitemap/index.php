<?php 
include_once("../.util/redirect_install.php");
include_once("../.includes/director.php");
	$dirs =array_filter(glob('*'), 'is_dir');
	$subnav = expandDirectories($docroot);
	$key_values = array_combine(array_values($subnav), array_values($subnav));
	//print_r(explodeTree($key_values, "/",true));
	$tree = plotTree(explodeTree($key_values, "/",true,$starting),false,null,true,false,false);
	echo $tree;
	$under = "";
	$string = "";
?>