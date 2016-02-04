<?php
/*
*	checks the index.php files in each directory for function calls so we can start
*	to remove sass partials and header/layout calls from the source.
*	take care not to remove functions that are used within other functions.
*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/settings.php");
global $starting;
global $section;
global $url_remove;
global $base_site;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");
echo "Return to the <a href='/.util'>Utility page</a></br>";
$needles = array(
	'p_accordion_ui',
	'p_accordion',
	'p_tabaccordion',
	'p_calendar',
	'p_carousel',
	'p_colorbox',
	'p_contact',
	'p_dropdown',
	'p_event',
	'p_factoid',
	'p_grid',
	'p_image',
	'p_link',
	'p_list',
	'p_matrix',
	'p_news',
	'p_page_intro',
	'p_paragraph',
	'p_profile',
	'p_program_search',
	'p_promo',
	'p_slide',
	'p_slider_owl',
	'p_spotlight',
	'p_table',
	'p_tabs_mobi',
	'p_tabs',
	'p_video'
);
	$base_dir  = $base_site;
	$directories = array('/');
	foreach(scandir($base_dir) as $file) {
		if(substr($file,0,1) == '.' 
			|| substr($file,0,1) == '0' 
			|| substr($file,0,2) == '..' 
			|| substr($file,0,2) === '/.' 
			|| substr($file,0,2) === '/0') continue;
		$dir = $base_dir.DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			$temp = str_replace($base_site,"",$dir);
			if($temp[0] != "."){
				$directories []= $temp;
				$directories = array_merge($directories, expandDirectories($dir));
			}
		}
	}
	//print_r ($directories);
	foreach($needles as $p => $a){
		echo '</br>';
		$count = 0;
		$string = '';
		$var = ($a.' is used');
		$regex = "/".$a."/u";
		foreach($directories as $k => $v){
			$file = file_get_contents($_SERVER['DOCUMENT_ROOT'].$v."/index.php");
			if(preg_match_all($regex,$file,$matches) > 0){
				$string .= "&nbsp;&nbsp;".preg_match_all($regex,$file,$matches) ." times in ".$v."</br>";
				$count += preg_match_all($regex,$file,$matches);
			}
		}
		$total = "for at total of ".$count." times";
		if ($count > 0){
			echo $var.'</br>'.$string.$total.'</br>';
		}else{
			echo $a." isn't being used</br>";
		}
	}
?>