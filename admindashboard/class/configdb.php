 
<?php
 


$servername = "localhost";
$database = "lunarout_invsystem";
$username = "lunarout_devsx11";
$password = "devsx!@#$5";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//echo 'Connected successfully';

//mysqli_close($conn);

?>
 