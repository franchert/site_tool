<?php
/**
		DEPRECIATED, use accordiontab if possible
*	Function to include a jQuery UI Accordion
*
*	@param string  $id
*	@param array  $arr = array of items to display
*/
function p_accordion(
	$id,
	$arr = null){

	global $script_var;
	$string = '';
	$script_var .= '
$(function() {
	$( "#'.$id.'" ).accordion({
		heightStyle: "content"
	});
});
	';
	$string .='<div id="'.$id.'">';
	if($arr == null){
		$string .='
		<h3>Section 1</h3>
		<div>
			<p>
			Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
			amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
			</p>
		</div>
		<h3>Section 2</h3>
		<div>
			<p>
			Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
			purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
			velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
			suscipit faucibus urna.
			</p>
		</div>
		<h3>Section 3</h3>
		<div>
			<p>
			Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
			Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
			ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
			lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
			</p>
			<ul>
				<li>List item one</li>
				<li>List item two</li>
				<li>List item three</li>
			</ul>
		</div>';
	}else{
		$acc_string ='';
		foreach($arr as $k => $v){
			$acc_string .='<h3>'.$v["t"].'</h3><div>'.$v["b"].'</div>';
		}
		$string .=$acc_string;
	}
	$string .='</div>';
return $string;
}?>