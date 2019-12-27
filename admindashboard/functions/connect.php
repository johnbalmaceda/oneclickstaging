<?php
 
$mysqlhost = "localhost";
$user = "vivoxain_1maindb";
$pass ="beloved!@#$56";
$site_db = "vivoxain_vmaindb";
$mysqlconnection = mysql_connect($mysqlhost,$user,$pass) or die(mysql_error());
mysql_select_db($site_db,$mysqlconnection);
?>

