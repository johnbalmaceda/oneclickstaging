<?php
/*
@created by: Bryan Blas
@description: sanitize variables before interacting with mysql database to prevent sql injection
@param: $string the string to be sanitize
@return: the sanitized $string ready to use in mysql
@usage: $str = sanitize($_POST['txtusername']);
*/

function sanitize($string) 
{
	if (get_magic_quotes_gpc()==1){
		$strip_string = stripslashes($string);
		$string = mysql_real_escape_string($strip_string);

		return $string;
	} 
	else 
	{
		return $string;
	}
}
?>