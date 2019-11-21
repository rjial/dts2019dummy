<?php
include("koneksi.php");

if (isset($_GET['idbukutamu'])) {
    $idbukutamu = $_GET['idbukutamu'];
} else {
    die ("error, no id selected");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Halaman Depan</a> |
    <a href="input_bukutamu.php">Input Buku Tamu</a>
    <br><br>
    <h2>Edit Buku Tamu</h2>
    <?php
    if (!empty($idbukutamu) && $idbukutamu != "") {
        // $query = "DELETE FROM bukutamu WHERE id='$idbukutamu'";
        // $sql = mysqli_query($conn, $query);

        // if($sql) {
        //     echo "<h2><font color='green'>Data telah didelete</font></h2>";
        // } else {
        //     echo "<h2><font color='red'>Data gagal didelete</font></h2>";
        // }
        if (isset($_POST['input'])) {
            $id = addslashes(strip_tags($_POST['id']));
            $nama = addslashes(strip_tags($_POST['nama']));
            $email = addslashes(strip_tags($_POST['email']));
	    $isi = addslashes(strip_tags($_POST['isi']));
	    $kate = addslashes(strip_tags($_POST['kategori']));
	    

            $query = "UPDATE bukutamu SET nama='$nama', email='$email', isi='$isi', id_kategori='$kate' WHERE id='$id'";
            $sql = mysqli_query($conn, $query);
            
            if($sql) {
                echo "<h2><font color='green'>Data telah diubah</font></h2>";
                echo "<a href='index.php'>Kembali</a>";
            } else {
                echo "<h2><font color='red'>Data gagal diubah</font></h2>";
                echo "<a href='editdata.php?idbukutamu=$id'>Kembali</a>";
            }

        } else {
            // echo "bla";
            $query = "SELECT * FROM bukutamu WHERE id='$idbukutamu'";
            $sql = mysqli_query($conn, $query);
            $hasil = mysqli_fetch_array($sql);
            if ($hasil) {
                $nama = strip_tags($hasil['nama']);
                $email = strip_tags($hasil['email']);
		$isi = strip_tags($hasil['isi']);
		$kate = strip_tags($hasil['id_kategori']);
                json_encode([
                    'name' => $nama,
                    'email' => $email,
                    'isi' => $isi
                ]);
            
            ?>
	    <form action="" method="POST" name='input'>
<?php
		$kategori = mysqli_query($conn, "SELECT * FROM kategori");
		echo "<select name='kategori'>";
		foreach($kategori as $metu) {
			$selected = ($metu['id_kategori']==$kate) ? 'selected':'';
			echo "<option value=" . $metu['id_kategori'] . " $selected>" . $metu['namakategori'] . "</option>";
		} 
		echo "</select>";
?>
                    <?php
                    echo "<input type='hidden' name='id' value='$idbukutamu' size='30' />";
                    ?>
                <p>
                    Nama<br>
                    <?php
                    echo "<input type='text' name='nama' value='$nama' size='30' />";
                    ?>
                </p>
                
                <p>
                    Email<br>
                    <?php
                    echo "<input type='text' name='email' value='$email' size='30' />";
                    ?>
                </p>

                <p>
                    Isi<br>
                    <?php
                    echo "<textarea name='isi' cols='50' rows='10' size='30'>$isi</textarea>";
                    ?>
                </p>
                <input type="submit" name='input' value="input buku tamu" />
                <input type="reset" name='reset' value="cancel" />    
            </form>
            <a href="index.php">Kembali</a>
            <?php
            }
        }
    }
    ?>
    <br>
    
</body>
</html>
