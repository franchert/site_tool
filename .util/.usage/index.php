<?php
/*
*	checks the index.php files in each directory for function calls so we can start
*	to remove sass partials and header/layout calls from the source.
*	take care not to remove functions that are used within other functions.
*/
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
global $set_tings;
include_once($_SERVER['DOCUMENT_ROOT']."/.includes/director.php");
$str_print = '';
$str_print .= "<a href='/.util' style='position:fixed;top:120px;right:20px;background:#333;color:white;padding:13px 0px;width:50px;height:24px;border-radius:50%;text-decoration:none;text-align:center;line-height:25px;'>Util</a>";
$str_print .= "</br><p>REMEMBER, some of these components may be in use within other components.</p>";
$str_print .= "<p>Only delete them if you're absolutely sure they're not needed.</p></br>";
$fxns = get_defined_functions();
$num_promos = 0;
$total_promos = 0;
$unused = 0;
$user_fxns = $fxns['user'];
foreach($user_fxns as $k => $v){
	if(substr($v,0,2) != "p_"){
		unset($user_fxns[$k]);
		continue;
	};
	//print_r($v."</br>");
}
	$base_dir  = $base_site;
	$header_dirs = array();
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
			$temp = str_replace($base_site,"",$dir);
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
			$temp = str_replace($base_site,"",$dir);
			if($temp[0] != "."){
				$header_dirs []= $temp;
				$header_dirs = array_merge($header_dirs, expandDirectories($dir));
			}
		}
	}
	foreach(scandir($base_dir."/.includes/layouts") as $file) {
		if(substr($file,0,1) == '.' 
			|| substr($file,0,1) == '0' 
			|| substr($file,0,2) == '..' 
			|| substr($file,0,2) === '/.' 
			|| substr($file,0,2) === '/0') continue;
		$dir = $base_dir."/.includes/layouts".DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			$temp = str_replace($base_site,"",$dir);
			if($temp[0] != "."){
				$layout_dirs []= $temp;
				$layout_dirs = array_merge($layout_dirs, expandDirectories($dir));
			}
		}
	}
	//print_r ($header_dirs);
	$str_print .="<style>ul{margin:5px 0;}p{margin:0;}div{padding:15px 25px;}div:nth-child(2n-1){background:rgb(245, 236, 255);}</style>";
	foreach($user_fxns as $p => $a){
		$str_print .=  '<div>';
		$count = 0;
		$string = '';
		$var = $a.' is used';
		$regex = "/".$a."/u";
		foreach($directories as $k => $v){
			$segments = explode('/', rtrim($v, '/'));
			$file = file_get_contents($_SERVER['DOCUMENT_ROOT'].$v."/index.php");
			if(preg_match_all($regex,$file,$matches) > 0){
				$string .= "<li>".preg_match_all($regex,$file,$matches) ." times on the page /".end($segments)."</li>";
				$count += preg_match_all($regex,$file,$matches);
			}
		}
		foreach($layout_dirs as $k => $v){
			$file_parts = pathinfo($_SERVER['DOCUMENT_ROOT'].$v);
			$segments = explode('/', rtrim($v, '/'));
			$file = file_get_contents($_SERVER['DOCUMENT_ROOT'].$v."/".end($segments).".php");
			if(preg_match_all($regex,$file,$matches) > 0){
				$string .= "<li>".preg_match_all($regex,$file,$matches) ." times in layout ".end($segments)."</li>";
				$count += preg_match_all($regex,$file,$matches);
			}
		}
		foreach($header_dirs as $k => $v){
			$file_parts = pathinfo($_SERVER['DOCUMENT_ROOT'].$v);
			$segments = explode('/', rtrim($v, '/'));
			$file = file_get_contents($_SERVER['DOCUMENT_ROOT'].$v."/".end($segments).".php");
			if(preg_match_all($regex,$file,$matches) > 0){
				$string .= "<li>".preg_match_all($regex,$file,$matches) ." times in the header ".end($segments)."</li>";
				$count += preg_match_all($regex,$file,$matches);
			}
		}
		$total = "for at total of ".$count." times";
		if ($count > 0){
			$str_print .=  '<p>'.$var.'<ul>'.$string.'</ul><span>'.$total.'</span></p>';
			$num_promos++;
			$total_promos += $count;
		}else{
			$str_print .=  '<p>'.$a." isn't being used</p>";
			$unused++;
		}
		$str_print .=  '</div>';
	}
	$str_print =  "<li><strong style='font-size:20px;'>".$total_promos."</strong> total components are being used.</li></ul>".$str_print;
	$str_print =  "<li><strong style='font-size:20px;'>".$num_promos."</strong> different types of promos. (".$unused." unused)</li>".$str_print;
	$str_print =  "<h2 style='margin-bottom:6px;padding-bottom:6px;border-bottom:1px dotted rgb(64, 56, 74);'>Component SUMMARY for ".$client_name."</h2><p style='font-size:12px;padding-left:20px;'>report compiled on: <strong>".date("F d,Y")."</strong></p><ul>".$str_print;
	echo $str_print;
?>