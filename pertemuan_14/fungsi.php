<?php

//require "connect.php";

$conn = mysqli_connect('localhost', 'root', '', 'pertemuan_14');
function allsiswa() {
	global $conn;
	$query = mysqli_query($conn, 'select * from data');

	return $query;
}
function allguru() {
	global $conn;
	$query = mysqli_query($conn, 'select * from guru');

	return $query;
}
function allmapel() {
	global $conn;
	$query = mysqli_query($conn, 'select * from mapel');

	return $query;
}
function idsiswa($id) {
	global $conn;
	$query = mysqli_query($conn, "select * from data where id='$id'");
	$rows = [];
	while ($row = mysqli_fetch_assoc($query)) {
		$rows[] = $row;
	}

	return $rows[0];
}
function idmapel($id) {
	global $conn;
	$query = mysqli_query($conn, "select * from mapel where id_mapel='$id'");
	$rows = [];
	while ($row = mysqli_fetch_assoc($query)) {
		$rows[] = $row;
	}

	return $rows[0];
}
function idguru($id) {
	global $conn;
	$query = mysqli_query($conn, "select * from guru where id_guru='$id'");
	$rows = [];
	while ($row = mysqli_fetch_assoc($query)) {
		$rows[] = $row;
	}

	return $rows[0];
}
function addguru($nama, $alamat, $notelp, $ttl) {
	global $conn;
	$nama = htmlspecialchars($nama);
	$alamat = htmlspecialchars($alamat);
	$notelp = htmlspecialchars($notelp);
	$ttl = htmlspecialchars($ttl);
	$query = mysqli_query($conn, "insert into guru set nama='$nama', alamat='$alamat', telp='$notelp', ttl='$ttl'");
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function addmapel($mapel) {
	global $conn;
	$mapel = htmlspecialchars($mapel);
	$query = mysqli_query($conn, "insert into mapel set mapel='$mapel'");
	if ($query) {
		return true;
	} else {
		return false;
	}
}

function editmapel($mapel, $id) {
	global $conn;
	$mapel = htmlspecialchars($mapel);
	$query = mysqli_query($conn, "update mapel set mapel='$mapel' where id_mapel='$id'");
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function editguru($nama, $alamat, $notelp, $ttl, $id) {
	global $conn;
	$nama = htmlspecialchars($nama);
	$alamat = htmlspecialchars($alamat);
	$notelp = htmlspecialchars($notelp);
	$ttl = htmlspecialchars($ttl);
	$query = mysqli_query($conn, "update guru set nama='$nama', alamat='$alamat', telp='$notelp', ttl='$ttl' where id_guru='$id'");
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function addsiswa($nama, $alamat, $kelamin, $agama, $sekolah) {
	global $conn;
	$nama = htmlspecialchars($nama);
	$alamat = htmlspecialchars($alamat);
	$kelamin = htmlspecialchars($kelamin);
	$agama = htmlspecialchars($agama);
	$sekolah = htmlspecialchars($sekolah);
	$query = mysqli_query($conn, "insert into data set nama='$nama', alamat='$alamat', kelamin='$kelamin', agama='$agama', sekolah='$sekolah'");

	if ($query) {
		return true;
	} else {
		return false;
	}
}
function editsiswa($nama, $alamat, $kelamin, $agama, $sekolah, $id) {
	global $conn;
	$nama = htmlspecialchars($nama);
	$alamat = htmlspecialchars($alamat);
	$kelamin = htmlspecialchars($kelamin);
	$agama = htmlspecialchars($agama);
	$sekolah = htmlspecialchars($sekolah);
	$query = mysqli_query($conn, "update data set nama='$nama', alamat='$alamat', kelamin='$kelamin', agama='$agama', sekolah='$sekolah' where id='$id'");

	if ($query) {
		return true;
	} else {
		return false;
	}
}

function hapussiswa($id) {
	global $conn;
	$query = mysqli_query($conn, "delete from data where id='$id'");

	if ($query) {
		return true;
	} else {
		return false;
	}
}
function hapusguru($id) {
	global $conn;
	$query = mysqli_query($conn, "delete from guru where id_guru='$id'");

	if ($query) {
		return true;
	} else {
		return false;
	}
}

function hapusmapel($id) {
	global $conn;
	$query = mysqli_query($conn, "delete from mapel where id_mapel='$id'");

	if ($query) {
		return true;
	} else {
		return false;
	}
}
?>
