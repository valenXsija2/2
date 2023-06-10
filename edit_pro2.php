<?php

include("koneksi.php");

if(isset($_POST['simpan'])){
    
        $id_penyewaans=$_POST['id_penyewaan'];
        $id_bemos=$_POST['id_bemo'];
        $id_customers=$_POST['id_customer'];
        $tanggal_mulais=$_POST['tanggal_mulai'];
        $tanggal_pengembalians=$_POST['tanggal_pengembalian'];
        $hargas=$_POST['harga'];


    $result = mysqli_query($koneksi,"UPDATE penyewaan SET id_bemos='$id_bemos', id_customer='$id_customers',tanggal_mulai='$tanggal_mulais',tanggal_pengembalian='$tanggal_pengembalians' ,harga='$hargas' WHERE id_penyewaan='$id_penyewaans'");
    header('Location: tabel2.php');

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