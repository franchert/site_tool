<?php 
/* add the following to director.php
	if($layout == "longscroll"){
		$l_longscroll_first = "";
		$l_longscroll_second = "";
		$l_longscroll_third = "";
		$l_longscroll_fourth = "";
	}
*/
	include_once($docroot."/.includes/head.php");
	echo "</div></div></header>"; //div closes head and wrapper
?>
<div class="l-page" id="main-content">
	<?php if(isset($nav) && $nav == true){ ?>
	<div id="nav">
	  <ul>
	    <li class="a1"><a href="#a1" class="active"></a></li>
	    <li class="a2"><a href="#a2"></a></li>
	    <li class="a3"><a href="#a3"></a></li>
	    <li class="a4"><a href="#a4"></a></li>
	  </ul>
	</div>
	<?php } ?>
	<div class="" id="content">
		<section id="a1" class="l-longscroll-first l-region">
	        <?php echo $l_longscroll_first; ?>
	    </section>
		<section id="a2" class="l-longscroll-second l-region" id="a2">
	        <?php echo $l_longscroll_second; ?>
	    </section>
	    <section id="a3" class="l-longscroll-third l-region" id="a3">
	        <?php echo $l_longscroll_third; ?>
	    </section>
	    <section id="a4" class="l-longscroll-fourth l-region" id="a4">
	        <?php echo $l_longscroll_fourth; ?>
	    </section>
	</div>
<!-- l-page div closed in foot.php -->
<?php
include_once($docroot."/.includes/foot.php");
?>