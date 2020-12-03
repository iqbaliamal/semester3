<?php

$nilai = 80;

echo "CONTOH IF ELSE <br>";
if ($nilai >= 80) {
  echo "Selamat anda mendapat grade A <br>";
} elseif ($nilai > 70 && $nilai < 80) {
  echo "nilai anda " . $nilai . "<br>";
} else {
  echo "maaf anda belum dapat grade A <br>";
}

echo "CONTOH SWITCH CASE <br>";
switch ($nilai) {
  case 100:
    echo "Nilai yang dipilih 100 <br>";
    # code...
    break;
  case 90:
    echo "Nilai yang dipilih 90 <br>";
    # code...
    break;
}

echo "CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
  echo "Lopping FOR ke : " . $i . "<br>";
}

echo "CONTOH FOR <br>";
$j = 1;
while ($j <= 5) {
  echo "looping While ke : " . $j . "<br>";
  $j++;
}
