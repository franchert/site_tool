<?php
//prints out main nav
$i = -1;
$temp_path = "/";
foreach($segments as $segment){
	$i++;
	if($i < $depth+1 && $i != 0){
		$temp_path .= $segment."/";
	}
}
//gets first level of directories from the root in an array
$dirs = str_replace($base_site,"",array_filter(glob($_SERVER['DOCUMENT_ROOT'].$file_base.$temp_path.'/*'), 'is_dir'));
$section = $segments[$depth];
$section_title = str_replace(" * ","-",ucwords(str_replace("-"," * ",str_replace("_"," ",substr($section,1)))));
$starting = $starting + $depth-1;
$string = p_subnav(substr($temp_path,1),null,false,true);
//build the list
echo "<div class='column'><h2>".$section_title."</h2>".$string."</div>";

?>