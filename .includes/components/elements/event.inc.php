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
function p_event(
	$type = "normal",
	$title='Event Title Here',
	$text = 'Event description, location or extra information',
	$link='#',
	$month=null,
	$day=null,
	$weekday=null){

	if ($month == null){
		$month = date('M');
	}
	if ($day == null){
		$day = date("d");
	}
	if ($weekday == null){
		$weekday = date("D");
	}
	$string = "\n<div class='promo-event ".$type."'>\n\t";
	$string .= "<a href='".$link."'>\n\t\t";
	$string .= "<div class='date'>\n\t\t\t";
	$string .= "<div class='weekday'>".$weekday."</div>\n\t\t\t";
	$string .= "<div class='month'>".$month."</div>\n\t\t\t";
	$string .= "<div class='day'>".$day."</div>\n\t\t";
	$string .= "</div>\n\t\t";
	$string .= "<div class='info'>\n\t\t\t";
	$string .= "<h3>".$title."</h3>\n\t\t\t";
	$string .= "<p>".$text."</p>\n\t\t";
	$string .= "</div>\n\t</a>\n</div>\n";
	return $string;
}