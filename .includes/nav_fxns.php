<?php
function p_main_nav(){
	global $file_base;
	global $base_site;
	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	global $site_logo;
	//prints out main nav

	//gets first level of directories from the root in an array
	$dirs = str_replace($base_site,"",array_filter(glob($_SERVER['DOCUMENT_ROOT'].$file_base.'/*'), 'is_dir'));
	//build the list
	$wrap = "<div class='nav-wrapper'><div class='column'><a class='desk-sticky' href='/'><img src='".$site_logo."'/></a><ul class='main-nav'>";
	$string = $wrap;
	$count = 0;
	//loop for each directory returned
	foreach($dirs as $dir){
		if(substr($dir,0,1) === "0"){
			continue;
		}
		$temp = file_get_contents($base_site.$dir."/nav-contents.php");
		$dir = str_replace($url_remove,'',$dir);
		if($page != 'home'){
			if(strpos($dir,$section) !== false){
				$active = ' active';
			}else{
				$active = '';
			}
		}else{
			$active = '';
		}
		$string .= '<li id="nav-'.$count.'" class="nav'.$active.'"><a href="'.$file_base."/".$dir.'">'.$temp.'</a></li>';
		$count++;
	}
	$string .= "</ul></div></div>";
	return $string;
}
/*
function p_mini_nav(){
	global $file_base;
	global $base_site;
	global $section;
	global $depth;
	global $segments;
	global $starting;
	//prints out mini nav
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
	return "<div class='column'><h2>".$section_title."</h2>".$string."</div>";
}
*/
function p_custom_nav($root_path = null,$overview = false,$level=1){
	global $file_base;
	global $base_site;
	global $url_remove;
	global $section;
	global $page;
	global $page_title;
	global $path;
	//gets first level of directories from the root_path
	$dirs = str_replace($base_site,"",array_filter(glob($_SERVER['DOCUMENT_ROOT'].$file_base.$root_path.'*'), 'is_dir'));

	//initialize the string
	$temp = "<div class='custom-nav' id='custom-nav'><h2 tabindex='0'>".$page_title."</h2><ul>";
	$active = '';
	$home = str_replace($base_site,"",str_replace($url_remove,'',$_SERVER['DOCUMENT_ROOT']."/".substr($root_path,0,-1)));

	if($overview){
		//add homepage overview link to nav
		if($home == $path){
			$active = ' active';
		}
		$temp .= '<li class="nav'.$active.'"><a href="'.$home.'">Overview</a></li>';
	}

	//loop for each directory returned
	foreach($dirs as $dir){
		$temp_path = substr($path,1);
		//if we're on this page, set to be active
		if($dir == $temp_path){
			$active = ' active';
		}else{
			$active = '';
		}
		//get actual directory path
		$dir = str_replace($url_remove,'',$dir);
		$contents = explode('/',$dir);
		$last_seg = end($contents);
		//format our title
		$last_seg = 
			str_replace(" * ","-",
			str_replace("To ","to ",
			str_replace("Of ","of ",
			str_replace("The ","the ",
			str_replace("And ","&amp; ",
			ucwords(
				str_replace("-"," * ",
				str_replace("_"," ",substr($last_seg,1)
			)
		)))))));
		//add the list item to our nav
		$temp .= '<li class="nav'.$active.'"><a href="'.$file_base."/".$dir.'">'.$last_seg.'</a></li>';
	}
	$temp .= "</ul></div>";
	return $temp;
}
?>