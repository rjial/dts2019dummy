<?php
include("koneksi.php");

if (isset($_GET['idbukutamu'])) {
    $idbukutamu = $_GET['idbukutamu'];
} else {
    die ("error, no id selected");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Halaman Depan</a> |
    <a href="input_bukutamu.php">Input Buku Tamu</a>
    <br><br>
    <h2>Delete Buku Tamu</h2>
    <?php
    if (!empty($idbukutamu) && $idbukutamu != "") {
        $query = "DELETE FROM bukutamu WHERE id='$idbukutamu'";
        $sql = mysqli_query($conn, $query);

        if($sql) {
            echo "<h2><font color='green'>Data telah didelete</font></h2>";
        } else {
            echo "<h2><font color='red'>Data gagal didelete</font></h2>";
        }
    }
    ?>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>