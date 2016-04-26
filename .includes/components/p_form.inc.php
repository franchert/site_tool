<?php
function p_form(
	$class='demo'){

	global $set_tings;

	$set_tings['script_var'] .='
$(".'.$class.'").parsley();
	';
	$string = '<form method="post"  class="'.$class.'">';

	$string .= '<legend>Demographic Information</legend>';
	$string .= '<div class="required">';
	$string .= '<label class="sr-only" for="name">Name</label>';
	$string .= '<input aria-label="Name" data-parsley-trigger="change" id="name" type="text" placeholder="Name" required/>';
	$string .= '</div>';

	$string .= '<div class="required"><label class="sr-only" for="email">Email</label>';
	$string .= '<input aria-label="Email" data-parsley-trigger="change" id="email" type="email" placeholder="Email" required/>';
	$string .= '</div>';

	$string .= '<legend>Message</legend>';

	$string .= '<div class="required">';
	$string .= '<textarea data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100"data-parsley-maxlength-message="Message too long" data-parsley-minlength-message="Message too short" data-parsley-validation-threshold="20" id="comments" placeholder="Comments / Questions / Concerns" required></textarea>';
	$string .= '<label class="sr-only" for="comments">(20 chars minimum, 100 max)</label></div>';

	$string .= '<legend>Selections</legend>';

	$string .= '<div><label class="sr-only" for="value">Select a Value</label>';
	$string .= '<select id="value"><option value="val-1">1</option><option value="val-2">2</option><option value="val-3">3</option></select>';
	$string .= '</div>';

	$string .= '<label class="sr-only" for="value">Pick Multiple:</label>';
	$string .= '<div>';
	$string .= '<div>';
	$string .= '<input aria-label="Value 1" type="checkbox" id="value-1" name="value[]"/><label for="value-1">Value 1</label>';
	$string .= '</div>';
	$string .= '<div>';
	$string .= '<input aria-label="Value 2" type="checkbox" id="value-2" name="value[]"/><label for="value-2">Value 2</label>';
	$string .= '</div>';
	$string .= '</div>';

	$string .= '<label class="sr-only">Pick One:</label>';
	$string .= '<div>';
	$string .= '<div>';
	$string .= '<input aria-label="yes" type="radio" name="group1" value="Yes"/><label>Yes</label>';
	$string .= '</div>';
	$string .= '<div>';
	$string .= '<input aria-label="maybe" type="radio" name="group1" value="Maybe"/><label>Maybe</label>';
	$string .= '</div>';
	$string .= '<div>';
	$string .= '<input aria-label="no" type="radio" name="group1" value="No"/><label>No</label>';
	$string .= '</div>';
	$string .= '</div>';

	$string .= '<input type="submit" value="submit" class="submit">';

	$string .= '</form>';
	return $string;
}
?>