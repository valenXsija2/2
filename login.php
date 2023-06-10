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

	if (empty($uname)) {
		header("Location: index.php?error=UserName is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
        $pass = md5($pass);
		$sql = "SELECT * FROM customer WHERE Username='$uname' AND Password='$pass'";

		$result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Username'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['id_customer'] = $row['id_costumer'];
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['Username'] = $row['Username'];
            	header("Location: index.html");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.html");
	exit();
}