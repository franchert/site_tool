<?php
/*
 *		Generates directory structure based on structure of a json feed.
 *		Move desired sitemap from within sitemaps directory up one level and run
 */
$default_index = file_get_contents("index.default.php");
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
	echo "No json feed detected, please move the desired feed to the .generate directory from the sitemaps directory</br>";
}else{
	$haystack = json_decode($string, true);
	echo "-- the following directory structure has been created --</br></br>";
	//print_r($haystack[0]);
	foreach ($haystack[0] as $k => $v){
		$id = $v['id'];
		$title = $v['title'];
		$slug = slugFromTitle($title);
		$menupos = $v['menupos']+1;
		$segment = $menupos.$slug;
		//echo "</br>".$k."</br>".$title." * ".$slug." * ".$menupos." * ".$segment."</br>";
		makeDir($segment,0,$title);
		recurse_sitemap($segment,$v['children'],count($v['children'][0]));
	}
}
echo "<a href='/.util' style='position:fixed;top:20px;right:20px;background:#333;color:white;padding:20px;width:50px;height:50px;border-radius:50%;text-decoration:none;text-align:center;line-height:25px;'>Back to Utility</a>";
function recurse_sitemap($ex_segment,$arr,$count){
	//print_r($arr[0]);
	foreach($arr[0] as $k => $v){
		$id = $v['id'];
		$title = $v['title'];
		$slug = slugFromTitle($title);
		$menupos = $v['menupos']+1;
		$segment = $ex_segment."/".$menupos.$slug;
		makeDir($segment,1,$title);
		if($count > 0){
			recurse_sitemap($segment,$v['children'],count($v['children'][0]));
		}
	}
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