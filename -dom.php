<?php
include_once($_SERVER['DOCUMENT_ROOT']."/simple_html_dom.php");

$global = "http://".$_SERVER['SERVER_NAME'];
$path = $_SERVER['SERVER_NAME'];
$ch = curl_init($global);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$curl_html = curl_exec($ch);

$html = str_get_html($curl_html);

if(!file_exists("index.html")){
	touch("index.html");
}


/*
file_put_contents("index.html",$html);
*/

/*
$file = "index.html"; 
$fh = fopen($file, 'w+') or die("can't open file");
fwrite($fh, $html); 
fclose($fh);
*/
?>