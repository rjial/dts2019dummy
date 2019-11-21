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
        <?php
            $query = "SELECT * FROM kamus";
            
            $queryy = mysqli_query($conn, $query);
            
            ?>
                <div class="hasil">
                <?php
            if ($queryy) {
                while ($hasil = mysqli_fetch_array($queryy)) {
                    echo "<h2>" . $hasil['indonesia'] . "</h2>";
                        echo "<p class='kosakata'> Inggris : " . $hasil['inggris'] . "</p>";
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
        ?>
    </div>
</body>
</html>