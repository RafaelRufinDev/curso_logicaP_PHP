<?php

$a  = "5";
$b = 12;

$calculo = $a * $b;
echo $calculo . "<br>";

echo gettype($calculo);
echo "<br>";

echo gettype([]);
echo "<br>";

echo gettype(12.2);
echo "<br>";

echo gettype("teste");
echo "<br>";