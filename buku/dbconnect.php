<?php
$host = "localhost";
// $port = 3360;
$user = "root";
$password = "";
$dbname = "tokobuku";
$conn = mysqli_connect($host
// , $port
, $user, $password, $dbname);

if (!$conn) {
	die("error in connection");
}

//echo "database connected"
