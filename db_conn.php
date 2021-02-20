<?php

$sname= 'sql5.freesqldatabase.com';
$unmae= "sql5393989";
$password = "n1DiTLC8nZ";

$db_name = "sql5393989";

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
