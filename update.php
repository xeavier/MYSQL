<?php

session_start(); 
include "db_conn.php";

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";


$conn = mysqli_connect($sname, $unmae, $password, $db_name);

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$password = $_POST['password'];
	$email = $_SESSION['email'];
	$sql = "UPDATE users SET firstName = '$firstName', lastName = '$lastName', password = '$password' WHERE email= '$email'";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	//header("Location: homePage.php");
	// Database connection
	 //$conn = new mysqli('localhost','root','','test_db');
	/*if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}*/header("Location: homePage.php");
?>