<?php
/*
*	redirect_install redirects through here to create site-specific .htaccess and settings.php
*	that will be ignored in the repository
*/
	if(isset($_GET['location'])) {
		$location = htmlspecialchars($_GET['location']);
	}else{
		$location = 'index.php';
	}
	if(!file_exists(".htaccess")){
		touch(".htaccess");
		file_put_contents(".htaccess",file_get_contents('.util/default-htaccess.md'));
	}
	if(!file_exists("settings.php")){
		touch("settings.php");
		file_put_contents("settings.php",file_get_contents('.util/settings.default.php'));
	}
	header('Location: '.$location);
?>