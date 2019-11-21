<?php
include('koneksi.php');
if (isset($_POST['input'])) {
    $nama = addslashes(strip_tags($_POST['nama']));
    $email = addslashes(strip_tags($_POST['email']));
    $isi = addslashes(strip_tags($_POST['isi']));
    $kate = addslashes(strip_tags($_POST['kategori']));

    $query = "INSERT INTO bukutamu(tanggal, nama, email, isi, id_kategori) VALUES(NOW(), '$nama', '$email', '$isi', '$kate')";
    // echo $query;
    $sql = mysqli_query($conn, $query);

    if($sql) {
        echo "<h2><font color='green'>Data telah diinput</font></h2>";
    } else {
        echo "<h2><font color='red'>Data gagal diinput</font></h2>";
    }
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
    <h2>Input Buku Tamu</h2>

    <form action="" method="POST" name='input'>
	<p>
	    Kategori<br>
		<select name="kategori">
<?php
$kueri = mysqli_query($conn, "SELECT * FROM kategori");
while ($ddata = mysqli_fetch_array($kueri)) {
	echo "<option value='" . $ddata['id_kategori'] . "'>" . $ddata['namakategori'] . "</option>";
}
?>
		</select>
	</p>
	<p>
            Nama<br>
            <input type="text" name="nama" size="30" />
        </p>
        
        <p>
            Email<br>
            <input type="text" name="email" size="30" />
        </p>

        <p>
            Isi<br>
            <textarea name="isi" cols="50" rows="10" size="30"></textarea>
        </p>
        <input type="submit" name='input' value="input buku tamu" />
        <input type="reset" name='reset' value="cancel" />    
    </form>


</body>
</html>
