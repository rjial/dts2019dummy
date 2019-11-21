<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'config.php';
    if (isset($_POST['id_mhs'])) {
      $id = $_POST['id_mhs'];
      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $jurusan = $_POST['jurusan'];
      $alamat = $_POST['alamat'];

      $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', jurusan='$jurusan' WHERE id_mhs='$id'";
      $data = mysqli_query($conn, $query);

      if ($data) {
        header("Location: index.php");
      }

    }
    $id = $_GET['id_mhs'];
    $mahasiswa = mysqli_query($conn, "select * from mahasiswa where id_mhs=$id");
    $row = mysqli_fetch_array($mahasiswa);

    $jurusan = [
      'Sistem Informasi',
      'Jurusan Pengangguran',
      'Jurusan Pokok Kerjo'
    ];

    function getvalue($value, $input) {
      $result = $value==$input?'checked':'';
      return $result;
    }

     ?>
    <form class="" action="" method="post">
      <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']; ?>">
      <table>
        <tr>
          <td>Nim</td>
          <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name="jenis_kelamin" value="L" <?php echo getvalue('L', $row['jenis_kelamin']) ?>>Laki-Laki<input type="radio" name="jenis_kelamin" value="P" <?php echo getvalue('P', $row['jenis_kelamin']) ?>>Perempuan</td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td><select name="jurusan">
            <?php
            foreach ($jurusan as $value) {
              echo "<option value='$value'";
              echo $row['jurusan']==$value?'selected="selected"':'';
              echo ">$value</option>";
            }
             ?>
           </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="submit" value="Simpan"> | <a href="index.php">Kembali</a></td>
        </tr>
      </table>
    </form>
  </body>
</html>
