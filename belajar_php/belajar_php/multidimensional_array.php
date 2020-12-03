<?php

$marks = array(
  "muhammad" => array(
    "physics" => 35,
    "math" => 50,
    "chemistry" => 39
  ),
  "qadir" => array(
    "physics" => 30,
    "math" => 32,
    "chemistry" => 29
  ),
  "zara" => array(
    "physics" => 32,
    "math" => 22,
    "chemistry" => 39
  )
);

echo "marks for mohammad in physics : " . $marks['muhammad']['physics'] . "<br>";
echo "marks for qadir in math : " . $marks['qadir']['math'] . "<br>";
echo "marks for zara in chemistry : " . $marks['zara']['chemistry'] . "<br>";
