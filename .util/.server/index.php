<?php 
/*
*	Displays server variables
*
*/
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
include_once($docroot."/.includes/director.php");

/*$indicesServer = array('PHP_SELF', 
'argv', 
'argc', 
'GATEWAY_INTERFACE', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'SERVER_PROTOCOL', 
'REQUEST_METHOD', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'QUERY_STRING', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_CHARSET', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR', 
'REMOTE_HOST', 
'REMOTE_PORT', 
'REMOTE_USER', 
'REDIRECT_REMOTE_USER', 
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SERVER_SIGNATURE', 
'PATH_TRANSLATED', 
'SCRIPT_NAME', 
'REQUEST_URI', 
'PHP_AUTH_DIGEST', 
'PHP_AUTH_USER', 
'PHP_AUTH_PW', 
'AUTH_TYPE', 
'PATH_INFO', 
'ORIG_PATH_INFO');*/
echo "<a href='/.util' style='position:fixed;top:120px;right:20px;background:#333;color:white;padding:13px 0px;width:50px;height:24px;border-radius:50%;text-decoration:none;text-align:center;line-height:25px;'>Util</a>";
echo '<div class="toggle"><table cellpadding="10" style="max-width:600px;margin:30px;border-left:1px solid black; border-top:1px solid black;">' ;
foreach ($set_tings as $k => $v) {
	$str = '';
	if(is_array($v)){
		echo '<tr style="display:table-row;float:none;width:auto;border-top:1px solid black;border-left:1px solid black;"><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">'.$k.'</td><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">' .array_print($v,$str). '</td></tr>' ;
	}else{
		echo '<tr style="display:table-row;float:none;width:auto;border-top:1px solid black;border-left:1px solid black;"><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">'.$k.'</td><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">' .$v. '</td></tr>' ;
	}
}
echo '</table></div>' ;

//echo phpinfo();
/* <?php include_once('/test.php'); ?> */
function array_print($arr,$str){
	foreach($arr as $k => $v){
		if(is_array($v)){
			$str .= $k.'</br>&nbsp;';
			array_print($v,$str);
		}else{
			$str .= $k.' : '.$v.'</br>';
		}
	}
	return $str;
}