<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/**
*	prints out main nav
*/
function p_main_nav($type='custom'
	){

	global $set_tings;
	global $site_logo;
	global $fe_container;
	//gets first level of directories from the root in an array
	$dirs = str_replace($set_tings['base_site'],"",array_filter(glob($set_tings['docroot'].'/*'), 'is_dir'));
	//build the list
	$string ="\n<div class='nav-wrapper'>\n\t<div class='".$fe_container."'>\n\t\t";
	if($set_tings['header'] == 'sticky-h' || 'fold-out'){
		$string.="<a class='desk-sticky' href='/'><img alt='sample alt text' src='".$site_logo."'/></a>\n\t\t";
	}
	if($set_tings['header'] == 'fold-out'){
		$string .="<div tabindex='0' class='main-nav-toggle'><i class='fa fa-bars'></i></div>";
	}
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	$string.="<ul class='main-nav'>\n\t\t";
	$count = 0;
	//loop for each directory returned
	foreach($dirs as $dir){
		if($dir != $set_tings['client_slug']){
			$alt = file_get_contents($set_tings['base_site'].$dir."/nav-contents.php");
			$dir = str_replace($set_tings['url_remove'],'',$dir);
			if(substr($dir,0,1) === "0"){
				continue;
			}
			if($type == 't4'){
				$string .= "\t<li>".($set_tings['page'] != "home" && strpos($dir,$set_tings['section']) !== false ? "<span class='currentbranch".$count."'>":"")."<a href='/".$dir."'>".$alt."</a>".($set_tings['page'] != "home" && strpos($dir,$set_tings['section']) !== false ? "</span>":"")."</li>\n\t\t";
			}else if($type == 'custom'){
				$string .= "\t<li id='nav-".$count."' class='nav".($set_tings['page'] != "home" && strpos($dir,$set_tings['section']) !== false ? " active":"")."''><a href='/".$dir."'>".$alt."</a></li>\n\t\t";
			}
			$count++;
		}
	}
	$string .= "</ul>\n\t</div>\n</div>\n";
	return $string;
}
?>
