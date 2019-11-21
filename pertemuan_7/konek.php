<?php
$user = "root";
$pass = "reeeeezal4su";
$db = "db_siswa";

$konek = mysqli_connect("localhost", $user, $pass, $db);

if ($konek) {
	echo "Koneksi berhasil";
}
?>
