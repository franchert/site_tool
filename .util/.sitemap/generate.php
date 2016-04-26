<?php
/*
 *		Generates directory structure based on structure of a json feed.
 *		Move desired sitemap from within sitemaps directory up one level and run
 */
	$data = $_POST['data'];
	file_put_contents('sitemap.json',$data);
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
$default_index = file_get_contents("../index.default.php");
$string = '';
/*checks all the files in this directory for a json feed. If it encounters one (first alphabetically), it builds a string to use*/
foreach(new DirectoryIterator('.') as $file){
	$parts = pathinfo($file);
	if ($file->isFile() && $parts['extension'] == 'json') {
		$string = file_get_contents($parts['basename']);
		break;
	}
}
if($string == ''){
	echo "No json feed detected, please create a feed using the sitemap tool<br>";
}else{
	$haystack = json_decode($string, true);
	//print_r(count($haystack[0]));
	$depth = 0;
	$temp = recurse_sitemap('',$haystack,count($haystack[0]),$depth);
	$newarr = json_encode($temp,true);
	file_put_contents('sitemap.json',$newarr);
	//print_r($temp);
}

function recurse_sitemap($ex_segment,$arr,$count,$depth){
	//print_r($arr[0]);
	$newarr = array();
	foreach($arr[0] as $k => $v){
		$id = $v['id'];
		$title = $v['title'];
		$slug = slugFromTitle($title);
		$menupos = $v['menupos']+1;
		$segment = $ex_segment."/".$menupos.$slug;

		// if the old location doesn't exist, we're free to try to make a new location
		if($v['gen'] == ''){
			makeDir($segment,$depth,$title);
		//if the new equals the old, we have nothing to do
		}else if($v['gen'] != $segment){
			//first make sure the old location actually has stuff to take from
			if(is_dir($_SERVER['DOCUMENT_ROOT'].$v['gen'])){
				recurse_copy($_SERVER['DOCUMENT_ROOT'].$v['gen'],$_SERVER['DOCUMENT_ROOT'].$segment);
				recursiveRemoveDirectory($_SERVER['DOCUMENT_ROOT']."/".$v['gen']);
			}else{
				//the old location has been set but nothing is there anymore, so let's just make a new page!
				makeDir($segment,$depth,$title);
			}
		//if we've deleted the folder but not deleted the reference
		}else if(!is_dir($_SERVER['DOCUMENT_ROOT'].$v['gen'])){
			makeDir($segment,$depth,$title);
		}
		//NOTE: if you delete something from the sitemap, it needs to be manually deleted from the file structure.

		$arr[0][$k]['gen'] = $segment;
		$i = $depth;
		while ($i > 0){
			//echo " -- ";
			$i --;
		}
		//echo $title." <a target='_blank' href='".$segment."'' style='font-size:70%;color:#a55;'>".$segment."</a><br>";
		if($count > 0){
			$depth++;
			$arr[0][$k]['children'] = recurse_sitemap($segment,$v['children'],count($v['children'][0]),$depth);
			$depth--;
		}
	}
	return $arr;
}
function recurse_copy($src,$dst){
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($src . '/' . $file) ) {
				recurse_copy($src . '/' . $file,$dst . '/' . $file);
			}
			else {
				copy($src . '/' . $file,$dst . '/' . $file);
			}
		}
	}
	closedir($dir); 
}
function recursiveRemoveDirectory($directory){
	foreach(glob("{$directory}/*") as $file)
	{
		if(is_dir($file)) { 
			recursiveRemoveDirectory($file);
		} else {
			unlink($file);
		}
	}
	rmdir($directory);
}
function makeDir($path,$parent,$title){
	global $default_index;
	if(!is_dir("../../".$path)){
		mkdir("../../".$path,0777,true);
	}
	if(!file_exists("../../".$path."/index.php")){
		touch("../../".$path."/index.php");
		file_put_contents("../../".$path."/index.php",$default_index);
	}
	if($parent == "0" && !file_exists("../../".$path."/nav-contents.php")){
		touch("../../".$path."/nav-contents.php");
		file_put_contents("../../".$path."/nav-contents.php",$title);
	}
}
function slugFromTitle($title){
	$return = 
		str_replace("-"," * ",
			str_replace(".","_",
				strtolower(
					str_replace(" * ","-",
						str_replace(" ","_",$title)
					)
				)
			)
		);
	return $return;
}
?>