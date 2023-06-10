<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_penyewaan']) ){
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
$id_customer = $_GET['id_customer'];
 
// Fetech user data based on id

$result = mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer = '1'");

if ($result) {
    $user_data = mysqli_fetch_array($result);

    $username = $user_data['Username'];
    $password = $user_data['Password'];
    $name = $user_data['Name'];

    // Lanjutkan dengan pengolahan data yang diperoleh
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);


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
    <form method="POST" action="edit_pro2.php">
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
                <td>Name</td>
                <td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_penyewaan" value=<?php echo $_GET['id_penyewaan'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>