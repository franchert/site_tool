<?php 
/**
 *	Function 
 *
 *	@param string  $count = 
 *	@param string  $short = 
 *	@param string  $tags = 
 */
function p_directory(
	$type = 'person',
	$name = "",
	$title = "",
	$text = NULL,
	$image = NULL){

	global $set_tings;
	if($type == 'person'){
		if($name == ''){
			$name = 'John Doe';
		}
		if($title == ''){
			$title = 'Role or Job Title';
		}
	}else if($type == 'course'){
		if($name == ''){
			$name = 'Engineering 101';
		}
		if($title == ''){
			$title = 'School of Engineering';
		}
	}
	$string = '';
	$string .="\n<div class='directory-item ".$type."'>\n\t";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	if(is_null($image)){
		$image = p_image("400","600");
	}else{
		$image = "<img alt='".$title."' src='".$image."'/>";
	}
	$string .= $image."\n\t";
	$string .= "<div class='directory-contents'>\n\t\t<a href='#'><h4>".$name."</h4></a>\n\t\t";
	$string .= "<h5>".$title."</h5>\n\t\t";
	if(is_null($text)){
		$text = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit, turpis et lobortis commodo, mauris dolor finibus orci,</p>";
	}
	$string .= $text."\n\t";
	$string .= "<a class='read-more' href='#'>View More</a>\n\t";
	$string .="</div>\n</div>\n";
	return($string); 
}
?>