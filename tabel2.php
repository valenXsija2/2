<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="tabel.css">
    </head>
    <body>
    <nav>
        <div class="layar-dalam"></div>
        <div class="logo">
            <a href=""><img src="logo4.png" class="putih"/></a>
            <a href=""><img src="logo3.png" class="hitam"/></a>
        </div>
        <div class="menu">
            <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <ul>
                <li><a href="indexa.html">Home</a></li>
                <li><a href="tabel.php">Grade</a></li>
                <li><a href="tabel2.php">Penyewaan</a></li>
            </ul>
        </div>
    </nav>
    <div class="layar-penuh">
        <header id="home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="km_Templat 20230320-salin-salin_1080p_30f_20230320_184124.mp4" type="video/mp4">
            </video>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
	    <table border="1" class="table">
		    <tr>
                <th>id customer</th> 
                <th>Username</th>
    			<th>Password</th>
                <th>Nama</th>
                <th>CRUD</th>
            
        <?php 
        include "koneksi.php";

        $result = mysqli_query($koneksi, "SELECT * from customer")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['Username']; ?></td>
            <td><?php echo $data['Password']; ?></td>
            <td><?php echo $data['Name']; ?></td>
            <td><a href='edit2.php?id_username=<?php echo $data['id_bemo'];?>'>Edit</a>
                <a href='add2.php?id_Password'>add</a>
                <a href='hapus2.php?Name=<?php echo $data['id_bemo'];?>'>Delete</a>
            </td>
        </tr>
        <?php } ?>
        
    </table>

</body>
</html>