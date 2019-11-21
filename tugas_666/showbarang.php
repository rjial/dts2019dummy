<?php
header('Content-Type: application/json');
include 'connect.php';
$id_barang = (isset($_POST["id_barang"])) ? $_POST['id_barang']: '1';
$queryindex = mysqli_query($conn, "SELECT * from barang where id_barang='$id_barang'");

$json = mysqli_fetch_array($queryindex);
array_push($json, ['id' => $_POST['id_barang']]);
echo json_encode($json);

?>
