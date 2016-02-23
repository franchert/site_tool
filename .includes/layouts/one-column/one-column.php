<?php 
/* add the following to director.php
	if($layout == "one-column"){
		$l_one_col = "";
	}
*/
	include_once($docroot."/.includes/head.php");
	echo "</div></div></header>"; //div closes head and wrapper
?>
<div class="l-page" id="main-content">
	<?php echo $l_one_col; ?>

<?php
/*l-page div closed in foot.php*/
include_once($docroot."/.includes/foot.php");
?>