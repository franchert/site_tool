<?php
/*	ADDED TO HEAD.PHP
*	Includes logic to place correct javascript on pages based on site variables
*	REQUIRED VARIABLES PER PAGE:
*		$layout
*		$header
*		$fe_framework
*/
?>
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="<?php echo $file_base; ?>/.includes/js/jquery.hoverIntent.js"></script>
<?php //include all necessary libraries ?>
<?php if(isset($layout)){ ?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/layouts/<?php echo $layout ?>/<?php echo $layout ?>.js"></script>
<?php } ?>
<?php if(isset($header)){ ?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/headers/<?php echo $header ?>/<?php echo $header ?>.js"></script>
<?php } ?>
<?php if(isset($fe_framework)){?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/<?php echo $fe_framework ?>.js"></script>
<?php } ?>
<?php if(isset($waypoints) && $waypoints === true){	?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/jquery.waypoints.min.js"></script>
<?php } ?>
<?php if(isset($owl) && $owl === true){	?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/owl.carousel.min.js"></script>
<?php } ?>
<?php if(isset($feed_search) && $feed_search === true){	?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/feed_search.js"></script>
<?php } ?>
<?php if(isset($instafeed) && $instafeed === true){	?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/instafeed.min.js"></script>
<?php } ?>
<?php if(isset($colorbox) && $colorbox === true){	?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/jquery.colorbox-min.js"></script>
<?php } ?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/global.js"></script>
<?php if(isset($scripts) && $scripts === true){	?>
	<script type="text/javascript" src="<?php echo $file_base; ?>/.includes/js/<?php echo $page_slug ?>.js"></script>
<?php } ?>
	<script type="text/javascript">var switchTo5x=true;</script>
