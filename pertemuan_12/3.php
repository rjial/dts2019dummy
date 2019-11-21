<?php
$barang = ['buku tulis', 'penghapus', 'spidol'];

foreach ($barang as $value) {
  echo $value . "<br>";
}

echo "<hr>";

$i = 0;
while ($i < count($barang)) {
  echo $barang[$i] . "<br>";
  $i++;
}
 ?>
