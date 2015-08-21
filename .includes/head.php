<!doctype HTML>
<html>
<head>
<?php if($page == 'home'){ ?>
	<title><?php echo $client_name;?></title>
	<meta property="og:title" content="<?php echo $client_name;?>">
<?php }else{ ?>
	<title><?php echo $page_title; ?> - <?php echo $client_name;?></title>
	<meta property="og:title" content="<?php echo $page_title.' - <?php echo $client_name;?>'; ?>">
<?php } ?>
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $base_url.$url; ?>">
	<meta property="og:site_name" content="<?php echo $client_name;?>">
	<meta property="og:description" content="<?php echo $client_name;?>" >
	<meta property="og:image" content="" >
	<meta property="og:locale" content="en_US" >
	<meta property="twitter:card" content="summary" >
	<meta property="twitter:title" content="<?php echo $page_title.' - <?php echo $client_name;?>'; ?>" >
	<meta property="twitter:description" content="<?php echo $client_name;?>" >
	<meta property="twitter:creator" content="@" >
	<meta property="twitter:url" content="" >
	<meta property="twitter:image" content="" >
	<meta name="description" content="<?php echo $client_name;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/directory_loc.php");?>
	<?php include_once( $_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/styles.php"); ?>
	<?php include_once( $_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/scripts.php"); ?>
</head>
<body class="<?php echo $section_slug; 
if($section != $page){
	echo ' '.$page_slug;
}
/*if we're on a mini site, add an extra class to show it's parent mini item*/
if(isset($mini) && $mini == true){
	echo ' mini';
	/*if we're deeper than the mini home, add a mini-specific class*/
	if(isset($depth) && $depth > 0){
		echo ' m-'.substr($segments[$depth],1);
	}
}
echo " ".$layout;?>">
	<a class="back-to-top" href="#top">Back to Top</a>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=470606949755533";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<header>
	<?php if(isset($alert)){ ?>
	<div class="alert <?php echo $alert['type'][0]; ?>">
		<div class='toggle'>
			<h3><?php echo $alert['type'][1]; ?></h3>
			<span></span>
		</div>
		<div class="message">
			<div class='column'>
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
		<div class="toggle-wrapper"><div class="toggle"><div class="toggle-element"></div></div></div>
		<div class="utility">
			<div class="column">
				<div class="header-right">
					<button class="search-toggle" aria-label="site search toggle"><span class="fa fa-search"></span></button>
					<?php include($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/snippets/quick-links.tpl.php"); ?>
					<div class="search">
						<?php include($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/snippets/global-search.tpl.php"); ?>
					</div>
					<ul class="utility-menu">
						<li><a href="#">Apply</a></li>
						<li><a href="#">Online Learning</a></li>
						<li><a href="#">Directory</a></li>
						<li><a href="#">Inside</a></li>
					</ul>
				</div>
				<div class="header-left">
					<ul class="gateway-menu">
						<li><a href="#">Future Students</a></li>
						<li><a href="#">Current Students</a></li>
						<li><a href="#">Parents</a></li>
						<li><a href="#">Veterans</a></li>
						<li><a href="#">Alumni</a></li>
						<li><a href="#">Faculty &amp; Staff</a></li>
						<li><a href="#">Visitors</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="column site-logo-wrapper">
			<?php if($page == 'home'){echo "<h1>";} ?><a class="site-logo" href="/"><img src="<?php echo $site_logo; ?>" alt='Site Logo'></a><?php if($page == 'home'){echo "</h1>";} ?>
		</div>
		<div class='main-nav-container wrapper'>
			<?php 
			//if(isset($mini) && $mini == true){
			//	echo(p_mini_nav());
			//}else{
				echo(p_main_nav()); 
			//}
			?>
			<?php //include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/main_nav.php"); ?>
		</div>