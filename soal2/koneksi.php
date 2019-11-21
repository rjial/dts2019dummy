<?php

$host = 'localhost';
$user = 'root';
$pass = 'reeeeezal4su';
$db = 'tokobuku';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("server database tidak bisa tersambung");
}

?>