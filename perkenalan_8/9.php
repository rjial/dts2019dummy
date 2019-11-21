<?php
function coba1($coba) {
	return $coba;
}

function coba2($coba) {
	$ccoba = coba1("asdasfsdf") . " dan " . $coba;
	echo $ccoba;
}

coba2("asfagfsdfgdfg");
?>
