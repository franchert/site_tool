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
	foreach ($haystack as $k => $v){
		//echo "</br>".$v['title']." * ".$v['parent']." * ".$v['slug']."</br>";
		$id = $v['id'];
		$title = $v['title'];
		$parent = $v['parent'];
		$slug = $v['slug'];
		$menupos = $v['menupos'];
		$segment = $menupos.$slug;
		$temp = '';
		$tabs = 0;
		$times = 0;
		findParent($parent,$segment,$haystack);
		if($parent == "0"){$new = $segment;}
		else{$new = $temp;}
		while ($tabs > 0){
			echo "&nbsp;--&nbsp;";
			$tabs--;
		}
		echo $new."</br>";
		makeDir($new,$parent,$title);
	}
}
echo "</br>Return to the <a href='/.util'>Utility page</a>";
function findParent($find,$string,$haystack){
	global $temp, $times, $tabs;
	$times++;
	foreach($haystack as $k => $v){
		if($v['id'] === $find){
			$string = $v['menupos'].$v['slug']."/".$string;
			if($v['parent'] != "0"){
				findParent($v['parent'],$string,$haystack);
			}else{
				$tabs = $times;
				$temp = $string;
			}
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
?>