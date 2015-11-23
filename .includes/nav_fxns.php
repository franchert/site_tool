<?php
/**
*	prints out main nav
*/
function p_main_nav(
	){

	global $file_base;
	global $base_site;
	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	global $site_logo;
	global $fe_container;
	global $header;
	//gets first level of directories from the root in an array
	$dirs = str_replace($base_site,"",array_filter(glob($_SERVER['DOCUMENT_ROOT'].$file_base.'/*'), 'is_dir'));
	//build the list
	$string ="<div class='nav-wrapper'><div class='".$fe_container."'>";
	if($header == 'sticky-h' || 'sticky-aacc'){
		$string.="<a class='desk-sticky' href='/'><img src='".$site_logo."'/></a>";
	}
	$string.="<ul class='main-nav'>";
	$count = 0;
	//loop for each directory returned
	foreach($dirs as $dir){
		$alt = file_get_contents($base_site.$dir."/nav-contents.php");
		$dir = str_replace($url_remove,'',$dir);
		if(substr($dir,0,1) === "0"){
			continue;
		}
		$string .= '<li id="nav-'.$count.'" class="nav'.($page != 'home' && strpos($dir,$section) !== false ? 'active':'').'"><a href="'.$file_base.$dir.'">'.$alt.'</a></li>';
		$count++;
	}
	$string .= "</ul></div></div>";
	return $string;
}
/**
*	prints out main nav
*/
function p_main_nav_t4(
	){

	global $file_base;
	global $base_site;
	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	global $site_logo;
	global $fe_container;
	global $header;
	//gets first level of directories from the root in an array
	$dirs = str_replace($base_site,"",array_filter(glob($_SERVER['DOCUMENT_ROOT'].$file_base.'/*'), 'is_dir'));
	//build the list
	$string ="<div class='nav-wrapper'><div class='".$fe_container."'>";
	if($header == 'sticky-h' || 'sticky-aacc'){
		$string.="<a class='desk-sticky' href='/'><img src='".$site_logo."'/></a>";
	}
	$string.="<ul class='main-nav'>";
	$count = 0;
	//loop for each directory returned
	foreach($dirs as $dir){
		$alt = file_get_contents($base_site.$dir."/nav-contents.php");
		$dir = str_replace($url_remove,'',$dir);
		if(substr($dir,0,1) === "0"){
			continue;
		}
		$string .= '<li>'.($page != 'home' && strpos($dir,$section) !== false ? '<span class="currentbranch'.$count.'">':'').'<a href="'.$file_base."/".$dir.'">'.$alt.'</a>'.($page != 'home' && strpos($dir,$section) !== false ? '</span>':'').'</li>';
		$count++;
	}
	$string .= "</ul></div></div>";
	return $string;
}
/**
*	prints out navigation based on root path
*/
function p_custom_nav(
	$root_path = null,
	$overview = false){

	global $file_base;
	global $base_site;
	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	if(is_null($root_path)){
		$root_path = $path;
	}
	//gets first level of directories from the root_path
	$dirs = str_replace($base_site,"",array_filter(glob($_SERVER['DOCUMENT_ROOT'].$file_base.$root_path.'*'), 'is_dir'));

	//initialize the string
	$string = "<div class='custom-nav' id='custom-nav'><h2 tabindex='0'>".$page_title."</h2><ul>";
	$home = str_replace($base_site,"",str_replace($url_remove,'',$_SERVER['DOCUMENT_ROOT']."/".substr($root_path,0,-1)));

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
		$string .= '<li class="nav'.($dir == $temp_path ? ' active':'').'"><a href="'.$file_base."/".$dir.'">'.$last_seg.'</a></li>';
	}
	$string .= "</ul></div>";
	return $string;
}
?>
