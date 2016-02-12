<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
$subnav_string = "";
$level = 0;
/**
 *	Function	
 *
 *	@param string	$root_path = 
 *
 */
function p_subnav(
	$root_path = null,
	$depth = null,
	$printsection = true,
	$backtohome = false,
	$toggle = false){

	global $starting;
	global $docroot;
	global $section;
	global $url_remove;
	global $cms;
	global $path;
	if ($root_path == null){
		$root_path = $section;
	}
	$subnav = expandDirectories($docroot."/".$root_path);
	$subnav = str_replace($url_remove,'',$subnav);
	$key_values = array_combine(array_values($subnav), array_values($subnav));
	foreach ($key_values as $k=>$v){
		$k = str_replace($url_remove,'',$k);
	}
	//print_r(explodeTree($key_values, "/",true,$starting));
	//print_r($path);
	if($cms == 't4'){
		$tree = plotTree_t4(explodeTree($key_values, "/",true,$starting),true,$printsection,$backtohome,$starting,$toggle);
	}else{
		$tree = plotTree(explodeTree($key_values, "/",true,$starting),true,$printsection,$backtohome,$starting,$toggle);
	}
	return $tree;
}

?>
