<?php
echo "abs<br>";
echo abs(99) . "<br>";
echo abs(-99) . "<br>";
echo abs(-13.35234) . "<br>";
echo "ceil<br>";
echo ceil(3.4) . "<br>";
echo ceil(3.91) . "<br>";
echo ceil(-24.1212) . "<br>";
echo "floor<br/>";
echo floor(3.4) . "<br>";
echo floor(3.91) . "<br>";
echo floor(-24.1212) . "<br>";
echo "round<br/>";
echo round(3.4) . "<br>";
echo round(3.4, 0) . "<br>";
echo round(3.9113131312, 3) . "<br>";
echo "pow<br/>";
echo pow(3,4) . "<br>";
echo pow(3,9) . "<br>";
echo pow(24,12) . "<br>";
echo "sqrt<br/>";
echo sqrt(144) . "<br>";
echo sqrt(225) . "<br>";

$array = [1,4,6,7,8,35,24,72,723,777,25];

echo "max : " . max($array) . "<br>";
echo "min : " . min($array) . "<br>";

echo strtolower("SFASFASFDASFASDFASDFASDFASDF") . "<br>";
echo strtoupper("ahgdfgdfgdfgadfgdfgad") . "<br>";

echo ucfirst("fasdfjksdfkjhgskahdfas") . "<br>";
echo lcfirst("Khjdsfjkahskasdfkjhgasdjkfhgka") . "<br>";
echo strlen("sdfgakjhdsfkjashdfahsf") . "<br>";
echo str_shuffle("askjdfhkjsadfjasjdf") . "<br>";

echo count([1,2,3,4,5,65,67,7]) . "<br>";
echo array_sum([1,2,3,4,5,65,67,7]) . "<br>";
echo "rata2 : " . array_sum([1,2,3,4,5,65,67,7]) / count([1,2,3,4,5,65,67,7]) . "<br>";
sort($array);
print_r($array);
echo "<br>";
$arrray = ["asdfasdf","dfghfdh","ertert", "ertertert", "iopiiopiop"];
sort($arrray);
print_r($arrray);
echo "<br>";

shuffle($arrray);
print_r($arrray);
echo "<br>";
echo array_pop($arrray);

?>
