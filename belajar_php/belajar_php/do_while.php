<?php

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

$punakawan = array("semar", "gareng", "petruk", "bagong");
$i = 0;
do {
  echo $punakawan[$i] . "<br>";
  $i++;
} while ($i < count($punakawan));
