<?php 

$servername = "localhost";
$username = "opgtgqmy_api";
$password ="9l*^i@zX@HTL";
$dbname ="opgtgqmy_api";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn)
{
	die("Connection Failed : " . mysql_connect_error());
}
?>