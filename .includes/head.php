<!doctype HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Lora:400,400italic,700,700italic|Lobster|PT+Mono' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
<?php if($page == 'home'){ 
	$title = $client_name;
}else{
	$title = $page_title." - ".$client_name;
}
?>
	<title><?php echo $title;?></title>
	<meta property="og:title" content="<?php echo $title;?>'; ?>">
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
<?php include_once( $docroot."/.includes/styles.php"); ?>
</head>
<body<?php
	/*t4 doesn't allow for body classes*/
	if($cms !="t4"){
		$bodyclass = ' class="'.$set_tings['section_slug'];
		if($set_tings['section'] != $page){
			$bodyclass .= ' '.$page_slug;
		}
		/*if we're on a mini site, add an extra class to show its parent mini item*/
		if(isset($mini) && $mini == true){
			$bodyclass .= ' mini';
			if(isset($depth) && $depth > 0){
				$bodyclass .= ' m-'.substr($segments[$depth],1);
			}
		}
		$bodyclass .= ' '.$template.' '.$set_tings['header'].'"';
		echo $bodyclass;
	}
?>>
	<a tabindex='0' class="skip" href="#main-content">Skip to Main Content</a>
	<header>
		<?php echo p_alert($alert); ?>
	<div class="l-head <?php if(isset($mini) && $mini == true){echo "mini-site";} ?>">
		<?php if(isset($set_tings['header'])){
			include_once( $docroot."/.includes/headers/".$set_tings['header']."/".$set_tings['header'].".php");
		} ?>