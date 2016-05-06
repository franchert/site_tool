<?php
/**
	NOT READY, still in development
*	Function to include a prefab calendar
*
*	@param string  $date = 
*/
function p_calendar(
	$date=null){

	$day = date('j');
	$month = date("m");
	$year = date("Y");
	global $set_tings;

	//$day = 21;$month = 12;$year = 2015;
	$time = time();
	$string = '';
	$n_starting_week = ($day - date('w',mktime(0, 0, 0, $month, $day, $year)));
	$n_starting_day = ($n_starting_week % 7) - 7;
	$n_last_previous_month = date("j", mktime(0, 0, 0, $month, 0, $year));
	$first_calendar_day = $n_last_previous_month + $n_starting_day;
	$string .="<table class='calendar'>";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	$string .="<thead><tr><td>Sunday</td><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td><td>Saturday</td></tr></thead>";
	$string .="<tbody>";
	$string .="<tr>";
	for ($i = $first_calendar_day; $i <= ($first_calendar_day + 6); $i++){
		if($i > $n_last_previous_month){
			$p = $i - $n_last_previous_month;
			$old = '';
		}else{
			$p = $i;
			$old = 'old';
		}
		$string .="<td class='".$old."'>".$p."</td>";
	}
	$old = '';
	$string .="</tr>";
	$num_weeks_left =ceil((date('t',mktime(0, 0, 0, $month, $day, $year)) - $p)/7);
	for ($i=1;$i<=$num_weeks_left;$i++){
		$string .="<tr>";
		for($j=1;$j<8;$j++){
			$p++;
			if($p > date('t',mktime(0, 0, 0, $month, $day, $year))){
				$p = 1;
				$old = 'old';
			}
			$string .="<td class='".$old."'>".$p."</td>";
		}
		$string .="</tr>";
	}
	$string .="</tbody>";
	$string .="</table>";
	return $string;
}