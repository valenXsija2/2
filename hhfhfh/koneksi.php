<?php
$sname ="localhost";
$db_name ="ukl";
$uname ="root";
$password ="";
$koneksi = mysqli_connect($sname,$uname,$password,$db_name);
if($koneksi){
	echo "koneksi db berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
?>