<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form anggota</title>
</head>
<body>
  <h1>form anggota</h1>

  <?php

if(@$_GET['id_anggota']) {
    include 'koneksi.php';
    $id_anggota = $_GET['id_anggota'];
    $query = "SELECT * FROM anggota WHERE id_anggota = $id_anggota";
    $anggota = mysqli_query($koneksi, $query);
    $a = mysqli_fetch_array($anggota);
  }
  ?>

  <form action="anggota-act.php" method="post">
    <table>
      <tr>
        <td>nama</td>
        <td>: <input type="text" name="nama" value="<?= @$a['nama'] ?>"></td>
      </tr>
      <tr>
        <td>alamat</td>
        <td>: <textarea name="alamat" rows="3"><?= @$a['alamat'] ?></textarea></td>
      </tr>
      <tr>
        <td>email</td>
        <td>: <input type="text" name="email" value="<?= @$a['email'] ?>"></td>
      </tr>
      <tr>
        <td>telp</td>
        <td>: <input type="text" name="telp" value="<?= @$a['telp'] ?>"></td>
      </tr>

      <tr>
        <td></td>
        <td>
          <input type="hidden" name="id_anggota" value="<?= @$a['id_anggota'] ?>">
          <button type="submit" name="submit">simpan</button>

          <a href="anggota-read.php">[ kembali ]</a>
        </td>
      </tr>

    </table>
  </form>
</body>
</html>