<?php

include 'config.php';

$id = $_GET['id_mhs'];

$kata = "DELETE FROM mahasiswa WHERE id_mhs='$id'";
$query = mysqli_query($conn, $kata);

if ($query) {
  header('Location: index.php');
}

 ?>
