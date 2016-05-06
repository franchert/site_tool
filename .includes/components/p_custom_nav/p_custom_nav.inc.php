<?php
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/**
*	prints out navigation based on root path
*/
function p_custom_nav(
	$root_path = null,
	$overview = false){

	global $set_tings;

	if(is_null($root_path)){
		$root_path = $set_tings['path'];
	}
	//gets first level of directories from the root_path
	$dirs = str_replace($set_tings['base_site'],"",array_filter(glob($set_tings['docroot'].$root_path.'*'), 'is_dir'));

	//initialize the string
	$string = "<div class='custom-nav' id='custom-nav'>";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	$string .= "<h2 tabindex='0'>".$set_tings['page_title']."</h2><ul>";
	$home = str_replace($set_tings['base_site'],"",str_replace($set_tings['url_remove'],'',$set_tings['base_site'].substr($root_path,0,-1)));

	if($overview){
		$string .= '<li class="nav'.($home == $set_tings['path'] ? ' active':'').'"><a href="'.$home.'">Overview</a></li>';
	}

	//loop for each directory returned
	foreach($dirs as $dir){
		$temp_path = substr($set_tings['path'],1);
		//get actual directory path
		$contents = explode('/',str_replace($set_tings['url_remove'],'',$dir));
		//format our title
		$last_seg = titleFromSlug(substr(end($contents),1));
		//add the list item to our nav
		$string .= '<li class="nav'.($dir == $temp_path ? ' active':'').'"><a href="'."/".$dir.'">'.$last_seg.'</a></li>';
	}
	$string .= "</ul></div>";
	return $string;
}
?>
