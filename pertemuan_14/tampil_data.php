<?php

require "fungsi.php";
$data = allsiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h2 class="mb-4 text-center">Siswa Yang Sudah Mendaftar</h2>

	<a href="form_daftar.php" class="btn btn-primary">Tambah Data</a>
	<a href="index.php" class="btn btn-secondary">Home</a>
	<div class="my-4"></div>
	<table class="table mt-4" id="table-data">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php
		foreach ($data as $siswa) {
				echo "<tr>
				<td>" . $siswa['id'] . "</td>
				<td>" . $siswa['nama'] . "</td>
				<td>" . $siswa['alamat'] . "</td>
				<td>" . $siswa['kelamin'] . "</td>
				<td>" . $siswa['agama'] . "</td>
				<td>" . $siswa['sekolah'] . "</td>
				<td><a href='edit.php?id=" . $siswa['id'] . "' class='btn btn-primary mx-2'>Edit</a><a onclick='return confirm('Anda yakin untuk menghapus data " .$siswa['nama'] . "?')' href='hapus.php?id=" . $siswa['id'] . "' class='mx-2 btn btn-danger'>Hapus</a></td>
				</tr>";
			
		}
		?>
			
		</tbody>
		
	</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready( function () {
    $('#table-data').DataTable();
} );
</script>
</body>
</html>
