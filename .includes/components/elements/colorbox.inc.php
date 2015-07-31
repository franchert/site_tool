<?php
function p_colorbox($selector){
	$string ='
	<script>
	$(document).ready(function(){
		$("'.$selector.'").colorbox({
			photo:true,
		});
	});
	</script>';
	return $string;
}?>