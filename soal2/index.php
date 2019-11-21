<?php
include('koneksi.php');
$array_notif = [];
// if (isset($_POST) && !empty($_POST)) {
//     var_dump($_POST);
// }

if (isset($_POST['submit_hapus_buku'])) {
    $id_buku = strip_tags($_POST['id-buku']);

    $kkkueerri = "DELETE FROM barang WHERE id='$id_buku'";
    $ssqqlll_kkkueeri = mysqli_query($conn, $kkkueerri);

    if ($ssqqlll_kkkueeri) {
        $array_sukses = [
            "notif" => "Barang telah Dihapus!",
            "boolean" => "true"
        ];
        array_push($array_notif, $array_sukses);
    } else {
        $array_sukses = [
            "notif" => "Barang gagal Dihapus!",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
}

if (isset($_POST['submit_edit_form'])) {
    $id_buku = strip_tags($_POST['id-buku']);
    $judul_buku = strip_tags($_POST['judul-buku']);
    $penerbit_buku = strip_tags($_POST['penerbit-buku']);
    $genre_buku = strip_tags($_POST['genre-buku']);
    $harga_buku = strip_tags($_POST['harga-buku']);

    $kueri_edit_buku = "update barang set judul='$judul_buku', penerbit='$penerbit_buku', genre='$genre_buku', harga='$harga_buku' where id='$id_buku'";
    $sql_edit_buku = mysqli_query($conn, $kueri_edit_buku);

    if ($sql_edit_buku) {

        $array_sukses = [
            "notif" => "Barang telah Diedit!",
            "boolean" => "true"
        ];
        array_push($array_notif, $array_sukses);
    } else {
        $array_sukses = [
            "notif" => "Barang gagal Diedit!",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['judul-buku']) || empty($_POST['judul-buku'])) {
        $array_sukses = [
            "notif" => "Judul buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['penerbit-buku']) || empty($_POST['penerbit-buku'])) {
        $array_sukses = [
            "notif" => "Penerbit buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['genre-buku']) || empty($_POST['genre-buku'])) {
        $array_sukses = [
            "notif" => "Genre buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['harga-buku']) || empty($_POST['harga-buku'])) {
        $array_sukses = [
            "notif" => "Harga buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    // if (isset($kueri_edit_buku)) echo $kueri_edit_buku;
}
if (isset($_POST['submit_form'])) {
    $judul_buku = strip_tags($_POST['judul-buku']);
    $penerbit_buku = strip_tags($_POST['penerbit-buku']);
    $genre_buku = strip_tags($_POST['genre-buku']);
    $harga_buku = strip_tags($_POST['harga-buku']);

    $kueri_tambah_buku = "insert into barang(judul, penerbit, genre, harga) values('$judul_buku', '$penerbit_buku', $genre_buku, $harga_buku)";
    $sql_tambah_buku = mysqli_query($conn, $kueri_tambah_buku);

    if ($sql_tambah_buku) {

        $array_sukses = [
            "notif" => "Barang telah Disubmit!",
            "boolean" => "true"
        ];
        array_push($array_notif, $array_sukses);
    } else {
        $array_sukses = [
            "notif" => "Barang gagal Disubmit!",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['judul-buku']) || empty($_POST['judul-buku'])) {
        $array_sukses = [
            "notif" => "Judul buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['penerbit-buku']) || empty($_POST['penerbit-buku'])) {
        $array_sukses = [
            "notif" => "Penerbit buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['genre-buku']) || empty($_POST['genre-buku'])) {
        $array_sukses = [
            "notif" => "Genre buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
    if (!isset($_POST['harga-buku']) || empty($_POST['harga-buku'])) {
        $array_sukses = [
            "notif" => "Harga buku kosong",
            "boolean" => "false"
        ];
        array_push($array_notif, $array_sukses);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-page">
        <div class='notifikasi'> 
        <?php
        if (!empty($array_notif)) {
            foreach ($array_notif as $value) {
                $notif_content = $value['notif'];
                if ($value['boolean'] == "true") {
                    echo "<div class='notif-content green-notif'>$notif_content</div>";
                } else {
                    echo "<div class='notif-content red-notif'>$notif_content</div>";
                }
            }
        }
        ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="header">Toko Buku</div>
            </div>
        </div>
        <div class="row" style="border-top-style: solid">
            <div class="col-4-xl col-12-m forrm-tambah-buku">
                <h2 class="label-form">Form Tambah Buku</h2>
                <form action="" method="POST" class="form-tambah-buku" name="form-tambah-buku">
                    <div class="judul-buku">
                        <label>Judul Buku</label>
                        <br>
                        <input type="text" name="judul-buku" class="judul-buku" />
                    </div>
                    <div class="penerbit-buku">
                        <label>Penerbit Buku</label>
                        <br>
                        <input type="text" name="penerbit-buku" class="judul-buku" />
                    </div>

                    <div class="genre-buku">
                        <label>Judul Buku</label>
                        <br>
                        <select name='genre-buku'>
                            <?php
                            $querygenre = "SELECT * FROM genre";
                            $query = mysqli_query($conn, $querygenre);
                            while($hasil = mysqli_fetch_array($query)) {
                                $id = $hasil['id'];
                                $genre = $hasil['genre'];
                            echo "<option value='$id'>$genre</option> \n";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="harga-buku">
                        <label>Harga Buku</label>
                        <br>
                        <input type="text" name="harga-buku" class="harga-buku" />
                    </div>
                    <input type="submit" name="submit_form" class="submit_form" value="Submit" />
                </form>
            </div>
            <div class='col-8-xl col-12-m table-barang-buku'>
                <h2 class="label-form">Tabel Daftar Buku</h2>
                <table width="100%">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penerbit Buku</th>
                        <th>Genre Buku</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $kueri = "SELECT * from barang";
                    $kuerii = mysqli_query($conn, $kueri);
                    // var_dump(mysqli_fetch_array($sqlyy));

                    
                    while ($hasile = mysqli_fetch_array($kuerii)) {
                        $idididid = $hasile['id'];
                        echo "<div class='modal' id='modaledit_$idididid'> \n";
                        ?>
                        <div class="modal-content">
                            <?php echo "<button id='close-modal' onclick='closeModal(modaledit_$idididid)'>✖</button> \n"; ?>
                            <h2>Edit Barang</h2>
                            <form action="" method="POST" name="form-edit-buku">
                                <div class="judul-buku">
                                    <label>Judul Buku</label>
                                    <br>
                                    <?php
                                    echo "<input type='text' name='judul-buku' class='judul-buku' value='" . $hasile['judul'] . "' /> \n";
                                    ?>
                                </div>
                                <div class="penerbit-buku">
                                    <label>Penerbit Buku</label>
                                    <br>
                                    <?php
                                    echo "<input type='text' name='penerbit-buku' class='judul-buku' value='" . $hasile['penerbit'] . "' /> \n";
                                    ?>
                                </div>
                                <div class="genre-buku">
                                    <label>Judul Buku</label>
                                    <br>
                                    <select name='genre-buku'>
                                        <?php
                                        $querygenre = "SELECT * FROM genre";
                                        $query = mysqli_query($conn, $querygenre);
                                        while($hasil = mysqli_fetch_array($query)) {
                                            $id = $hasil['id'];
                                            $genre = $hasil['genre'];
                                        if ($id == $hasile['genre']) {
                                            echo "<option value='$id' selected>$genre</option> \n";
                                        } else {
                                            echo "<option value='$id'>$genre</option> \n";
                                        }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="harga-buku">
                                    <label>Harga Buku</label>
                                    <br>
                                    <?php
                                        echo "<input type='text' name='harga-buku' class='harga-buku' value='" . $hasile['harga'] . "' /> \n";
                                    ?>
                                </div>
                                <?php
                                    echo "<input type='hidden' name='id-buku' value='" . $hasile['id'] . "' /> \n";
                                ?>
                                <input type="submit" name="submit_edit_form" class="submit_form" value="Submit" />

                            </form>
                            </div>
                        </div>
                        <?php
                        echo "<div class='modal' id='modalhapus_$idididid'> \n";
                        ?>
                        <div class="modal-content">
                                <?php echo "<button id='close-modal' onclick='closeModal(modalhapus_$idididid)'>✖</button> \n"; ?>
                            <h3>Yakin menghapus <?php echo $hasile['judul']; ?>?</h3>
                            <form action="" method="POST" name="form-hapus-buku">
                                <input type="hidden" name="id-buku" <?php echo "value='$idididid';"  ?> />
                                <div class="rata-kanan">
                                    <input type="submit" name="submit_hapus_buku" class="submit-hapus-buku" value="Hapus" />
                                    <?php echo "<button class='submit-hapus-buku batals' onclick='closeModal(modalhapus_$idididid)'>Batal</button> \n"; ?>
                                </div>
                            </form>
                            <br />
                            </div>
                        </div>
                        <?php
                        echo "<tr>";
                        echo "<td>" . $hasile['id'] . "</td>";
                        echo "<td>" . $hasile['judul'] . "</td>";
                        echo "<td>" . $hasile['penerbit'] . "</td>";
                        $iidd = $hasile['genre'];
                        $qqueerrii = "SELECT * FROM genre WHERE id=$iidd";
                        $kueeri = mysqli_query($conn, $qqueerrii);
                        
                        while ($kuueeri = mysqli_fetch_array($kueeri)) {
                            echo "<td>" . $kuueeri['genre'] . "</td> \n";
                        }
                        echo "<td>" . $hasile['harga'] . "</td> \n";
                        echo "<td><a href='#' onclick='openModal(modalhapus_$idididid);event.preventDefault();' class='hapus-buku'>Hapus</a> \n <a href='#' onclick='openModal(modaledit_$idididid);event.preventDefault();' class='edit-buku'>Edit</a></td> \n";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php
    // if (!empty($array_notif)) var_dump($array_notif);
    ?>
    <!-- <div class="row">
        <div class="col-12 footer">
            By tuxsenpaai
        </div>
    </div> -->
    <script>
        <?php
        $qqqqueerri = "select id from barang";
        $sql_qqquuerri = mysqli_query($conn, $qqqqueerri);

        while ($hhassil = mysqli_fetch_array($sql_qqquuerri)) {
            // $id_hassilll = $hhassil['id'];
            // echo "var button_edit_$id_hassilll = document.getElementById('edit_$id_hassilll') \n";
            // echo "var button_hapus_$id_hassilll = document.getElementById('hapus_$id_hassilll') \n";
            // echo "var modal_$id_hassilll = document.getElementById('modal_$id_hassilll') \n";
            // echo "var close_btn_$id_hassilll = document.getElementById('close_btn_$id_hassilll') \n";
        }
        ?>

        function openModal(modal) {
            modal.style.display = "block";
        }

        function closeModal(modal) {
            modal.style.display = "none";
        }

        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                var notifikasi = document.getElementsByClassName("notifikasi");
                setTimeout(function() {
                    for(var i=0;i<notifikasi.length;i+=1) {
                        notifikasi[i].style.display = "none"
                    }
                }, 3000)
            }
        }
    </script>
    <script src="js/common.js"></script>
    
</body>
</html>