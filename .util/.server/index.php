<?php 
/*
*	Displays server variables
*
*/
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
'ORIG_PATH_INFO');

echo "</br>Return to the <a href='/.util'>Utility page</a>";
echo '<div class="toggle"><table cellpadding="10" style="max-width:600px;margin:30px;">' ;
foreach ($indicesServer as $arg) {
	if (isset($_SERVER[$arg])) {
		echo '<tr style="display:table-row;float:none;width:auto;border-top:1px solid black;border-left:1px solid black;"><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">'.$arg.'</td><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">' . $_SERVER[$arg] . '</td></tr>' ;
	}
	else {
		echo '<tr style="display:table-row;float:none;width:auto;border-top:1px solid black;border-left:1px solid black;"><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">'.$arg.'</td><td style="display:table-cell;float:none;width:auto;border-bottom:1px solid black;border-right:1px solid black;padding:5px;">-</td></tr>' ;
	}
}
echo '</table></div>' ;*/
echo phpinfo();
/* <?php include_once('/test.php'); ?> */