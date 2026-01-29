<?php

echo 3 + 2 * 5; // Multiplicação tem precedência sobre adição
echo "<br>";
echo (3 + 2) * 5; // Parênteses alteram a ordem de precedência
echo "<br>";
echo 5 + 2 / 10;
echo "<br>";

$a = 5;
$b = 2;
$c = 10;

echo $a + $b / $c;
echo "<br>";
echo $c + $b / $a;
echo "<br>";


$d = $a * $b * $c;
echo $d;
echo "<br>";