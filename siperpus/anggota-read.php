<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>data anggota</title>
</head>
<body>
  <table border="1">
    <h1>Data Anggota</h1>
    <a href="anggota-form.php">[ tambah ]</a>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>Telp</th>
      <th>Menu</th>
    </tr>

    <?php
    include 'koneksi.php';
    $query = "SELECT * FROM anggota";
    $anggota = mysqli_query($koneksi, $query);

    foreach ($anggota as $key => $value) {
    ?>
      <tr>
        <th><?= $value['id_anggota']; ?></th>
        <td><?= $value['nama']; ?></td>
        <td><?= $value['alamat']; ?></td>
        <td><?= $value['email']; ?></td>
        <td><?= $value['telp']; ?></td>
        <td>
          <a href="anggota-form.php?id_anggota=<?= $value['id_anggota']; ?>">[ Ubah ]</a>
          <a href="anggota-act.php?id_anggota=<?= $value['id_anggota']; ?>" onclick="return confirm('beneran hapus? <?= $value['nama'] ?>!')">[ Hapus ]</a>
          <a href="anggota-print.php" target="_blank">print</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>
</html>