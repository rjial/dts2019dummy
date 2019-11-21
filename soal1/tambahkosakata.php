<?php
include('koneksi.php');
$error=false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="daftarkosakata.php">Daftar Kosakata</a></li>
            <li><a href="tambahkosakata.php">Tambah Kosakata</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="judul"><h1>Tambah Kosakata<h1></div>
        <?php
        if (isset($_POST['input'])) {
            $bahasa = addslashes(strip_tags($_POST['bahasa']));
            $awal_kosakata = addslashes(strip_tags($_POST['awal_kosakata']));
            $lawan_kosakata = addslashes(strip_tags($_POST['lawan_kosakata']));
            $deskripsi_kosakata = addslashes(strip_tags($_POST['deskripsi_kosakata']));
        
            if ($bahasa == 'indonesia') {
                $query = "INSERT INTO kamus(indonesia, inggris, deskripsi) VALUES('$awal_kosakata', '$lawan_kosakata', '$deskripsi_kosakata')";
            } elseif($bahasa == 'inggris') {
                $query = "INSERT INTO kamus(inggris, indonesia, deskripsi) VALUES('$awal_kosakata', '$lawan_kosakata', '$deskripsi_kosakata')";
            }
        
            $sql = mysqli_query($conn, $query);
        
            if($sql) {
                ?>
                    <h2 class="success">Input sukses</h2>
                <?php
            } else {
                ?>
                    <h2 class="error">Input gagal</h2>
                <?php
            }
        }
        ?>
        <form action="" method="POST">
            <div class="pilih_bahasa">
                <label for="bahasa">Pilih Bahasa</label>
                <br>
                <select name="bahasa" id="bahasa">
                    <option value="indonesia">Indonesia</option>
                    <option value="inggris">Inggris</option>
                </select>
            </div>
            <div class="isi_kosakata">
                <label for="awal_kosakata">Isi Kosakata Baru</label>
                <br>
                <input type="text" name="awal_kosakata" id='awal_kosakata' />
            </div>

            <div class="lawan_kosakata">
                <label for="lawan_kosakata">Arti Kosakata Baru</label>
                <br>
                <input type="text" name="lawan_kosakata" id='lawan_kosakata' />
            </div>

            <div class="deskripsi_kosakata">
                <label for="deskripsi_kosakata">Deskripsi Kosakata Baru</label>
                <br>
                <textarea name="deskripsi_kosakata" id='deskripsi_kosakata' rows="10"></textarea>
            </div>
            <input type="submit" value="submit" name="input" />
        </form>
    </div>
</body>
</html>