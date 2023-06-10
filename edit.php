<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_bemo']) ){
    header('Location: tabel.php');
}

// //ambil id dari query string
// $id = $_GET['id'];

// // buat query untuk ambil data dari database
// // $result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id");
// $sql = "SELECT * FROM buku WHERE id=$id";
// $query = mysqli_query($mysqli, $sql);
// $siswa = mysqli_fetch_assoc($query);

// // jika data yang di-edit tidak ditemukan
// if( mysqli_num_rows($query) < 1 ){
//     die("data tidak ditemukan...");
// }
$id_bemo = $_GET['id_bemo'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM bemo WHERE id_bemo=$id_bemo");

while($user_data = mysqli_fetch_array($result))
{
    $grade = $user_data['grade'];
    $harga = $user_data['harga'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Customer</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Customer</h3>
    </header>
    <form method="POST" action="edit_pro.php">
        <table border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="grade" value="<?php echo $grade;?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_bemo" value=<?php echo $_GET['id_bemo'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>