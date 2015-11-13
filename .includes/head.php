<!doctype HTML>
<html>
<head>
<?php if($page == 'home'){ ?>
	<title><?php echo $client_name;?></title>
	<meta property="og:title" content="<?php echo $client_name;?>">
<?php }else{ ?>
	<title><?php echo $page_title; ?> - <?php echo $client_name;?></title>
	<meta property="og:title" content="<?php echo $page_title." - ".$client_name;?>'; ?>">
<?php } ?>
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $base_url.$url; ?>">
	<meta property="og:site_name" content="<?php echo $client_name;?>">
	<meta property="og:description" content="<?php echo $client_name;?>" >
	<meta property="og:image" content="" >
	<meta property="og:locale" content="en_US" >
	<meta property="twitter:card" content="summary" >
	<meta property="twitter:title" content="<?php echo $page_title.' - '.$client_name;?>'; ?>" >
	<meta property="twitter:description" content="<?php echo $client_name;?>" >
	<meta property="twitter:creator" content="@" >
	<meta property="twitter:url" content="" >
	<meta property="twitter:image" content="" >
	<meta name="description" content="<?php echo $client_name;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include_once( $_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/styles.php"); ?>
	<?php include_once( $_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/scripts.php"); ?>
</head>
<body class="<?php echo $section_slug; 
if($section != $page){echo ' '.$page_slug;}
/*if we're on a mini site, add an extra class to show its parent mini item*/
if(isset($mini) && $mini == true){echo ' mini';
	/*if we're deeper than the mini home, add a mini-specific class*/
	if(isset($depth) && $depth > 0){echo ' m-'.substr($segments[$depth],1);}
}
echo " ".$layout;?>">

	<a class="back-to-top" href="#top">Back to Top</a>
	<header>
	<?php if(isset($alert)){ ?>
		<div class="alert <?php echo $alert['type'][0]; ?>">
			<div class='toggle'>
				<h3><?php echo $alert['type'][1]; ?></h3>
				<span></span>
			</div>
			<div class="message">
				<div class='<?php echo $fe_container; ?>'>
					<div class="message">
						<h2><?php echo $alert['message'][0]; ?></h2>
						<p><?php echo $alert['message'][1]; ?></p>
					</div>
					<div class='contact'>
						<h2>Contact</h2>
						<ul>
							<li><?php echo $alert['contact'][0]; ?></li>
							<li><?php echo $alert['contact'][1]; ?></li>
						</ul>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="l-head <?php if(isset($mini) && $mini == true){echo "mini-site";} ?>">
		<?php if(isset($header)){
			include_once( $_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/headers/".$header."/".$header.".php");
		} ?>