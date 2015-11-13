<?php
/**
*	Function to include a structure that functions as an Accordion on mobile and tabs on desktop
*
*	@param string  $id = unique ID of structure being displayed
*	@param array  $arr = array of items to display. 
*		Each item should contain two keys, [t] for contents of tab and [b] for contents of body
*/
function p_tabaccordion(
	$id,
	$arr = null){

	$string = '<ul class="tabaccordion" id="'.$id.'">';
	if($arr == null){
		$string .='
		<li class="tab-active"><h3 tabindex="0">Section 1</h3>
			<div>
				<p>
				Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
				ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
				amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
				odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
				</p>
			</div>
		</li>
		<li><h3 tabindex="0">Section 2</h3>
			<div>
				<p>
				Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
				purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
				velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
				suscipit faucibus urna.
				</p>
			</div>
		</li>
		<li><h3 tabindex="0">Section 3</h3>
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
			</div>
		</li>
		</ul>';
	}else{
		$acc_string ='';
		foreach($arr as $k => $v){
			$acc_string .='<li><h3 tabindex="0">'.$v["t"].'</h3><div>'.$v["b"].'</div></li>';
		}
		$string .=$acc_string;
	}
	$string .='</ul>';
return $string;
}?>