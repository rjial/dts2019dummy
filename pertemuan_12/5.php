<?php

$hobi = [
  'membaca',
  'menulis',
  'negblog'
];

$hobi[3] = 'coding';

$hobi[] = 'olahraga';

foreach ($hobi as $value) {
  echo $value . "<br>";
}
echo "<hr>";


for ($i=0;$i<count($hobi);$i++){
  echo $hobi[$i] . "<br>";
}
 ?>
