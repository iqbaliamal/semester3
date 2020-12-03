<?php

$salaries = array(
  "muhammad" => 2000,
  "qadir" => 1000,
  "zara" => 500
);

echo "salary of muhammad is " . $salaries['muhammad'] . "<br>";
echo "salary of qadir is " . $salaries['qadir'] . "<br>";
echo "salary of zara is " . $salaries['zara'] . "<br>";

$salaries['muhammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";

echo "salary of muhammad is " . $salaries['muhammad'] . "<br>";
echo "salary of qadir is " . $salaries['qadir'] . "<br>";
echo "salary of zara is " . $salaries['zara'] . "<br>";
