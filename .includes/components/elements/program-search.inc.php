<?php
/**
*	Function 
*/
function p_program_search(){

	$string = '
	<div class="program-search">
		<div id="search-container">
			<label for="searchterm">What do you want to study?</label>
			<input type="text" name="searchterm" id="searchterm" data-type="all" placeholder="Accounting, Communication, Engineering..."/>
			<span id="searchclear" class="search"><span class="fa fa-search"></span></span>
			<div id="results"></div>
		</div>
	</div>';
	return $string;
	}
?>
