<?php
	$data = $_POST['data'];
	file_put_contents('sitemap.json',$data);
?>