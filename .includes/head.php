<!doctype HTML>
<html>
<head>
	<?php if($page == 'home'){ ?>
		<title>University of New Haven</title>
		<meta property="og:title" content="University of New Haven">
	<?php }else{ ?>
		<title><?php echo $page_title; ?> - University of New Haven</title>
		<meta property="og:title" content="<?php echo $page_title.' - University of New Haven'; ?>">
	<?php } ?>
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $base_url.$url; ?>">
	<meta property="og:site_name" content="University of New Haven">
	<meta property="og:description" content="University of New Haven" >
	<meta property="og:image" content="" >
	<meta property="og:locale" content="en_US" >
	<meta property="twitter:card" content="summary" >
	<meta property="twitter:title" content="<?php echo $page_title.' - University of New Haven'; ?>" >
	<meta property="twitter:description" content="University of New Haven" >
	<meta property="twitter:creator" content="@" >
	<meta property="twitter:url" content="" >
	<meta property="twitter:image" content="" >
	<meta name="description" content="University of New Haven">
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
	if(isset($depth) && $depth > 0){
		echo ' m-'.substr($segments[$depth],1);
	}
}
echo " ".$layout;?>">
	<a class="back-to-top" href="#top">Back to Top</a>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
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
					<ul class="quick-links">
						<li>
							<h3 tabindex='0'>Quick Links</h3>
							<ul class="utility-sub">
								<li><h4>Getting In</h4>
									<ul>
										<li><a href="#">Undergraduate Admissions</a></li>
										<li><a href="#">Graduate Admissions</a></li>
										<li><a href="#">International Admissions</a></li>
										<li><a href="#">Apply Now</a></li>
										<li><a href="#">Financial Aid</a></li>
										<li><a href="#">Net Price Calculator</a></li>
									</ul>
								</li>
								<li><h4>Our Colleges</h4>
									<ul>
										<li><a href="#">College of Arts &amp; Sciences</a></li>
										<li><a href="#">College of Business</a></li>
										<li><a href="#">Henry C. Lee College</a></li>
										<li><a href="#">Lyme Academy College of Fine Arts</a></li>
										<li><a href="#">Tagliatela College of Engineering</a></li>
									</ul>
								</li>
								<li><h4>Information Technology</h4>
									<ul>
										<li><a href="#">IT Support</a></li>
										<li><a href="#">InsideUNH</a></li>
										<li><a href="#">Student Email</a></li>
										<li><a href="#">Faculty &amp; Staff Email</a></li>
										<li><a href="#">Blackboard</a></li>
										<li><a href="#">Office of Information Technology (OIT)</a></li>
									</ul>
								</li>
								<li><h4>Popular Sites</h4>
									<ul>
										<li><a href="#">Emergency Procedures and Notifications</a></li>
										<li><a href="#">Career Development Center</a></li>
										<li><a href="#">Diversity - IDEA Council</a></li>
										<li><a href="#">Public Safety and Administrative Services</a></li>
										<li><a href="#">Study Abroad</a></li>
										<li><a href="#">Top Searches and Most-Visited Pages</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<div class="search">
						<?php include($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/snippets/global-search.tpl.php"); ?>
					</div>
					<ul class="utility-menu">
						<li><a href="#">Apply</a></li>
						<li><a href="#">Online Learning</a></li>
						<li><a href="#">Directory</a></li>
						<li><a href="#">InsideUNH</a></li>
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
		<div class="column">
			<?php if($page == 'home'){echo "<h1>";} ?><a class="site-logo" href="/"><img src="/.includes/stylesheets/images/unh-logo.jpg" alt='Western Carolina University'></a><?php if($page == 'home'){echo "</h1>";} ?>
		</div>
		<div class='main-nav-container wrapper'>
	<?php	
				include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/main_nav.php"); 
	?>
				<!--button class="menu-toggle">M Main Menu</button-->
		</div>