<?php
/*	ADDED TO HEAD.PHP
*	Includes logic to place correct css files on pages based on site variables
*		
*
*/
?>
	<link rel="stylesheet" type="text/css" href="/.includes/stylesheets/screen.css"/>
	<link rel="stylesheet" type="text/css" href="/.includes/libraries/font-awesome-4.3.0/css/font-awesome.css"/>
<?php if(isset($fe_framework)){/*	Add in our front-end framework css file	*/?>
	<link rel="stylesheet" type="text/css" href="/.includes/stylesheets/<?php echo $fe_framework ?>.css"/>
<?php } ?>
<?php if(isset($styles) && $styles != false){	?>
	<link rel="stylesheet" type="text/css" href="/.includes/stylesheets/<?php echo $page_slug ?>.css"/>
<?php } ?>
<?php if(isset($owl) && $owl == true){	?>
	<link rel="stylesheet" type="text/css" href="/.includes/libraries/css/owl.carousel.css"/>
<?php } ?>
<?php if(isset($colorbox) && $colorbox == true){	?>
	<link rel="stylesheet" type="text/css" href="/.includes/libraries/css/colorbox.css"/>
<?php } ?>
	<link rel="stylesheet" media="print" type="text/css" href="/.includes/stylesheets/print.css"/>
	<!--[if IE]>
		<link href="/.includes/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<![endif]-->
<?php if(isset($sitemap)){ ?>
	<link rel="stylesheet" type="text/css" href="/.util/.sitemap/sitemap.css"/>
<?php } ?>

<?php if(isset($demo) && $demo === true){ ?>
	<link rel="stylesheet" type="text/css" href="/.includes/stylesheets/demo.css"/>
<?php } ?>