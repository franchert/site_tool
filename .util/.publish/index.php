<?php
/*
*	this should eventually build index.html files from the index.php function calls.
*	right now i'm using the homepage only and visiting via a cURL, pulling the DOM into a string
*	and saving it to a file. Need to make this follow the sitemap (check .usage for the sitemap tree)
*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.util/.publish/simple_html_dom.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.util/redirect_install.php");
global $starting;
global $section;
global $url_remove;
global $base_site;
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");

	$base_dir  = $base_site;
	$directories = array();
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
	//print_r($directories);
$global = "http://".$_SERVER['SERVER_NAME'];
print_r("The following static files have been published.</br>");
foreach ($directories as $k=>$v){
	$file = $global.$v."/index.php";
	$ch = curl_init($file);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$curl_html = curl_exec($ch);
	$html = str_get_html($curl_html);
	$newfile = $_SERVER['DOCUMENT_ROOT'].$v."/index.html";
	print_r($v."/index.html</br>");
	if(!file_exists($newfile)){touch($newfile);}
	file_put_contents($newfile,$html);
}
echo "</br>Return to the <a href='/.util'>Utility page</a>";
?>