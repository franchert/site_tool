<?php
/*
*	checks the index.php files in each directory for function calls so we can start
*	to remove sass partials and header/layout calls from the source.
*	take care not to remove functions that are used within other functions.
*/
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
global $set_tings;
include_once($_SERVER['DOCUMENT_ROOT']."/.includes/director.php");
echo "Return to the <a href='/.util'>Utility page</a></br>";
echo "REMEMBER, some of these components may be in use within other components.</br>";
echo "Only delete them if you're absolutely sure they're not needed.";
$fxns = get_defined_functions();
$user_fxns = $fxns['user'];
foreach($user_fxns as $k => $v){
	if(substr($v,0,2) != "p_"){
		unset($user_fxns[$k]);
		continue;
	};
	//print_r($v."</br>");
}
	$base_dir  = $set_tings['base_site'];
	$header_dirs = array();
	$component_dirs = array();
	$layout_dirs = array();
	$directories = array('/');
	foreach(scandir($base_dir) as $file) {
		if(substr($file,0,1) == '.' 
			|| substr($file,0,1) == '0' 
			|| substr($file,0,2) == '..' 
			|| substr($file,0,2) === '/.' 
			|| substr($file,0,2) === '/0') continue;
		$dir = $base_dir.DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			$temp = str_replace($set_tings['base_site'],"",$dir);
			if($temp[0] != "."){
				$directories []= $temp;
				$directories = array_merge($directories, expandDirectories($dir));
			}
		}
	}
	foreach(scandir($base_dir."/.includes/headers") as $file) {
		if(substr($file,0,1) == '.' 
			|| substr($file,0,1) == '0' 
			|| substr($file,0,2) == '..' 
			|| substr($file,0,2) === '/.' 
			|| substr($file,0,2) === '/0') continue;
		$dir = $base_dir."/.includes/headers".DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			$temp = str_replace($set_tings['base_site'],"",$dir);
			if($temp[0] != "."){
				$header_dirs []= $temp;
				$header_dirs = array_merge($header_dirs, expandDirectories($dir));
			}
		}
	}
/*	foreach(scandir($base_dir."/.includes/components") as $file) {
		if(substr($file,0,1) == '.' 
			|| substr($file,0,1) == '0' 
			|| substr($file,0,2) == '..' 
			|| substr($file,0,2) === '/.' 
			|| substr($file,0,2) === '/0') continue;
		$dir = $base_dir."/.includes/components".DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			$temp = str_replace($set_tings['base_site'],"",$dir);
			if($temp[0] != "."){
				$component_dirs []= $temp;
				$component_dirs = array_merge($component_dirs, expandDirectories($dir));
			}
		}
	}*/
	foreach(scandir($base_dir."/.includes/layouts") as $file) {
		if(substr($file,0,1) == '.' 
			|| substr($file,0,1) == '0' 
			|| substr($file,0,2) == '..' 
			|| substr($file,0,2) === '/.' 
			|| substr($file,0,2) === '/0') continue;
		$dir = $base_dir."/.includes/layouts".DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			$temp = str_replace($set_tings['base_site'],"",$dir);
			if($temp[0] != "."){
				$layout_dirs []= $temp;
				$layout_dirs = array_merge($layout_dirs, expandDirectories($dir));
			}
		}
	}
	print_r ($header_dirs);
	foreach($user_fxns as $p => $a){
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
		foreach($layout_dirs as $k => $v){
			$file_parts = pathinfo($_SERVER['DOCUMENT_ROOT'].$v);
			$segments = explode('/', rtrim($v, '/'));
			$v_end = end($segments);
			$file = file_get_contents($_SERVER['DOCUMENT_ROOT'].$v."/".$v_end.".php");
			if(preg_match_all($regex,$file,$matches) > 0){
				$string .= "&nbsp;&nbsp;".preg_match_all($regex,$file,$matches) ." times in layout ".$v_end."</br>";
				$count += preg_match_all($regex,$file,$matches);
			}
		}
		foreach($header_dirs as $k => $v){
			$file_parts = pathinfo($_SERVER['DOCUMENT_ROOT'].$v);
			$segments = explode('/', rtrim($v, '/'));
			$v_end = end($segments);
			$file = file_get_contents($_SERVER['DOCUMENT_ROOT'].$v."/".$v_end.".php");
			if(preg_match_all($regex,$file,$matches) > 0){
				$string .= "&nbsp;&nbsp;".preg_match_all($regex,$file,$matches) ." times in the header ".$v_end."</br>";
				$count += preg_match_all($regex,$file,$matches);
			}
		}
/*		foreach($component_dirs as $k => $v){
			$file_parts = pathinfo($_SERVER['DOCUMENT_ROOT'].$v);
			$segments = explode('/', rtrim($v, '/'));
			$v_end = end($segments);
			$file = file_get_contents($_SERVER['DOCUMENT_ROOT'].$v."/".$v_end.".php");
			if(preg_match_all($regex,$file,$matches) > 0){
				$string .= "&nbsp;&nbsp;".preg_match_all($regex,$file,$matches) ." times in component".$v."</br>";
				$count += preg_match_all($regex,$file,$matches);
			}
		}*/
		$total = "for at total of ".$count." times";
		if ($count > 0){
			echo $var.'</br>'.$string.$total.'</br>';
		}else{
			echo $a." isn't being used</br>";
		}
	}
?>