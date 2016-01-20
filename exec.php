<?php
$default_index = file_get_contents("index.default.php");
$string = file_get_contents("sitemap.json");
$haystack = json_decode($string, true);
echo "directory structure created:</br>";
foreach ($haystack as $k => $v){
	//echo "</br>".$v['title']." * ".$v['parent']." * ".$v['slug']."</br>";
	$dir = $v['slug'];
	$title = $v['title'];
	$parent = $v['parent'];
	$id = $v['id'];
	$temp = '';
	$tabs = 0;
	$times = 0;
	$root = false;
	if($parent == "0"){
		$root = true;
	}
	findParent($parent,$dir,$haystack);
	if($root){
		$new = $dir;
	}else{
		$new = $temp;
	}
	while ($tabs > 0){
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		$tabs--;
	}
	echo $new."</br>";
	makeDir($new,$root,$title);
}
function findParent($find,$string,$haystack){
	global $temp, $times, $tabs;
	$times++;
	foreach($haystack as $k => $v){
		if($v['id'] === $find){
			$string = $v['slug']."/".$string;
			if($v['parent'] != "0"){
				findParent($v['parent'],$string,$haystack);
			}else{
				$tabs = $times;
				$temp = $string;
			}
		}
	}
}
function makeDir($path,$root,$title='placeholder'){
	global $default_index;
	if(!is_dir($path)){
		mkdir($path,0777,true);
	}
	if(!file_exists($path."/index.php")){
		touch($path."/index.php");
		file_put_contents($path."/index.php",$default_index);
	}
	if($root){
		touch($path."/nav-contents.php");
		file_put_contents($path."/nav-contents.php",$title);
	}
}
?>