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

	global $cms;
	global $set_tings;
	if ($root_path == null){
		$root_path = $set_tings['section'];
	}
	$subnav = expandDirectories($set_tings['docroot']."/".$root_path);
	$subnav = str_replace($set_tings['url_remove'],'',$subnav);
	$key_values = array_combine(array_values($subnav), array_values($subnav));
	foreach ($key_values as $k=>$v){
		$k = str_replace($set_tings['url_remove'],'',$k);
	}
	//print_r(explodeTree($key_values, "/",true,$set_tings['starting']));
	//print_r($path);
	if($cms == 't4'){
		$tree = plotTree_t4(explodeTree($key_values, "/",true,$set_tings['starting']),true,$printsection,$backtohome,$set_tings['starting'],$toggle);
	}else{
		$tree = plotTree(explodeTree($key_values, "/",true,$set_tings['starting']),true,$printsection,$backtohome,$set_tings['starting'],$toggle);
	}
	return $tree;
}

?>
