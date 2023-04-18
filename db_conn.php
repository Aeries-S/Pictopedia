<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "test_db";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
	echo "Connection failed!";
	exit();
}