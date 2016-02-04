<?php
if(file_exists($_SERVER['DOCUMENT_ROOT'].$file_base."/settings.php")){
	include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/settings.php");
}else{
	header("Location: /install.php?location=" . urlencode($_SERVER['REQUEST_URI']));
}
?>