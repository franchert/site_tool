<?php
/**
 *	Function 
 *
 *	@param string  $count = 
 *	@param string  $short = 
 *	@param string  $tags = 
 */
function p_paragraph(
	$count = 1,
	$len = null,
	$tags = true){

	global $set_tings;
	$string = '';
	$len_types = array('short','medium','long','verylong');
	if(is_null($len) || !in_array($len,$len_types)){
		$len = 'short';
	}
	if($tags==false){
		$plain = 'plaintext';
	}else{
		$plain = '';
	}
	$content = file_get_contents('http://loripsum.net/api/'.$count.'/'.$len.'/'.$plain);
	if($content === FALSE){
		for($i = 1; $i <= $count; $i++){
			if($tags){
				$string .="<p>";
			}
			if($len == 'short'){
				$string .="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.";
			}else{
				$string .="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
			}
			if($tags){
				$string .="</p>";
			}
		}
	}else{
		$string .= $content;
	}
	return $string;
}