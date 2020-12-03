<?php

echo "MEMBUAT FUNGSI <br>";
function berhasil($nilai)
{
  echo "SELAMAT ANDA BERHASIL DENGAN NILAI : $nilai";
  return $nilai;
}
function gagal()
{
  echo "SELAMAT ANDA GAGAL";
}

$nilai = 90;

if ($nilai >= 75) {
  $hasil = berhasil($nilai) + 90;
  echo "<br>";
  echo $hasil;
} else {
  gagal();
}

echo "<br>";
echo "FUNGSI DENGAN PARAMETER <br>";
function jumlah($a, $b)
{
  return $a + $b;
}
$nilai1 = 10;
$nilai2 = 15;

echo jumlah($nilai1, $nilai2);

echo "<br>";
echo "FUNGSI BAWAAN <br>";
$sekarang = getdate();
print_r($sekarang);
echo "<br>";
echo "sekarang tanggal " . $sekarang["mday"] . $sekarang["month"];
