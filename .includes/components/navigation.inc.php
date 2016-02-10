<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/**
*	prints out main nav
*/
function p_main_nav(
	){

	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	global $site_logo;
	global $fe_container;
	global $header;
	global $base_site;
	global $docroot;
	global $client_slug;
	//gets first level of directories from the root in an array
	$dirs = str_replace($base_site,"",array_filter(glob($docroot.'/*'), 'is_dir'));
	//build the list
	$string ="\n<div class='nav-wrapper'>\n\t<div class='".$fe_container."'>\n\t\t";
	if($header == 'sticky-h' || 'sticky-aacc'){
		$string.="<a class='desk-sticky' href='/'><img src='".$site_logo."'/></a>\n\t\t";
	}
	$string.="<ul class='main-nav'>\n\t\t";
	$count = 0;
	//loop for each directory returned
	foreach($dirs as $dir){
		if($dir != $client_slug){
			$alt = file_get_contents($base_site.$dir."/nav-contents.php");
			$dir = str_replace($url_remove,'',$dir);
			if(substr($dir,0,1) === "0"){
				continue;
			}
			$string .= "\t<li id='nav-".$count."' class='nav".($page != "home" && strpos($dir,$section) !== false ? " active":"")."''><a href='/".$dir."'>".$alt."</a></li>\n\t\t";
			$count++;
		}
	}
	$string .= "</ul>\n\t</div>\n</div>\n";
	return $string;
}
/**
*	prints out main nav
*/
function p_main_nav_t4(
	){

	global $base_site;
	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	global $site_logo;
	global $fe_container;
	global $header;
	global $docroot;
	//gets first level of directories from the root in an array
	$dirs = str_replace($base_site,"",array_filter(glob($docroot.'/*'), 'is_dir'));
	//build the list
	$string ="\n<div class='nav-wrapper'>\n\t<div class='".$fe_container."'>\n\t\t";
	if($header == 'sticky-h' || 'sticky-aacc'){
		$string.="<a class='desk-sticky' href='/'><img src='".$site_logo."'/></a>\n\t\t";
	}
	$string.="<ul class='main-nav'>\n\t\t";
	$count = 0;
	//loop for each directory returned
	foreach($dirs as $dir){
		$alt = file_get_contents($base_site.$dir."/nav-contents.php");
		$dir = str_replace($url_remove,'',$dir);
		if(substr($dir,0,1) === "0"){
			continue;
		}
		$string .= "\t<li>".($page != "home" && strpos($dir,$section) !== false ? "<span class='currentbranch".$count."'>":"")."<a href='/".$dir."'>".$alt."</a>".($page != "home" && strpos($dir,$section) !== false ? "</span>":"")."</li>\n\t\t";
		$count++;
	}
	$string .= "</ul>\n\t</div>\n</div>\n";
	return $string;
}
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
