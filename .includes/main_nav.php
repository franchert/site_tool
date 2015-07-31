<?php
//prints out main nav

//gets first level of directories from the root in an array
$dirs = str_replace($base_site,"",array_filter(glob($_SERVER['DOCUMENT_ROOT'].$file_base.'/*'), 'is_dir'));
//build the list
echo "<div class='nav-wrapper'><div class='column'><ul class='main-nav'>";
$count = 0;
//loop for each directory returned
foreach($dirs as $dir){
	$temp = file_get_contents($base_site.$dir."/nav-contents.php");
	$dir = str_replace($url_remove,'',$dir);
	//print_r($dir." ".$section);
	if($page != 'home'){
		//if($dir == $section){
		if(strpos($dir,$section) !== false){
			$active = ' active';
		}else{
			$active = '';
		}
	}
	echo '<li id="nav-'.$count.'" class="nav'.$active.'"><a href="'.$file_base."/".$dir.'">'.$temp.'</a></li>';
	$count++;
	//echo '<li class="'.$active.'"><a href="'.$file_base."/".$dir.'">'.ucwords(str_replace("_"," ",$dir)).'</a></li>';
}
echo "</ul></div></div>";

?>