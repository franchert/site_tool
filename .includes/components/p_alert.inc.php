<?php
function p_alert($alert){
	global $fe_container;
	global $alert_on;
	global $set_tings;
	
	$set_tings['script_var'] .="
var time_updated = $('.alert').data('updated');
if(Cookies.get('alert_updated') == time_updated){
	$('.alert').addClass('closed');
}
$('.alert .toggle').on('click',function(e){
	Cookies.set('alert_updated',time_updated);
	$(this).parents('.alert').toggleClass('closed');
});";
	if(isset($alert) && $alert_on === true){
		$string ="<div data-updated='".$alert['updated']."' class='alert ".$alert['type'][0]."'>";
		$string .= infoButton(
			array(
				'fields' => array('title'),
				'needs' => array('hover','focus, active'),
				'intro' => 'This promo...',
				'other' => 'Other info...'
			)
		);
		$string .="
			<div class='toggle'>
				<h3>".$alert['type'][1]."</h3>
				<span></span>
			</div>
			<div class='message'>
				<div class='".$fe_container."'>
					<div class='message'>
						<h2>".$alert['message'][0]."</h2>
						<p>".$alert['message'][1]."</p>
					</div>
					<div class='contact'>
						<h2>Contact</h2>
						<ul>
							<li>".$alert['contact'][0]."</li>
							<li>".$alert['contact'][1]."</li>
						</ul>
					</div>
				</div>
			</div>
		</div>";
		return $string;
	}
}
?>