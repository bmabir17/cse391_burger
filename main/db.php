<?php
$servername="localhost";
$username="abir";
$password="assassin32";
$dbname="cse391_burger";

$con=mysqli_connect($servername, $username, $password, $dbname);

if ($con->connect_error){

	die("Connection failed :" . $con->connect_error);
}

//echo "connected successfully";
 ?>
