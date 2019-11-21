<?php

include 'config.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', jurusan='$jurusan'";

$data = mysqli_query($conn, $query);

if ($data) {
  header("Location: index.php");
}
 ?>
