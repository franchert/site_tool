<?php
/**
 *	Function 
 *
 *	@param string  $arr = 
 *	@param string  $width = 
 */

function p_table(
	$id,
	$head = null,
	$rows = null,
	$type = 'responsive-table-wrapper'){

	global $set_tings;
	$string = "";
	if ($head == null){
		$head = array(
			'First Name',
			'Last Name',
			'Enrolled',
			'Resume'
		);
	}
	if($rows == null){
		$rows = array(
			array(
				"John",
				"Smith",
				"<span class='fa fa-check'></span>",
				"<a href='sample.doc'>PDF</a>"
			),
			array(
				"Tim",
				"Jones",
				"",
				"<a href='sample.pdf'>file</a>"
			),
			array(
				"Jane",
				"Doe",
				"<span class='fa fa-check'></span>",
				"not available"
			),
			array(
				"Sample",
				"Person",
				"",
				"<a href='sample.pdf'>another</a>"
			)
		);
	}

	$string .="\n<div class='".$type."'>\n\t<table class='".$id."'>\n\t\t";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	if($head != null){
		$string .="<thead>\n\t\t\t<tr>\n\t\t\t";
		foreach($head as $k => $v){
			$string .= "\t<td>".$v."</td>\n\t\t\t";
		}
		$string .="</tr>\n\t\t</thead>\n\t\t";
	}
	if($rows != null){
		$string .="<tbody>\n\t\t";
			$count = 0;
			foreach($rows as $key => $value){
				$string .="\t<tr"." class='".(++$count%2 ? "odd" : "even")."'>\n\t\t\t";
				foreach($value as $k => $v){
					$string .= "\t<td>".$v."</td>\n\t\t\t";
				}
				$string .="</tr>\n\t\t";
			}
		$string .="</tbody>\n\t";
	}
	$string .="</table>\n</div>\n";
	return $string;
}
?>