<?php
include('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/regular.min.css" integrity="sha256-1xUFPzbRrl0qOLXDyBNYpuBMMThdiVPJEtZx24deLeg=" crossorigin="anonymous" />
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
        <div class="judul"><h1>Daftar Kosakata<h1></div>
            <form action="index.php" method="POST" name="input">
            <div class="kotak flex-center">
                <select class="bahasa" name='bahasa'>
                    <option value='inggris'>Inggris</option>
                    <option value='indonesia'>Indonesia</option>
                </select>
                <input type="text" class="kotak_isi" name="kotak_isi" />
                <input type="submit" class="tombol_submit" name="input" value="Cari" />
            </div>
            </form>
        <?php
        if (isset($_POST['input'])) {
            $kotak_isi = addslashes(strip_tags($_POST['kotak_isi']));
            $bahasa = addslashes(strip_tags($_POST['bahasa']));
            // $kotak_isi = $_POST['kotak_isi'];
            // $bahasa = $_POST['bahasa'];
            $query = "SELECT * FROM kamus WHERE $bahasa='$kotak_isi'";
            
            $queryy = mysqli_query($conn, $query);
            
            ?>
                <div class="hasil">
                <?php
            if ($queryy) {
                while ($hasil = mysqli_fetch_array($queryy)) {
                    echo "<h2>" . $hasil[$bahasa] . "</h2>";
                    if ($bahasa == 'inggris') {
                        echo "<p class='kosakata'> Indonesia : " . $hasil['indonesia'] . "</p>";    
                    } elseif($bahasa == 'indonesia') {
                        echo "<p class='kosakata'> Inggris : " . $hasil['inggris'] . "</p>";
                    }
                    echo "<p class='deskripsi'>" . $hasil['deskripsi'] . "</p>";
                    echo "<hr />";
                }
                
            } else {
                // echo $query . "<br/>";
                echo "kosakata tidak ada";
            }
            ?>
                </div>
            <?php
        }
        ?>
    </div>
</body>
</html>