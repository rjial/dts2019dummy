<?php
function perkenalan($nama, $salam) {
	echo "$salam, ";
	echo "Perkenalan, nama saya " . $nama . "<br/>";
	echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Komang", "Hi");

echo "<hr>";

$saya = "Medi";
$ucapansalam = "Selamat Pagi";

perkenalan($saya, $ucapansalam);
?>
