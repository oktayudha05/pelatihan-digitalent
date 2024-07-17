<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];

// hapus data
if (@$_GET['id_anggota']) {
  $id_anggota = $_GET['id_anggota'];
  $query = "DELETE FROM anggota WHERE id_anggota = $id_anggota";
}

// edit data
else if (@$_POST['id_anggota']) {
  $id_anggota = $_POST['id_anggota'];
  $query = "UPDATE anggota SET nama = '$nama', alamat = '$alamat', email = '$email', telp = '$telp' WHERE id_anggota = $id_anggota";
} 

// tambah data
else {
  $query = "INSERT INTO anggota (nama, alamat, email, telp) VALUES ('$nama', '$alamat', '$email', '$telp')";
}

mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
header("location:anggota-read.php");