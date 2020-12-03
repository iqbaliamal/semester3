<?php

$punakawan = array("semar", "gareng", "petruk", "bagong");
echo $punakawan[0];
echo "<br>";
echo $punakawan[3];
echo "<br>";

$punakawan[1] = "semar";
$punakawan[2] = "gareng";
$punakawan[3] = "petruk";
$punakawan[4] = "bagong";

echo "<br>";
echo "<br>";

$i = 0;
while ($i < count($punakawan)) {
  echo $i . "<br>";
  $i++;
}

echo "<br>";
echo "<br>";

$balikarray = array_reverse($punakawan);
foreach ($balikarray as $a) {
  # code...
  echo $a . "<br>";
}
