<?php include_once("../settings.php"); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/directory_loc.php");?>
<?php
	$dirs =array_filter(glob('*'), 'is_dir');
	$subnav = expandDirectories($_SERVER['DOCUMENT_ROOT']);
	$key_values = array_combine(array_values($subnav), array_values($subnav));
	//print_r(explodeTree($key_values, "/",true));
	$tree = plotTree(explodeTree($key_values, "/",true));
	echo $tree;
	$under = "";
	$string = "";
	//get flat array of directories located under the $base_dir
	function expandDirectories($base_dir) {
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
	//build the list structure
	function plotTree($arr, $initial_run=true){
		global $string;
		global $section;
		global $page;
		global $under;
		//if the current page is the section title, we don't hit the active assignment
		//below and need something else to hide the sub-sub nav
		if($page == $section){$under = ' section-home';};
	    if ($initial_run) {
	        $string .= "<ul class='subnav".$under."'>";
	        $under = " ";
	    }else{
	        $string .= "<ul class='".$under."'>";
	    }
	    foreach ($arr as $k=>$v){
	        if ($k == "__base_val") continue;
	        //if the current array value is an array, get the base value and set it
	        //as the value we use for printing out the array
	        $show_val = (is_array($v) ? $v["__base_val"] : $v);
	        //show_val_temp is current page slug
			$show_val_temp = preg_replace( '%^(.+)/%', '', $show_val );
			//show_val_title is current page title
	        $show_val_title = str_replace(" * ","-",ucwords(str_replace("-"," * ",str_replace("_"," ",$show_val_temp))));
	        //if we're on the section root
	        if($section == $show_val_temp){
	        	//open the array item. Note we skip the section root in the subnav
		        $string .= "<li class='";
		        //if we're on the active page
		        if($page == $show_val_temp){
					$string .="active ";
					//turning off all ul's under active class by applying
					//hidden to all ul's under it
					$under = "hidden ";
		        };
		        $string .="'><a href='/" . $show_val . "'>" . $show_val_title. "</a>";
		        //if we still have more to do (if there's a sub-array), recur
		        if (is_array($v)) {plotTree($v, false);};
		        //close off the current array item
		        $string .= "</li>";
	        } else{
	        	//open the array item. Note we skip the section root in the subnav
		        $string .= "<li class='";
		        //if we're on the active page
		        if($page == $show_val_temp){
					$string .="active ";
					//turning off all ul's under active class by applying
					//hidden to all ul's under it
					$under = "hidden ";
		        };
		        $string .="'><a href='/" . $show_val . "'>" . $show_val_title. "</a>";
		        //if we still have more to do (if there's a sub-array), recur
		        if (is_array($v)) {plotTree($v, false);};
		        //close off the current array item
		        $string .= "</li>";
		    };
	    }
	    //close off this loop by closing the ul
	    $string .= "</ul>";
	    //Return the closed loop to the function call.
	    //Exiting the recursion if not on the initial run.
	    return $string;
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
 * @link      http://kevin.vanzonneveld.net/
 *
 * @param array   $array
 * @param string  $delimiter
 * @param boolean $baseval
 * 
 *     modified to add the $section variable to the first iteration base value 
 *     (because we're not starting at root)
 *     $parentArr[$part] = array('__base_val' => $section);
 *     Added comments per line for instructional purposes.
 * @return array
 */
function explodeTree($array, $delimiter = '_', $baseval = false){
	global $section;
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
                $parentArr[$part] = array();
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