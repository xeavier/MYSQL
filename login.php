<?php   
session_start(); 
include "db_conn.php";
//$conn = mysqli_connect("localhost", "root", , "test_db");

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if ($uname == "") {
	    header("Location: loginPage.php?error=User Name is required");
	    exit();
	}else if($pass == ""){
        header("Location: loginPage.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['email'] = $row['email'];
				$_SESSION['firstName'] = $row['firstName'];
				$_SESSION['lastName'] = $row['lastName'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['gender'] = $row['gender'];
            	//$_SESSION['id'] = $row['id'];
				//echo "login success"
            	header("Location: homePage.php");
		        exit();
            }else{
				header("Location: loginPage.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: loginPage.php?error=Incorect User name or password");
	        exit();
		}
	}
}else{
	header("Location: loginPage.php");
	exit();
}