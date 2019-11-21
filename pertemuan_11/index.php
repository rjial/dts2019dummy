<?php
include 'config.php';

$kata = "SELECT * FROM printer";
$query = mysqli_query($conn, $kata);
// $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
	
	<h1 class="text-center">Daftar Barang</h1>

	<a href="tambah.html" class="btn btn-primary">Tambah Barang</a>
	<br>
	<table class="table">
		<tr>
			<th>No</th>
			<th>Nama Merek</th>
			<th>Warna</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
		<?php
while ($data = mysqli_fetch_array($query)) {
	$no = $data['no'];
	$nama_merek = $data['nama_merek'];
	$warna = $data['warna'];
	$jumlah = $data['jumlah'];
			echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$nama_merek</td>";	
			echo "<td>$warna</td>";
			echo "<td>$jumlah</td>";
			echo "<td><a href='edit.php?id=$no' class='btn btn-primary'>Edit</a> <a href='hapus.php?id=$no' class='btn btn-danger'>Hapus</a>"; 
			echo "</tr>";
		}
		?>
	</table>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
