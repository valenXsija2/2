<html>
    
    <head>
    <h1>Create Data Baru</h1>
    </head>

    <body>
        <h3>Data buku</h3>
	    <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>grade</td>
                    <td><input type="text" name="grade"></td>
                </tr>
                <tr> 
                    <td>harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_bemo= $_POST['bemo'];
        $id_= $_POST['grade'];
        $grade= $_POST['grade'];
        $grade= $_POST['grade'];
        $harga = $_POST['harga'];
        echo($grade);
        include_once("koneksi.php");
                
        // Insert user data into table
        $sql="INSERT INTO bemo (grade,harga) VALUES('$grade','$harga')";
        $result = mysqli_query($koneksi,$sql);
    

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:tabel.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>