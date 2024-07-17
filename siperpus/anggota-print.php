<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1', 'Hello World !');

include 'koneksi.php';
$query = "SELECT * FROM anggota";
$anggota = mysqli_query($koneksi, $query);

$activeWorksheet->setCellValue('A1', 'Data anggota');

$activeWorksheet->setCellValue('A3', 'NO');
$activeWorksheet->setCellValue('B3', 'NAMA');
$activeWorksheet->setCellValue('C3', 'ALAMAT');
$activeWorksheet->setCellValue('D3', 'EMAIL');
$activeWorksheet->setCellValue('E3', 'TELP');
$baris = 4;
$no = 1;

foreach ($anggota as $key => $value) {
  $activeWorksheet->setCellValue('A' . $baris, $no);
  $activeWorksheet->setCellValue('B' . $baris, $value['nama']);
  $activeWorksheet->setCellValue('C' . $baris, $value['alamat']);
  $activeWorksheet->setCellValue('D' . $baris, $value['email']);
  $activeWorksheet->setCellValue('E' . $baris, $value['telp']);

  $baris++;
  $no++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('data-anggota.xlsx');

header("Location: data-anggota.xlsx");