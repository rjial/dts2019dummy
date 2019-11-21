<?php
include 'config.php';

if (isset($_POST['warna'])) {
	$nama_merek = $_POST['nama_merek'];
	$warna = $_POST['warna'];
	$jumlah = $_POST['jumlah'];

	$query = mysqli_query($conn, "insert into printer set nama_merek='$nama_merek', warna='$warna', jumlah='$jumlah'");
	if ($query) {
		header("Location: index.php?sukses=1");
	} else {
		header("Location: index.php?sukses=2");
	}

}
?>
