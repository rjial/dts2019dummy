<?php
require "fungsi.php";
//echo (!empty($_POST)==true) ? var_dump($_POST) : '';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$data = idguru($id);
	//$data = $data[0];
} else {
	header('Location: index.php');
}


if (!empty($_POST)) {
	if(editguru($_POST['nama'], $_POST['alamat'], $_POST['no-telp'], $_POST['ttl'], $id)) {
		header("Location: data_guru.php");
	} else {
		echo "false <br>";
		var_dump($_POST);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h2 class="text-center">Form Edit Guru (<?php echo $data['nama']; ?>)</h2>
	<form method='POST' action=''>
		<input type="hidden" name="tekan" value="true">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label for="nama">Nama Anda</label>
			<input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat Anda</label>
			<textarea id="alamat" name="alamat" value="" class="form-control"><?php echo $data['alamat']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="no-telp">No Telepon Anda</label>
			<input type="text" id="no-telp" name="no-telp" value="<?php echo $data['telp']; ?>" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="ttl">Tempat Tanggal Lahir</label>
			<textarea id="ttl" name="ttl" value="" class="form-control"><?php echo $data['ttl']; ?></textarea>
		</div>
		<input type="submit" name='submit' class="btn btn-primary" value="Edit"/>
		<a href="tampil_data.php" class="btn btn-secondary">Home</a>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
