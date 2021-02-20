<?php

$sname= 'us-cdbr-east-03.cleardb.com';
$unmae= "b23427975fc010";
$password = "0636ac8d";

$db_name = "users";

/*$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";*/


$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {
	echo "Connected!";
}
if (!$conn) {
	echo "Connection failed!";
}
