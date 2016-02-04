<?php 
/* add the following to director.php
	if($layout == "one-column"){
		$p_one = "";
	}
*/
	include_once($docroot."/.includes/head.php");
	echo "</div></div></header>"; //div closes head and wrapper
?>
<div class="l-page">
	<?php echo $p_one; ?>

<?php
/*l-page div closed in foot.php*/
include_once($docroot."/.includes/foot.php");
?>