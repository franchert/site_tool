<?php
/*
 *		Generates directory structure based on structure of a json feed.
 *		Move desired sitemap from within sitemaps directory up one level and run
 */
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
	echo "No json feed detected, please create a feed using the sitemap tool</br>";
}else{
	$haystack = json_decode($string, true);
	//print_r(count($haystack[0]));
	$depth = 0;
	recurse_sitemap('',$haystack,count($haystack[0]),$depth);
}

function recurse_sitemap($ex_segment,$arr,$count,$depth){
	//print_r($arr[0]);
	foreach($arr[0] as $k => $v){
		$id = $v['id'];
		$title = $v['title'];
		$slug = slugFromTitle($title);
		$menupos = $v['menupos']+1;
		$segment = $ex_segment."/".$menupos.$slug;
		makeDir($segment,$depth,$title);
		$i = $depth;
		while ($i > 0){
			echo " -- ";
			$i --;
		}
		//echo $title." <a target='_blank' href='".$segment."'' style='font-size:70%;color:#a55;'>".$segment."</a></br>";
		if($count > 0){
			$depth++;
			recurse_sitemap($segment,$v['children'],count($v['children'][0]),$depth);
			$depth--;
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