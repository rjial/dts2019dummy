<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
<?php
include 'config.php';

if (!isset($_GET['id'])) {
	header("Location: index.php");
} elseif (isset($_POST['warna'])) {
	$no = $_POST['no'];
	$nama_merek = $_POST['nama_merek'];
	$warna = $_POST['warna'];
	$jumlah = $_POST['jumlah'];

	$query = mysqli_query($conn, "update printer set nama_merek='$nama_merek', warna='$warna', jumlah='$jumlah' where no='$no'");
	if ($query) {
		header("Location: index.php?sukses=1");
	} else {
		header("Location: index.php?sukses=2");
	}
}
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from printer where no=$id");
$data = mysqli_fetch_array($query);
?>
	<div class="container">
		<h1>Tambah Data Barang</h1>
		<form action="" method="POST">
		<input type="hidden" name="no" value="<?php echo $data['no'] ?>">
			
			<div class="form-group">
				<label for="nama_merek">Nama Merek</label>
				<input id="nama_merek" class="form-control" type="text" name="nama_merek" value="<?php echo $data['nama_merek'] ?>">
			</div>
			<div class="form-group">
				<label for="warna">Warna</label>
				<input id="warna" class="form-control" type="text" name="warna" value="<?php echo $data['warna'] ?>">
			</div>
			<div class="form-group">
				<label for="jumlah">Jumlah</label>
				<input id="jumlah" class="form-control" type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Simpan</button>
				<button class="btn btn-danger" type="button">Ulangi</button>
				<button class="btn btn-secondary" type="button">Kembali</button>
			</div>

		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
