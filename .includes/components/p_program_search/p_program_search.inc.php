<?php
/**
 *	Function 
 */
function p_program_search(){

	global $set_tings;
	$string = '<div class="program-search">';
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
	$string .='
		<div id="search-container">
			<label for="searchterm">What do you want to study?</label>
			<input type="text" name="searchterm" id="searchterm" data-type="all" placeholder="Accounting, Communication, Engineering..."/>
			<div id="results"></div>
		</div>
	</div>';
	return $string;
	}
?>
