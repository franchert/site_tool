<?php
/**
 *	Function 
 *
 *	@param string  $type = 
 *	@param string  $title = 
 *	@param string  $text = 
 *	@param string  $link = 
 *	@param string  $month = 
 *	@param string  $type = 
 *	@param string  $type = 
 */
function p_contact($type='generic'){
	global $set_tings;
	$string = "";
	$string .="<div class='contact'>\n\t";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	if(strrpos($type,"generic") !== false){
		$string .="<p>John Smith</p>\n\t";
		$string .="<p><a href='tel:555-555-5555'>(555) 555 - 5555</a></p>\n\t";
		$string .="<p><a href='mailto:john.smith@example.edu'>john.smith@example.edu</a></p>\n";
	}else if(strrpos($type,"icons") !== false){
		$string .="<p><span class='fa fa-user'></span>John Smith</p>\n\t";
		$string .="<p><span class='fa fa-phone'></span><a href='tel:555-555-5555'>(555) 555 - 5555</a></p>\n\t";
		$string .="<p><span class='fa fa-envelope-o'></span><a href='mailto:john.smith@example.edu'>john.smith@example.edu</a></p>\n";
	}
	$string .="</div'>\n";
	return $string;
}