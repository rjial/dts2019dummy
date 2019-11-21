<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/regular.min.css" integrity="sha256-1xUFPzbRrl0qOLXDyBNYpuBMMThdiVPJEtZx24deLeg=" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <a href="index.php">Halaman Depan</a> |
    <a href="input_bukutamu.php">Input Buku Tamu</a>
    <br><br>
    <h2>Halaman Buku Tamu</h2>
	<form name="pencarian" method="get" style="display: flex" >
		<input type="text" name="cari" style="margin-right: 10px;"/>
		<input type="submit" name="submit" value="Cari" style="margin-right: 10px;"/>
	</form>
<?php
$querrrri = mysqli_query($conn, "SELECT * FROM kategori");
foreach ($querrrri as $hhhasill) {
	$idkate = $hhhasill['id_kategori'];
	$namakate = $hhhasill['namakategori'];

	echo "| <a href='index.php?kate=$idkate'>$namakate</a>";
}
?>
	<?php
if (isset($_GET['cari'])) {
	$keyword=$_GET['cari'];
	$query = "SELECT * FROM bukutamu WHERE isi LIKE '$keyword' ORDER BY tanggal DESC";
} elseif(isset($_GET['kate'])) {
	$idkate = $_GET['kate'];
	$query = "SELECT * FROM bukutamu WHERE id_kategori=$idkate ORDER BY tanggal DESC";
} else {
	$query = "SELECT * FROM bukutamu bt LEFT JOIN kategori k ON bt.id_kategori = k.id_kategori ORDER BY tanggal DESC";
}
    $sql = mysqli_query($conn, $query);

    while($hasil = mysqli_fetch_array($sql)) {
        $id = $hasil['id'];
        $tanggal = $hasil['tanggal'];
        $nama = $hasil['nama'];
        $email = $hasil['email'];
	$isi = $hasil['isi'];
	$kategori = $hasil['namakategori'];

        echo "<p>";
        echo "<b>" . $nama . "</b>, " . $email . "<br>";
        echo "<small>Ditambahkan pada: " . $tanggal . "</small><br>";
	echo "<small>Kategori: " . $kategori . "</small><br>";
        echo $isi . "<br>";
        echo "<small>Action: <a href='deletedata.php?idbukutamu=" . $id . "'>Hapus</a> | <a href='editdata.php?idbukutamu=" . $id . "'>Edit</a></small>";
        echo "</p>";
        echo "<hr>";
    }
    ?>
</body>
</html>
