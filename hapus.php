<?php
include("koneksi.php");
$id = $_GET['id_bemo'];
$result = mysqli_query($koneksi, "DELETE FROM bemo WHERE id_bemo=$id");
header("location: tabel.php");
?>