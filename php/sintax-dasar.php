<?php
$tahun_lahir = 2005;
$tahun_sekarang = 2024;
$nama = "Budi";
$status = "belum kawin";
$umur = $tahun_sekarang - $tahun_lahir;
$platnomor = "AE";

echo $nama;
echo "<br>";
echo $umur;
echo "<br>";

//if else
if ($status == "Pelajar") {
  echo "Statusnya adalah Pelajar";
  echo "<br>";
} else if ($status == "Karyawan") {
  echo "Statusnya adalah Karyawan";
  echo "<br>";
} else {
  echo "Statusnya adalah Lainnya";
  echo "<br>";
}


//switch case
switch ($platnomor) {
  case "AB":
    echo "Jogja";
    echo "<br>";
    break;
  case "AA":
    echo "Kedu";
    echo "<br>";
    break;
  default:
    echo "Platnomor jauh";
    echo "<br>";
    break;
}

//for
for ($i = 0; $i < 5; $i++) {
  echo "loop ke-$i " . "kali";
  echo "<br>";
}

//while
$tes = 1;
while ($tes <= 5) {
  echo "while loop ke-$tes " . "kali";
  echo "<br>";
  $tes++;
}

//do while
$tes = 1;
do {
  echo "do while loop ke-$tes " . "kali";
  echo "<br>";
  $tes++;
} while ($tes <= 5);

//foreach
$warna = array("merah", "hijau", "biru");
foreach ($warna as $value) {
  echo "$value";
  echo "<br>";
}

//function
function perkalian($a, $b)
{
  return $a * $b;
}
echo "Hasil perkalian a x b = " . perkalian(3, 4);
echo "<br>";

//prosedur
function cetak($teks)
{
  echo $teks;
}
cetak("Hello World");
echo "<br>";
