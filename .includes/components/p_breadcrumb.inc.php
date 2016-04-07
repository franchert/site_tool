<?php
/**
 *	Function to include a breadcrumb
 */
function p_breadcrumb(){

	global $fe_wrapper;
	global $set_tings;

	$string = "\n\t<div class='".$fe_wrapper."'>\n\t\t<div id='breadcrumb'>";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	$string .="\n\t\t\t<ul>\n\t\t";
	$i = -1;
	$crumb = '';
	$count = count($set_tings['segments']);
	foreach($set_tings['segments'] as $segment){
		if ($i !=-1){
			$crumb .=$segment."/";
		}
			$segment = titleFromSlug(substr($segment,1));
		if ($i ==-1){
			$segment = "<span class='fa fa-home'></span>";
			$crumb .= "/";
		}
		$i++;
		$string .= "\t\t<li>";
		if($count == $i+1){
			$string .= $segment;
		}else{
			$string .='<a href="'.$crumb.'">'.$segment.'</a>';
		}
		$string .="</li>\n\t\t";
	}
	$string .= "\t</ul>\n\t\t</div>\n\t</div>\n";

	return $string;
}
?>