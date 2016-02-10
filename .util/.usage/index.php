<?php
/*
*	checks the index.php files in each directory for function calls so we can start
*	to remove sass partials and header/layout calls from the source.
*	take care not to remove functions that are used within other functions.
*/
include_once($_SERVER['DOCUMENT_ROOT']."/settings.php");
global $starting;
global $section;
global $url_remove;
global $base_site;
global $docroot;
include_once($docroot."/.includes/director.php");
echo "Return to the <a href='/.util'>Utility page</a></br>";
echo "REMEMBER, some of these components may be in use within other components, the header/footer or layouts.</br>";
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
	foreach($user_fxns as $p => $a){
		echo '</br>';
		$count = 0;
		$string = '';
		$var = ($a.' is used');
		$regex = "/".$a."/u";
		foreach($directories as $k => $v){
			$file = file_get_contents($docroot.$v."/index.php");
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