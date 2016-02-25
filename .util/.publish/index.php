<?php
/*
*	this builds index.html files from the index.php function calls.
*	visiting via a cURL, pulling the DOM into a string
*	and saving it to a file.
*/
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
include_once($docroot."/.util/.publish/simple_html_dom.php");
global $set_tings;
include_once($docroot."/.includes/director.php");

	$base_dir  = $set_tings['base_site'];
	$directories = array();
	$directories[] = '/';
	/*build the list of directories we'll need to publish*/
	foreach(scandir($base_dir) as $file) {
		if(substr($file,0,1) == '.' 
			|| substr($file,0,1) == '0' 
			|| substr($file,0,2) == '..' 
			|| substr($file,0,2) === '/.' 
			|| substr($file,0,2) === '/0') continue;
		$dir = $base_dir.DIRECTORY_SEPARATOR.$file;
		if(is_dir($dir)) {
			$temp = str_replace($set_tings['base_site'],"",$dir);
			if($temp[0] != "."){
				$directories []= $temp;
				$directories = array_merge($directories, expandDirectories($dir));
			}
		}
	}
	/*if there's already a published version, we don't want to overwrite*/
if(is_dir($set_tings['docroot']."/".$set_tings['client_slug'])){
	echo("site already published, delete the ".$set_tings['client_slug']." directory to republish");
}else{
	mkdir($set_tings['docroot']."/".$set_tings['client_slug']);
	$global = "http://".$_SERVER['SERVER_NAME'];
	print_r("The following static files have been published.</br>");
	/*loop through all of the directories to recreate the structure in the new location*/
	foreach ($directories as $k=>$v){
		/*get the URL to pull the DOM from*/
		$file = $global.$v."/index.php";
		$ch = curl_init($file);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$curl_html = curl_exec($ch);
		/*pull in the contents*/
		$html = str_get_html($curl_html);
		/*since we're moving the site, need to replace the references to the dynamic version*/
		$html = str_replace(".includes","includes",$html);
		$html = str_replace('href="/','href="/'.$set_tings['client_slug'].'/',$html);
		$html = str_replace("href='/","href='/".$set_tings['client_slug'].'/',$html);
		$html = str_replace('src="/','src="/'.$set_tings['client_slug'].'/',$html);
		$html = str_replace("src='/","src='/".$set_tings['client_slug'].'/',$html);
		$html = str_replace("includes/headers/".$set_tings['header'],"includes/js",$html);
		/*replace references to each of the layouts as well*/
		$results = scandir($set_tings['docroot'].'/.includes/layouts');
		foreach ($results as $result){
			if ($result === '.' or $result === '..') continue;
			if(is_dir($set_tings['docroot']."/.includes/layouts/".$result)){
				$html = str_replace("includes/layouts/".$result,"includes/js",$html);
			}
		}
		/*make the directory in the new location*/
		if(!is_dir($set_tings['docroot']."/".$set_tings['client_slug'].$v)){
			mkdir($set_tings['docroot']."/".$set_tings['client_slug'].$v,0777,true);
		}
		/*create the URL for the index file in the new location*/
		$newfile = $set_tings['docroot']."/".$set_tings['client_slug'].$v."/index.html";
	print_r("/".$set_tings['client_slug'].$v."/index.html</br>");
		/*create the new file*/
		if(!file_exists($newfile)){touch($newfile);}
		file_put_contents($newfile,$html);
	}
	/*add in everything we need from the includes folder*/
	if(!is_dir($set_tings['docroot']."/".$set_tings['client_slug']."/includes")){
		mkdir($set_tings['docroot']."/".$set_tings['client_slug']."/includes");
	}
	recurse_copy($set_tings['docroot']."/.includes/fonts",$set_tings['docroot']."/".$set_tings['client_slug']."/includes/fonts");
	recurse_copy($set_tings['docroot']."/.includes/images",$set_tings['docroot']."/".$set_tings['client_slug']."/includes/images");
	recurse_copy($set_tings['docroot']."/.includes/js",$set_tings['docroot']."/".$set_tings['client_slug']."/includes/js");
	recurse_copy($set_tings['docroot']."/.includes/libraries",$set_tings['docroot']."/".$set_tings['client_slug']."/includes/libraries");
	recurse_copy($set_tings['docroot']."/.includes/stylesheets",$set_tings['docroot']."/".$set_tings['client_slug']."/includes/stylesheets");
	/*add in the layout js (note the scss isn't needed as it isn't being delivered)*/
	$results = scandir($set_tings['docroot'].'/.includes/layouts');
	foreach ($results as $result){
		if ($result === '.' or $result === '..') continue;
		if(is_dir($set_tings['docroot']."/.includes/layouts/".$result)){
			$files = scandir($set_tings['docroot'].'/.includes/layouts/'.$result);
			foreach($files as $file){
				$parts = pathinfo($file);
				if ($parts['extension'] == 'js') {
					copy($set_tings['docroot']."/.includes/layouts/".$result."/".$parts['basename'],
						$set_tings['docroot']."/".$set_tings['client_slug']."/includes/js/".$parts['basename']);
				}
			}
		}
	}
	/*add in the headers js*/
	$files = scandir($set_tings['docroot'].'/.includes/headers/'.$set_tings['header']);
	foreach($files as $file){
		$parts = pathinfo($file);
		if ($parts['extension'] == 'js') {
			copy($set_tings['docroot']."/.includes/headers/".$set_tings['header']."/".$parts['basename'],
				$set_tings['docroot']."/".$set_tings['client_slug']."/includes/js/".$parts['basename']);
		}
	}
}
/*now we'll archive the folder*/
// Get real path for our folder
$rootPath = realpath($set_tings['docroot']."/".$set_tings['client_slug']);

// Initialize archive object
$zip = new ZipArchive();
$zip->open($set_tings['docroot']."/".$set_tings['client_slug'].'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
	new RecursiveDirectoryIterator($rootPath),
	RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
	// Skip directories (they would be added automatically)
	if (!$file->isDir())
	{
		// Get real and relative path for current file
		$filePath = $file->getRealPath();
		$relativePath = substr($filePath, strlen($rootPath) + 1);

		// Add current file to archive
		$zip->addFile($filePath, $relativePath);
	}
}

// Zip archive will be created only after closing object
$zip->close();
// remove the temporary directory now that we have the zip file (NOT SAFE, MAY DELETE ROOT)
/*
if(is_dir($set_tings['docroot']."/".$set_tings['client_slug'])){
	rrmdir($set_tings['docroot']."/".$set_tings['client_slug']);
}
*/
echo "<a href='/.util' style='position:fixed;top:20px;right:20px;background:#333;color:white;padding:20px;width:50px;height:50px;border-radius:50%;text-decoration:none;text-align:center;line-height:25px;'>Back to Utility</a>";

function recurse_copy($src,$dst) {
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($src . '/' . $file) ) {
				recurse_copy($src . '/' . $file,$dst . '/' . $file);
			}
			else {
				copy($src . '/' . $file,$dst . '/' . $file);
			}
		}
	}
	closedir($dir); 
}
/*recursively remove directory
 *	this isn't safe. Don't use it.
 */
/*
function rrmdir($dir) {
	if (is_dir($dir)) {
		$objects = scandir($dir);
		foreach ($objects as $object) {
			if ($object != "." && $object != "..") {
				if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
			}
		}
		reset($objects);
		rmdir($dir);
	}
}
*/
?>