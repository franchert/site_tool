<?php 
/* add the following to director.php
	if($layout == "one-column"){
		$p_one = "";
	}
*/
	include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
	echo "</div></div></header>"; //div closes head and wrapper
?>
<div class="l-page">
	<?php echo $p_one; ?>

<?php
/*l-page div closed in footer.php*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/footer.php");
?>