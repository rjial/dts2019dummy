<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="simpan.php" method="post">
      <table>
        <tr>
          <td>Nim</td>
          <td><input type="text" name="nim" value=""></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value=""></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name="jenis_kelamin" value="L">Laki-Laki<input type="radio" name="jenis_kelamin" value="P">Perempuan</td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>
            <select name="jurusan">
              <option value="Jurusan Pengangguran">Jurusan Pengangguran</option>
              <option value="Jurusan Pokok Kerjo">Jurusan Pokok Kerjo</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" value=""></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="submit" value="Simpan"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
