<?php

include "db_conn.php";

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
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
	}*/
	$stmt = $conn->prepare("insert into users(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("s", $firstName, $lastName, $gender, $email, $password, $number);
	$execval = $stmt->execute($firstName);
	$stmt->bind_result();
	while($stmt->fetch()){
		echo $firstName;
	}
	echo $execval;
	echo "Registration successfully...";
	header("Location: homePage.php");
	$stmt->close();
	$conn->close();
	echo "hi"
?>