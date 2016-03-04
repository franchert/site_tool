<?php
	$data = $_POST['data'];
	file_put_contents('../.util/.generate/sitemap.json',$data);
?>