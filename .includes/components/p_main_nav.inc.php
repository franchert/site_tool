<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/**
*	prints out main nav
*/
function p_main_nav($type='custom'
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
	if($header == 'sticky-h' || 'fold-out'){
		$string.="<a class='desk-sticky' href='/'><img src='".$site_logo."'/></a>\n\t\t";
	}
	if($header == 'fold-out'){
		$string .="<div tabindex='0' class='main-nav-toggle'><i class='fa fa-bars'></i></div>";
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
			if($type == 't4'){
				$string .= "\t<li>".($page != "home" && strpos($dir,$section) !== false ? "<span class='currentbranch".$count."'>":"")."<a href='/".$dir."'>".$alt."</a>".($page != "home" && strpos($dir,$section) !== false ? "</span>":"")."</li>\n\t\t";
			}else if($type == 'custom'){
				$string .= "\t<li id='nav-".$count."' class='nav".($page != "home" && strpos($dir,$section) !== false ? " active":"")."''><a href='/".$dir."'>".$alt."</a></li>\n\t\t";
			}
			$count++;
		}
	}
	$string .= "</ul>\n\t</div>\n</div>\n";
	return $string;
}
?>
