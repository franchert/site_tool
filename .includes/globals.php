<?php
/*
*		global functions
*
*/

function titleFromSlug($slug){
	$return = 
		str_replace(" * ","-",
		str_replace("To ","to ",
		str_replace("Of ","of ",
		str_replace("The ","the ",
		str_replace("And","&amp;",
		ucwords(
			str_replace("-"," * ",
			str_replace("_"," ",$slug)
	)))))));
	return $return;
}
/**
 *	Function	get flat array of directories located under the $base_dir
 *
 *	@param string	$root_path = 
 *
 */
function expandDirectories(
	$base_dir){

	global $base_site;
	$directories = array();
	foreach(scandir($base_dir) as $file) {
		if($file == '.' || $file == '..') continue;
		$dir = $base_dir.DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			//get rid of the base_site
			$temp = str_replace($base_site,"",$dir);
			//don't include dirs starting with a .
			if($temp[0] != "."){
				$directories []= $temp;
				//merge with existing and recur to sub
				$directories = array_merge($directories, expandDirectories($dir));
			}
		}
	}
	return $directories;
}
/**
 *	Function	get flat array of directories located under the $base_dir
 *
 *	@param string	$selector = 
 *
 */
function plotTree(
	$arr,
	$initial_run=true,
	$printsection,
	$backtohome,
	$starting,
	$toggle){

	global $subnav_string;
	global $base_site;
	global $section;
	global $section_title;
	global $page;
	global $path;
	global $segments;
	global $file_base;
	global $level ;
	global $url_remove;
	global $mini;
	if ($initial_run) {
		//wrappers for the container
		$subnav_string = "<div class='subnav".($toggle === true ? " toggles":"")."' id='subnav'>";
		//print the toggle for the nav.
		if($printsection === true){
			$temp ="<h2 tabindex='0'>".$section_title."</h2>";
		}else if ($printsection === false){
			$temp = "<h2>Menu</h2>";
		}else{
			$temp = "";
		}
		$subnav_string .= $temp;
		$d = 0;
	}else{
		$subnav_string .= "<ul class='level-".$level."'>";
		//add the "back to home" link on the first level. This hasn't been tested...
		if($backtohome){
			$subnav_string .="<a class='backtohome' href='/'>Back to Home</a><h3>".$section_title."</h3>";
			$backtohome = false;
		}
	}
	foreach ($arr as $k=>$v){
		if ($k == "__base_val") continue;
		$active_trail = false;
		if(is_array($v) && strpos($path,(string)$v['__base_val']) !== false){
			$active_trail = true;
		}
		if(!is_array($v) && strpos($path,(string)$v) !== false){
			$active_trail = true;
		}
		//if the current array value is an array, get the base value and set it
		//as the value we use for printing out the array
		$base_array = (is_array($v) ? $v["__base_val"] : $v);
		$base_array_slug = preg_replace( '%^(.+)/%', '', $base_array );
		$base_array_title = titlefromSlug(substr($base_array_slug,1));
		//if we're on the section root
		$level ++;
		if($section == $base_array_slug && $level <= 1){
			//if we're on a sub-array, we need to go deeper to get a value to print
			if (is_array($v)) {plotTree($v, false,$printsection,$backtohome,$starting,$toggle);};
		} else{
			//open the array item. Note we skip the section root in the subnav
			$subnav_string .= "<li class='".($page == $base_array_slug ? 'active ':'').($active_trail ? 'active-trail open ':'')."'>";
			$subnav_string .="<a href='" . $file_base.'/'.$base_array . "' class='".(is_array($v) && $toggle === true ? 'has-sub':'')."'>" . $base_array_title. "</a>";
			$base_array = str_replace($url_remove,"",$base_array);
			//if there is a child under the current item, we want to add a toggle.
			if(is_array($v) && $toggle === true){
				$subnav_string .="<button class='sn-toggle'><span class='fa fa-angle-right'></span></button>";
			}
			//if we still have more to do (if there's a sub-array), recur
			if (is_array($v)) {plotTree($v, false,$printsection,$backtohome,$starting,$toggle);};
			//close off the current array item
			$level --;
			$subnav_string .= "</li>";
		};
		//go to the next array item
	}
	//close off this recursion loop by closing the ul (or main container div if we're at the top)
	if ($initial_run) {
		$subnav_string .= "</div>\n";
	}else{
		$subnav_string .= "</ul>";
	}
	//Return the closed loop to the function call
	return $subnav_string;
}
/**
 *	Function	get flat array of directories located under the $base_dir
 *	For use with the TerminalFour CMS. Provides a structure usable by the Multilevel Menus functionality
 *
 *	@param string	$selector = 
 *
 */
function plotTree_t4(
	$arr,
	$initial_run=true,
	$printsection,
	$backtohome,
	$starting,
	$toggle){

	global $subnav_string;
	global $base_site;
	global $section;
	global $section_title;
	global $page;
	global $path;
	global $segments;
	global $file_base;
	global $level ;
	global $url_remove;
	global $mini;
	//print_r($arr);
	if ($initial_run) {
		//wrappers for the container
		$subnav_string = "<div class='subnav' id='subnav'>";
		//print the toggle for the nav.
		if($printsection === true){
			$temp ="<h2 tabindex='0'>".$section_title."</h2>";
		}else if ($printsection === false){
			$temp = "<h2>Menu</h2>";
		}else{
			$temp = "";
		}
		$subnav_string .= $temp;
		$d = 0;
		//t4 is 0 based instead of 1 based for level.
		$level -= 2;
	}else{
		if($level == -1){
			$subnav_string .= "<ul class='mainMenu'>";
		}else{
			$subnav_string .= "<ul class='multilevel-linkul-".$level."'>";
		}
	}
	foreach ($arr as $k=>$v){
		if ($k == "__base_val") continue;
		$active_trail = false;
		if(is_array($v) && strpos($path,(string)$v['__base_val']) !== false){
			$active_trail = true;
		}
		if(!is_array($v) && strpos($path,(string)$v) !== false){
			$active_trail = true;
		}
		//if the current array value is an array, get the base value and set it
		//as the value we use for printing out the array
		$base_array = (is_array($v) ? $v["__base_val"] : $v);
		$base_array_slug = preg_replace( '%^(.+)/%', '', $base_array );
		$base_array_title = titlefromSlug(substr($base_array_slug,1));
		//print_r($base_array."</br>");
		//if we're on the section root
		$level ++;
		if($section == $base_array_slug && $level <= 1){
			//if we're on a sub-array, we need to go deeper to get a value to print
			if (is_array($v)) {plotTree_t4($v, false,$printsection,$backtohome,$starting,$toggle);};
		} else{
			//open the array item. Note we skip the section root in the subnav
			$subnav_string .= "<li>";
			if($active_trail){
				$subnav_string .="<span class='currentbranch".$level."'>";
			}
			//need to add the root in only if file_base is empty
			$subnav_string .="<a href='".($file_base == "" ? "/":""). $file_base . $base_array . "'>" . $base_array_title. "</a>";
			if($active_trail){
				$subnav_string .="</span>";
			}
			$base_array = str_replace($url_remove,"",$base_array);
			//if there is a child under the current item, we want to add a toggle.
			if(is_array($v) && $toggle === true){
				//$subnav_string .="<button class='sn-toggle'><span class='fa fa-angle-right'></span></button>";
			}
			//if we still have more to do (if there's a sub-array), recur
			if (is_array($v)) {plotTree_t4($v, false,$printsection,$backtohome,$starting,$toggle);};
			//close off the current array item
			$level --;
			$subnav_string .= "</li>";
		};
		//go to the next array item
	}
	//close off this recursion loop by closing the ul (or main container div if we're at the top)
	if ($initial_run) {
		$subnav_string .= "</div>\n";
	}else{
		$subnav_string .= "</ul>";
	}
	//Return the closed loop to the function call
	return $subnav_string;
}
/**
 * Explode any single-dimensional array into a full blown tree structure,
 * based on the delimiters found in it's keys.
 *
 * @author  Kevin van Zonneveld &lt;kevin@vanzonneveld.net>
 * @author  Lachlan Donald
 * @author  Takkie
 * @copyright 2008 Kevin van Zonneveld (http://kevin.vanzonneveld.net)
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD Licence
 * @version   SVN: Release: $Id: explodeTree.inc.php 89 2008-09-05 20:52:48Z kevin $
 * @link	  http://kevin.vanzonneveld.net/
 *
 * @param array   $array
 * @param string  $delimiter
 * @param boolean $baseval
 * 
 * modifications: added the $section variable to the first iteration base value 
 *	 (because we're not starting at root)
 *	 $parentArr[$part] = array('__base_val' => $section);
 *	 Added comments per line for instructional purposes.
 * @return array
 */
function explodeTree($array, $delimiter = '_', $baseval = false,$starting = null){
	global $section;
	global $starting;
	//ensure we actually have an array in $array
	if(!is_array($array)) return false;
	//escapes any regex characters we may find in the url except the delimiter of "_"
	$splitRE   = '/' . preg_quote($delimiter, '/') . '/';
	//initializes the return value
	$returnArr = array();
	//for each item in the array
	foreach ($array as $key => $val) {
	//split the URL set in the key into a temporary $parts array
		$parts  = preg_split($splitRE, $key, -1, PREG_SPLIT_NO_EMPTY);
	//take off the last piece to save as our current position
		$leafPart = array_pop($parts);
	//push the parent onto the return array
		$parentArr = &$returnArr;
	//for each segment of our URL
		foreach ($parts as $part) {
	//if there isn't a parent of the currrent array segment (we're at the root)
			if (!isset($parentArr[$part])) {
	//because we have an array as the actual value, this saves our needed value corresponding
	//to the root key
				$parentArr[$part] = array('__base_val' => $section);
	//if the parent doesn't have an array inside of it yet (leaves won't have arrays inside of them)
			} elseif (!is_array($parentArr[$part])) {
	//if $baseval has been set to true (we want to actually have the value stored)
				if ($baseval) {
	//initialize an array inside of the parent, and create the base value structure to save it's value
					$parentArr[$part] = array('__base_val' => $parentArr[$part]);
				} else {
	//if we don't need a base value, just initialize an empty array
					$parentArr[$part] = array();
				}
			}
	//push the new array piece onto the existing parent array
			$parentArr = &$parentArr[$part];
		}
	//save the $leafPart we popped off of the array earlier
		if (empty($parentArr[$leafPart])) {
	//if it's truly a leaf, we can just save it in the parent array's value
			$parentArr[$leafPart] = $val;
		} elseif ($baseval && is_array($parentArr[$leafPart])) {
	//if we're saving the base value and we're inside an inner array, save the leaf
	//under the base value key
			$parentArr[$leafPart]['__base_val'] = $val;
		}
	}
	return $returnArr;
}
?>