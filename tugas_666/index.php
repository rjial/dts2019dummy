<?php
include 'connect.php';
if (isset($_POST['submit-tambah'])) {
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];

	$querytambah = mysqli_query($conn, "INSERT INTO barang(nama_barang, harga, stok, id_supplier, id_kategori) VALUES('$nama', '$harga', '$stok', 1, 1)");

	if ($querytambah) {
		$suksestambah = true;
	} else {
		$suksestambah = false;
	}
}

$queryindex = mysqli_query($conn, "select * from barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modaledit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaledit">Edit Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method='post'>
					<div class="form-group">
						<label>Nama Barang :</label>
						<input class="form-control" type="text" id="nama" name="nama">
						
					</div>
					<div class="form-group">
						<label>Harga :</label>
						<input class="form-control" type="text" id="harga" name="harga">
						
					</div>
					<div class="form-group">
						<label>Stok :</label>
						<input class="form-control" type="text" id="stok" name="stok">
						
					</div>
					
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
	</form>
    </div>
  </div>
</div>
	<div class="container">
		<h2 class="mt-3">Sistem Inventory</h2>
				<?php
				if (isset($_POST['submit-tambah'])) {
				?>
				<div class="row">
					<div class="col">
						<div class="alert <?php echo ($suksestambah==true) ? 'alert-success':'alert-danger' ?> alert-dismissible fade show" role="alert">
							Barang sukses ditambah!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						
					</div>
				</div>
<?php
				}
?>
				<div class='row mt-3'>
					<div class="col">
						<form action="" method="get" class="my-3 float-right"> 
							<div class="form-inline"> 
								<input type="text" class="form-control mr-3" name="cari" placeholder="Cari Barang...." />
								<input type="submit" class="btn btn-primary" name="submit_cari" value="Cari" />
							</div>
						</form>
					</div>
				</div>
				
		<div class="row mt-1">
			<div class="col-4">
				<form action="" method='post'>
					<div class="form-group">
						<label>Nama Barang :</label>
						<input class="form-control" type="text" name="nama">
						
					</div>
					<div class="form-group">
						<label>Harga :</label>
						<input class="form-control" type="text" name="harga">
						
					</div>
					<div class="form-group">
						<label>Stok :</label>
						<input class="form-control" type="text" name="stok">
						
					</div>
					<div class="form-group">
						<input class="form-control" type="submit" class="btn btn-primary" name="submit-tambah" value="Tambah">
						
					</div>
				</form>
			</div>
			<div class="col-8">
				
				<table class="table">
					<tr>
						<th style="width: 5%">No</th>
						<th style="width: 25%">Nama</th>
						<th>Harga</th>
						<th>Stok</th>
						<th style="width: 22%">Aksi</th>
					</tr>
<?php
foreach($queryindex as $data) {
?>
					<tr>
						<td><?php echo $data['id_barang'] ?></td>
						<td><?php echo $data['nama_barang'] ?></td>
						<td><?php echo $data['harga'] ?></td>
						<td><?php echo $data['stok'] ?></td>
						<td><button onclick="editbarang(<?php echo $data['id_barang'] ?>)" class="btn btn-primary mr-1">Edit</button><button onclick="" class="btn btn-danger mr-1">Hapus</button></td>	
					</tr>
<?php
}
?>
				</table>
			</div>
		</div>
		
				
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
function editbarang(id) {
	$.post("http://localhost/dts/tugas_666/showbarang.php",
{
	id_barang: id
},
	function(data, status) {
		console.log(data)
			$('#nama').val(data.nama_barang)
			$('#harga').val(data.harga)
			$('#stok').val(data.stok)
		$('#modaledit').modal('show')
	}
)	
}

function updatebarang(id) {
	console.log($('#nama').val())
}
$('document').ready(function () {
})
</script>
</body>
</html>
