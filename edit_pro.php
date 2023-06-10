<?php

include("koneksi.php");

if(isset($_POST['simpan'])){
    
        $id_bemos=$_POST['id_bemo'];
        $grades=$_POST['grade'];
        $hargas=$_POST['harga'];


    $result = mysqli_query($koneksi,"UPDATE bemo SET grade='$grades', harga='$hargas' WHERE id_bemo='$id_bemos'");
    header('Location: tabel.php');

    // // $query = mysqli_query($db, $koneksi);

    // // // apakah query update berhasil?
    // if( $result ) {
    //     // kalau berhasil alihkan ke halaman list-siswa.php
    //     header('Location: tabel.php');
    // } else {
    //     // kalau gagal tampilkan pesan
    //     die("Gagal menyimpan perubahan...");
    // }


} else {
    die("Akses dilarang...");
}

?>