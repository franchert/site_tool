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
	$type = 'normal',
	$title="Event Title Here",
	$text = "Event description, location or extra information",
	$link="#",
	$month=null,
	$day=null,
	$weekday=null){

	if ($month == null){
		$month = date("M");
	}
	if ($day == null){
		$day = date('d');
	}
	if ($weekday == null){
		$weekday = date('D');
	}
	$string = '<div class="promo-event '.$type.'">';
	$string .= '<a href="'.$link.'">';
	$string .= '<div class="date">';
	$string .= '<div class="weekday">'.$weekday.'</div>';
	$string .= '<div class="month">'.$month.'</div>';
	$string .= '<div class="day">'.$day.'</div>';
	$string .= '</div>';
	$string .= '<div class="info">';
	$string .= '<h3>'.$title.'</h3>';
	$string .= '<p>'.$text.'</p>';
	$string .= '</div></a></div>';
	return $string;
}