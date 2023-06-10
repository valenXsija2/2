<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['Username']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Username']);
	$pass = validate($_POST['Password']);
    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);

    $user_data = 'uname='.$uname. '$name='. $name;
	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=re Password is required&$user_data");
	    exit();    
	}else if(empty($re_pass)){
        header("Location: signup.php?error=name is required&$user_data");
	    exit();    
	}else if(empty($name)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();    
	}
    // else{
	// 	$pass = md5($pass);
	// 	$sql = "SELECT * FROM customer WHERE Username='$uname' AND Password='$pass'";

	// 	$result = mysqli_query($koneksi, $sql);

	// 	if (mysqli_num_rows($result) === 1) {
	// 		$row = mysqli_fetch_assoc($result);
    //         if ($row['username'] === $uname && $row['password'] === $pass) {
    //         	$_SESSION['username'] = $row['username'];
    //         	$_SESSION['name'] = $row['name'];
    //         	$_SESSION['id_customer'] = $row['id_customer'];
    //         	header("Location:signup.php");
	// 	        exit();
    //         }else{
	// 			header("Location: signup.php?error=Incorect User name or password");
	// 	        exit();
	// 		}
	// 	}else{
	// 		header("Location: signup.php?error=Incorect User name or password");
	//         exit();
	// 	}
	// }
	
}else{
	header("Location: signup.php");
	exit();
}