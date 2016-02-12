<?php
function p_alert($alert){
	global $fe_container;
	global $script_var;
	global $alert_on;

	$script_var .="
$('.alert .toggle').on('click',function(e){
	$(this).parents('.alert').toggleClass('closed');
});";
	if(isset($alert) && $alert_on === true){
		$string =
		"<div class='alert ".$alert['type'][0]."'>
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