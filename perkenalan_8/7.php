<?php
function luas($lebar, $panjang) {
	$luas = $lebar * $panjang;
	return $luas;
}

function klingkaran($r) {
	$luas = 2 * 3.14 * $r;
	return $luas;
}

function llingkaran($r) {
	$luas = 3.14 * $r;
	return $luas;
}

function ktrapesium ($prtm, $kdua, $ktiga, $kempat) {
	$kliling = $prtm + $kdua + $ktiga + $kempat;
	return $kliling;
}


function ltrapesium ($sisisatu, $sisidua, $tinggi) {
	$sisi = $sisisatu + $sisidua;
	$luas = $sisi * $tinggi / 2;
	return $luas;
}

echo "Luas persegi panjangnya adalah " . luas(4, 6) . " cm<br/>";
echo "Keliling lingkarannya adalah " . klingkaran(10) . "cm <br/>";
echo "Luas lingkarannya adalah " . llingkaran(10) . "cm <br/>";
echo "Keliling trapesiumnya adalah " . ktrapesium(10, 12, 20, 30) . "cm <br/>";
echo "Luas trapesiumnya adalah " . ltrapesium(10, 12, 5) . "cm <br/>";
?>
