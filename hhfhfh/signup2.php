<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['uname']) && isset($_POST['password'])
   && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);

    $user_data = 'uname='. $uname. '&name='. $name;

	if(empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
    else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
    else if(empty($name)){
        header("Location: signup.php?error=name is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmed password does not match&$user_data");
	    exit();
	}
    else{
		$pass = md5($pass);

		$sql = "SELECT * FROM customer WHERE username ='$uname'";
		$result = mysqli_query($koneksi,$sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another & $user_data");
	        exit();
		}else {
			$sql12 = "INSERT INTO customer(Username,Password,Name) VALUES('$uname','$pass','$name')";
			$result2 = mysqli_query($koneksi,$sql12);
			if ($result2) {
				header("Location: signup.php?succes=Your account has been created successfully");
	            exit();
			}else {
				header("Location: signup.php?error= unknown error& $user_data");
	            exit();
			}
		}
	}
}else{
	header("Location: signup.php");
	exit();
}