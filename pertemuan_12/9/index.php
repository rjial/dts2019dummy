<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>List mahasiswa</h2>
    <table border=1>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
      <?php
      include 'config.php';
      $mahasiswa = mysqli_query($conn, "SELECT * from mahasiswa");
      $no = 1;
      foreach($mahasiswa as $row) {
        $jenis_kelamin =  $row['jenis_kelamin'] == 'P' ? 'Perempuan':'Laki - Laki';
        echo "<tr>
        <td>$no</td>
        <td>" . $row['nim'] . "</td>
        <td>" . $row['nama'] . "</td>
        <td>" . $jenis_kelamin . "</td>
        <td>" . $row['jurusan'] . "</td>
        <td><a href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a> | <a href='delete.php?id_mhs=$row[id_mhs]'>Hapus</a></td>
        </tr>";
        $no++;
      }
       ?>
    </table>
    <a href="form-input.php">Input Data</a>
  </body>
</html>
