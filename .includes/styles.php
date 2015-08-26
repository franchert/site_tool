<?php
/*
*	Includes logic to place correct css files on pages based on site variables
*
*
*/
?>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_base; ?>/.includes/stylesheets/screen.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_base; ?>/.includes/stylesheets/colorbox.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_base; ?>/.includes/libraries/font-awesome-4.3.0/css/font-awesome.css"/>
<?php
/*
*	Styles per layout are statically applied through css file, and not scss
*/
?>
<?php if($layout){	?>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_base; ?>/.includes/layouts/<?php echo $layout ?>/<?php echo $layout ?>.css"/>
<?php } ?>
<?php if(isset($styles) && $styles != false){	?>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_base; ?>/.includes/libraries/<?php echo $page ?>.css"/>
<?php } ?>
<?php if(isset($owl) && $owl == true){	?>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_base; ?>/.includes/libraries/owl.carousel.css"/>
<?php } ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_base; ?>/.includes/stylesheets/print.css"/>

<!--[if IE]>
	<link href="/.includes/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->