<?php
	$data = $_POST['data'];
	file_put_contents('../.generate/sitemap.json',$data);
?>