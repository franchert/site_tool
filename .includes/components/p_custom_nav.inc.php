<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/**
*	prints out navigation based on root path
*/
function p_custom_nav(
	$root_path = null,
	$overview = false){

	global $base_site;
	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	global $docroot;
	if(is_null($root_path)){
		$root_path = $path;
	}
	//gets first level of directories from the root_path
	$dirs = str_replace($base_site,"",array_filter(glob($docroot.$root_path.'*'), 'is_dir'));

	//initialize the string
	$string = "<div class='custom-nav' id='custom-nav'><h2 tabindex='0'>".$page_title."</h2><ul>";
	$home = str_replace($base_site,"",str_replace($url_remove,'',$base_site.substr($root_path,0,-1)));

	if($overview){
		$string .= '<li class="nav'.($home == $path ? ' active':'').'"><a href="'.$home.'">Overview</a></li>';
	}

	//loop for each directory returned
	foreach($dirs as $dir){
		$temp_path = substr($path,1);
		//get actual directory path
		$contents = explode('/',str_replace($url_remove,'',$dir));
		//format our title
		$last_seg = titleFromSlug(substr(end($contents),1));
		//add the list item to our nav
		$string .= '<li class="nav'.($dir == $temp_path ? ' active':'').'"><a href="'."/".$dir.'">'.$last_seg.'</a></li>';
	}
	$string .= "</ul></div>";
	return $string;
}
?>
