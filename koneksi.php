<?php
$host = "localhost";
$user = "root";
$pass = "reeeeezal4su";
$dbnm = "dbbukutamu";

$conn = mysqli_connect($host, $user, $pass, $dbnm);

if (!$conn) {
    die("server database tidak bisa tersambung");
}

?>
